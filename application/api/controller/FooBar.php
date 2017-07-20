<?php
/**
 * Created by PhpStorm.
 * User: miaomin
 * Date: 7/20/2017
 * Time: 16:46
 */

namespace app\api\controller;
use think\Controller;


class FooBar extends Controller
{
    public function index(){
        return 'FooBar->Index';
    }
}