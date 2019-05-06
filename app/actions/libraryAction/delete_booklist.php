<?php
/**
 * 图书删除
 */
return [
    app('actions.libraryAction.common.indexto_booklist_info'),
    //点击 删除书单 然后取消
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[1]/div/div/div/button[3]',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:div>text:提示',
        'value' => 'appear',
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:取消',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:div>text:提示',
        'value' => 'disappear',
    ],
    //点击 删除书单 然后确定
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[1]/div/div/div/button[3]',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:div>text:提示',
        'value' => 'appear',
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:确定',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
];