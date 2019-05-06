<?php
/**
 * 创建不上架书单
 * 入口：首页
 * 出口：图书创建页
 */
return [
    app('actions.libraryAction.common.indexto_book'),
    //勾选任意三个 -> 开始创建书单
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-content"]/div/div[1]/div[1]/label/span/span',
        'value' => 'click',
        'level' => 'must',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-content"]/div/div[2]/div[1]/label/span/span',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-content"]/div/div[3]/div[1]/label/span/span',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div[2]/button[1]/span',
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
    //标题 说明
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[2]/div[1]/div[1]/div[1]/div[1]/div[2]/div/input',
        'value' => 'write:这是测试书单标题'.random_int(0,1000),
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[2]/div[1]/div[1]/div[2]/div/div/textarea',
        'value' => 'write:这是测试书单说明！@#¥%……&*（）——!@#$%^&*()',
    ],
    //使上传按钮显现
    [
        'type'  => 'function',
        'value' => 'LibraryFunction@appearInputFile',
    ],
    //上传封面
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[2]/div[1]/div[1]/div[1]/div[2]/div/div[3]/div[1]/div/input',
        'value' => 'write:/Users/bangweiwei/Downloads/abc.jpg',
    ],
    [
        'type'  => 'until',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[2]/div[1]/div[1]/div[1]/div[2]/div/div[3]/div[1]/div/button/span[text()="修改封面"]',
        'value' => 'appear',
    ],
    [
        'type'  => 'sleep',
        'value' => '1',
    ],
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
                'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div/div[1]/span',
                'value' => 'exist'
            ],
            [
                'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[1]',
                'value' => 'exist'
            ],
            [
                'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[2]',
                'value' => 'exist'
            ],
        ]
    ],
    //点击 不上架
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[2]',
        'value' => 'click:move'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[3]/div/div[2]/div/div[3]/button[2]',
        'value' => 'click'
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    //点击 知道了
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[5]/div/div[2]/div/div[2]/button',
        'value' => 'click:move'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="bodyer"]/div/div[5]/div/div[2]/div/div[2]/button',
        'value' => 'click'
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
];