<?php
/**
 * Created by PhpStorm.
 * User: bangweiwei
 * Date: 2019-04-17
 * Time: 13:42
 */
return [
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
];