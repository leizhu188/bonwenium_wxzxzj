<?php
/**
 * Created by PhpStorm.
 * User: bangweiwei
 * Date: 2019-04-17
 * Time: 09:15
 */
return [
    //进入图书列表
    app('actions.libraryAction.common.indexto_booklist'),
    //选择已上架
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[2]/div/label[1]/span[2]',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
];