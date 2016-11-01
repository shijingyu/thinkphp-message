<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2016/11/1
 * Time: 下午10:01
 */

namespace Home\Controller;


use Think\Controller;

//通用类，这里主要是为了做登录验证，之后如果需要登录验证的页面，只要继承这个类，即可判断用户是否登录，如果未登录,即跳转回登录界面
class CommonController extends Controller
{
    Public function _initialize()
    {
        if(!isset($_SESSION['uid']) || !isset($_SEESION['username']) )
        {

            $this -> redirect('admin.php/Login/index');
        }

    }

}