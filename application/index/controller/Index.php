<?php
namespace app\index\controller;

use Firebase\JWT\JWT;
use think\Controller;
use think\Exception;
use think\Request;
use think\Session;

class Index extends Controller
{
    public function index()
    {
        if (Session::has('userid')) {
            print_r($_SESSION);
            return 'Userid: ' . Session::get('userid');
        }
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5</div>';
    }

    public function login()
    {
        Session::set('userid', '25');
    }

    public function logout()
    {
        Session::clear();
    }

    public function jwt()
    {
        $jwt_key = "example_key";

        $jwt_payload = array(
            "iss" => "http://www.tp5.com",
            "aud" => "http://www.tp5.com",
            "exp" => 1501745641,
            "iat" => 1356999524,
            "nbf" => 1357000000,
            "name" => "wow730@gmail.com"
        );

        $jwt = JWT::encode($jwt_payload, $jwt_key);

        //var_dump($jwt);

        try {
            $jwt_decode = JWT::decode($jwt, $jwt_key, array("HS256"));

            var_dump($jwt_decode);

        } catch (\Firebase\JWT\SignatureInvalidException $e) {
            echo $e->getMessage();
        }


        /*var_dump($jwt_decode);

        $header_info = Request::instance()->header();

        var_dump($header_info);*/

    }

    public function videojj(){
        return $this->fetch();
    }
}
