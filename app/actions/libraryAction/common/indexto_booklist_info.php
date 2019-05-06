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
    //选择第一个书单
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-content"]/div/div[1]/div[1]/img',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
];