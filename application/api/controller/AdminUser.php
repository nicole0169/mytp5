<?php
/**
 * Created by PhpStorm.
 * User: miaomin
 * Date: 7/18/2017
 * Time: 16:37
 */

namespace app\api\controller;
use think\Controller;

class AdminUser extends Controller
{
    public function index(){
        return 'OOO';
    }

    public function adminUserInfo($id){
        return model('base/AdminUser')->find($id);
    }
}