<?php
/**
 * Created by PhpStorm.
 * User: miaomin
 * Date: 7/20/2017
 * Time: 17:24
 */

return [

    // 默认输出类型
    //'default_return_type' => 'json',
    // 默认AJAX 数据返回格式,可选json xml ...
    //'default_ajax_return' => 'json',
    // 默认JSONP格式返回的处理方法
    //'default_jsonp_handler' => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler' => 'callback',
    // 默认时区
    'default_timezone' => 'PRC',

    'empty_controller' => 'Error',

    // 应用Trace
    'app_trace' => true,

    // +----------------------------------------------------------------------
    // | Trace设置 开启 app_trace 后 有效
    // +----------------------------------------------------------------------
    'trace'                  => [
        // 内置Html Console 支持扩展
        'type' => 'console',
    ],

];