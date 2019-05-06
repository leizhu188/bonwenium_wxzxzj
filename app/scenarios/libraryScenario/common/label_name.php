<?php
/*
 * 入口：图书/书单首页
 * 出口：图书/书单首页
 */
return [
    //清搜索条件 点击搜索
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div[1]/div[2]/div/input',
        'value' => 'write:',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div[1]/div[2]/button',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    //标签遍历（前三个）
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[3]/div[2]/span[1]',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[3]/div[2]/span[2]',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[3]/div[2]/span[3]',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    //搜索关键字 点击搜索
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div[1]/div[2]/div/input',
        'value' => 'write:测试',
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[1]/div[1]/div[2]/button',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    //标签遍历（前三个）
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[3]/div[2]/span[1]',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[3]/div[2]/span[2]',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="page-head"]/div[3]/div[2]/span[3]',
        'value' => 'click',
        'level' => 'should',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ]
];