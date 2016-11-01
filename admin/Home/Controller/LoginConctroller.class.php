<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2016/11/1
 * Time: 下午10:06
 */

namespace Home\Controller;


use Think\Controller;

class LoginConctroller extends Controller
{
    public function index()
    {
        $this -> display();
        //调用Tpl/Login目录index.html，显示登录界面
    }

    public function login()
    {
        if(!IS_POST) halt('页面不存在');
        //判断表单提交
    }
}

