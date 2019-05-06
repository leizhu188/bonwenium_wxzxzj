<?php
/**
 * 入口：首页
 * 出口：图书馆书单列表页
 */
return [
    //对 已上架 遍历
    app('actions.libraryAction.common.indexto_booklist_public'),
    app('scenarios.libraryScenario.common.label_name'),
    //对 未上架 遍历
    app('actions.libraryAction.common.indexto_booklist_private'),
    app('scenarios.libraryScenario.common.label_name')
];