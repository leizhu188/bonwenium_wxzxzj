<?php
/**
 * 图书内容修改
 */
return [
    app('actions.libraryAction.common.indexto_booklist_info'),
    //上架下架按钮 点两次
    [
        'type'  => 'function',
        'value' => 'LibraryFunction@handleInfoPublic',
    ],
    [
        'type'  => 'function',
        'value' => 'LibraryFunction@handleInfoPublic',
    ],
    //编辑图书
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[1]/div/div/div/button[1]',
        'value' => 'click',
    ],
    [
        'type'  => 'asserts',
        'list'  => [
            [
                'path'  => 'bw-path:>>tag:span>text:保存编辑',
                'value' => 'exist',
            ],
            [
                'path'  => 'bw-path:>>tag:span>text:放弃编辑',
                'value' => 'exist',
            ],
        ],
    ],
    //点击放弃再次点击编辑
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:放弃编辑',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:span>text:编辑书单',
        'value' => 'appear',
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:编辑书单',
        'value' => 'click',
    ],
    //点击保存再次点击编辑
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:保存编辑',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:span>text:编辑书单',
        'value' => 'appear',
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:编辑书单',
        'value' => 'click',
    ],
    //添加 名称，说明，封面
    app('actions.libraryAction.common.insert_booklist_info'),
    //保存编辑
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:保存编辑',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
];