<?php
/**
 * Created by PhpStorm.
 * User: bangweiwei
 * Date: 2019-04-12
 * Time: 10:56
 */
return [
    app('actions.user.login'),
    [
        [
            'sleep'=>2,
            'must_step'=>'tag:span>text:有权限老师>>>click',
        ],
        [
            'sleep'=>1,
            'must_step'=>'tag:a>text:个人中心>>>click',
        ],
        [
            'sleep'=>1,
            'must_step'=>'tag:div>text:更改头像>>tag:input>type:file>>>write:/Users/bangweiwei/Downloads/abc.jpg',
        ],
    ]
];