<?php
/**
 * 创建上架图书
 * 入口：首页
 * 出口：图书首页
 */
return [
    //进入题单详情
    app('actions.testbankAction.bill_info'),
    //全选 -> 开始创建图书
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-content"]/table/thead/tr/td[1]/label/span/span',
        'value' => 'click',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-content"]/div[1]/div/div[1]/button[1]/span',
        'value' => 'click',
    ],
    [
        'type'  => 'untils',
        'list'  =>[
            [
                'path'  => 'x-path://*[@id="bodyer"]/div/div[2]/div[1]/div[1]/div[1]/div[1]/div[1]',
                'value' => 'appear'
            ],
            [
                'path'  => 'x-path://*[@id="bodyer"]/div/div[2]/div[1]/div[1]/div[2]/div/p',
                'value' => 'appear'
            ],
            [
                'path'  => 'x-path://*[@id="bodyer"]/div/div[2]/div[2]/table/thead/tr/td[1]',
                'value' => 'appear'
            ],
        ]
    ],
    app('actions.libraryAction.common.insert_book_info'),
    //点击创建
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[1]/div/div/div/button/span',
        'value' => 'click',
    ],
    [
        'type'  => 'untils',
        'list'  =>[
            [
                'path'  => 'bw-path:>>tag:svg',
                'value' => 'disappear'
            ],
            [
                'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div',
                'value' => 'appear'
            ],
        ]

    ],
    //检验创建成功界面
    [
        'type'  => 'asserts',
        'list'  =>[
            [
                'path'  => '//*[@id="bodyer"]/div/div[3]/div/div[1]/span',
                'value' => 'exist'
            ],
            [
                'path'  => '//*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[1]',
                'value' => 'exist'
            ],
            [
                'path'  => '//*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[2]',
                'value' => 'exist'
            ],
        ]
    ],
    [
        'type'  => 'step',
        'path'  => '//*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[1]',
        'value' => 'click'
    ],
    //点击 上架
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[1]',
        'value' => 'click:move'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[1]',
        'value' => 'click'
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    //点击 去图书馆
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[4]/div/div[2]/div/div[2]/button[1]',
        'value' => 'click:move'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[4]/div/div[2]/div/div[2]/button[1]',
        'value' => 'click'
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
];