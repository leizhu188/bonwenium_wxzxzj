<?php
/*
 * 流程线：
 * 一次测试流程的分发口
 */
return [
    [
        'type'=>'step',
        'path'=>'x-path://*[@id="app"]/div[2]/div/div[1]/div/div[1]/input',
        'value'=>'write:18810680772',
    ],
    [
        'type'=>'step',
        'path'=>'x-path://*[@id="app"]/div[2]/div/div[1]/div/div[2]/div/input',
        'value'=>'write:123456',
    ],
    [
        'type'=>'step',
        'path'=>'x-path://*[@id="app"]/div[2]/div/div[1]/div/button',
        'value'=>'click',
    ],
];