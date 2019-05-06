<?php
/**
 * 书单下架
 */

return [
    app('actions.libraryAction.common.indexto_booklist_public'),
    //勾选第一个 -> 开始下架
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-content"]/div/div[1]/div[1]/label/span/span',
        'value' => 'click',
        'level' => 'must',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div[2]/button',
        'value' => 'click',
        'level' => 'must',
    ],
    //处理提示 取消
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:div>text:提示',
        'value' => 'appear',
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:取消',
        'value' => 'click',
        'level' => 'must',
    ],
    //再次点击下架
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:div>text:提示',
        'value' => 'disappear',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div[2]/button',
        'value' => 'click',
        'level' => 'must',
    ],
    //处理提示 确定
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:div>text:提示',
        'value' => 'appear',
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:确定',
        'value' => 'click',
        'level' => 'must',
    ],
];