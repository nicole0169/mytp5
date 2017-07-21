<?php
/**
 * Created by PhpStorm.
 * User: miaomin
 * Date: 7/21/2017
 * Time: 14:47
 */

namespace app\api\controller;
use think\Controller;


class Error extends Controller
{
    public function test(){
        return 'hello';
    }

    public function _empty(){
        return 'EmptyController';
    }
}