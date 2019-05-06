<?php
/**
 * Created by PhpStorm.
 * User: bonwe
 * Date: 2019-04-02
 * Time: 15:08
 * 标准操作样例 ：
 * 1.必须 搜索框输入内容
 * 2.必须 点击搜索
 */
return[
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:h2>text:用户登录',
        'value' => 'appear',
        'level' => 'must'
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:input>placeholder:请输入手机号',
        'value' => 'write:18810680775',
        'level' => 'must'
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:input>placeholder:请输入密码',
        'value' => 'write:123456',
        'level' => 'must'
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:button>text:登录',
        'value' => 'click',
    ],
    [
        'type'  => 'until',
        'path'  => 'bw-path:>>tag:h2>text:选择身份',
        'value' => 'appear',
    ],
    [
        'type'  => 'step',
        'path'  => 'bw-path:>>tag:span>text:在编教师',
        'value' => 'click',
    ],
];