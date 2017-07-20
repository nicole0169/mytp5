<?php
/**
 * Created by PhpStorm.
 * User: miaomin
 * Date: 7/18/2017
 * Time: 17:26
 */

namespace app\api\controller;
use think\Controller;


class Index extends Controller
{
    public function index(){
        return 'API->index->index';
    }

    public function sayHi(){
        return 'Hi';
    }
}