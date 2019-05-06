<?php
/**
 * Created by PhpStorm.
 * User: bonwe
 * Date: 2019-03-28
 * Time: 14:28
 */

namespace App\Functions;


use Bonwe\WebDriver\Remote\RemoteWebElement;

class LibraryFunction extends BaseFunction
{

    /*
     * 使上传按钮显现出来
     */
    public function appearInputFile(){
        $js = <<<js
var inputs = document.getElementsByName("files");
input = inputs[0];
input.classList.remove('el-upload__input');
js;
        $this->driver->executeScript($js);
    }

    /**
     * 处理图书详情中 上架/下架 测试
     */
    public function handleInfoPublic(){
        $element = $this->getElementByStr('x-path://*[@id="bodyer"]/div/div[1]/div/div/div/button[2]/span/span');
        if (empty($element)){
            //非自己编辑的图书
            $this->saveLog('function','no',__FUNCTION__,__FUNCTION__,'no power to update');
            return;
        }

        $element = $element[0];
        if (!($element instanceof RemoteWebElement)){
            //获取非常规元素
            $this->saveLog('function','no',__FUNCTION__,__FUNCTION__,'error RemoteWebElement');
            return;
        }

        if (trim($element->getText()) == '下架'){
            self::clickPublicOrPrivate($element,'private');
        }elseif (trim($element->getText()) == '上架'){
            self::clickPublicOrPrivate($element,'public');
        }
    }

    private function clickPublicOrPrivate(RemoteWebElement $element,$handle = 'private'){
        $rightStr = [
            'private'   => '下架',
            'public'    => '上架',
        ];
        $resultStr = [
            'private'   => '上架',
            'public'    => '下架',
        ];
        $element->click();
        $this->doUntil(
            [
                'type'  => 'until',
                'path'  => 'bw-path:>>tag:div>text:提示',
                'value' => 'appear',
            ]
        );
        $this->doStep(
            [
                'type'  => 'step',
                'path'  => 'bw-path:>>tag:span>text:确 定',
                'value' => 'click',
                'level' => 'must',
            ]
        );
        $this->doUntil(
            [
                'type'  => 'until',
                'path'  => 'bw-path:>>tag:svg',
                'value' => 'disappear'
            ]
        );
        usleep(500000);
        $this->checkError($rightStr[$handle].'成功');
        $this->doAssert(
            [
                'path'  => 'bw-path:>>tag:div>class:btn-group>>tag:span>text:'.$resultStr[$handle],
                'value' => 'exist',
            ]
        );
    }

}