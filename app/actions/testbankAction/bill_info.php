<?php
/*
 * 入口：首页
 * 出口：题单详情页
 */
return [
    //进入题库
    [
        'type'  => 'untils',
        'list'  => [
            [
                'path'  => 'x-path:/html/body/div/header/div/div/div[1]/a[2]',
                'value' => 'appear',
            ],[
                'path'  => 'bw-path:>>tag:svg',
                'value' => 'disappear',
            ]
        ]
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path:/html/body/div/header/div/div/div[1]/a[2]',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear',
    ],
    //筛选题单
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div/div[2]/div/div[2]/input',
        'value' => 'write:新概念第一册lesson22',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div/div[2]/div/div[2]/div[2]/button/span',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear',
    ],
    //进入题单详情
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>class:title>num:5',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear',
    ],
];