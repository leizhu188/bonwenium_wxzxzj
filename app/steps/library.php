<?php
/**
 * Created by PhpStorm.
 * User: bangweiwei
 * Date: 2019-04-09
 * Time: 14:56
 */
return [
    //登录
    app('actions.userAction.login'),
    //创建不上架图书
    app('actions.libraryAction.create_book_private'),
    //创建上架图书
    app('actions.libraryAction.create_book_public'),
    //创建不上架书单
    app('actions.libraryAction.create_booklist_private'),
    //创建上架书单
    app('actions.libraryAction.create_booklist_public'),
    //图书列表场景
    app('scenarios.libraryScenario.list_book'),
    //书单列表场景
    app('scenarios.libraryScenario.list_booklist'),
    //图书上架
    app('actions.libraryAction.update_book_public'),
    //书单上架
    app('actions.libraryAction.update_booklist_public'),
    //图书下架
    app('actions.libraryAction.update_book_private'),
    //书单下架
    app('actions.libraryAction.update_booklist_private'),
    //修改图书详情
    app('actions.libraryAction.update_book_info'),
    //修改书单详情
    app('actions.libraryAction.update_booklist_info'),
    //删除图书
    app('actions.libraryAction.delete_book'),
    //删除书单
    app('actions.libraryAction.delete_booklist'),
];