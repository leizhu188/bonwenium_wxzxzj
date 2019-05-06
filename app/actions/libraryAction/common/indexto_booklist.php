<?php
/**
 * Created by PhpStorm.
 * User: bangweiwei
 * Date: 2019-04-17
 * Time: 09:15
 */
return [
    //点击首页
    [
        'type'  => 'step',
        'path'  => 'x-path://*[@id="logo"]',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    //点击图书馆
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:a>text:图书馆',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
    //点击书单
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:书单',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:svg',
        'value' => 'disappear'
    ],
];