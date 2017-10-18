<?php
/**
 * Created by PhpStorm.
 * User: llz
 * Date: 17-8-30
 * Time: 上午10:42
 */

namespace Home\Controller;
use Think\Auth;
use Think\Controller;

class BaseController extends Controller{
    function __construct(){
        parent::__construct();
        if (session('teacher_id') == ''){
//            exit("<script>alert('请登录');</script>");
        }
        $auth = new Auth();
        if (!$auth->check(CONTROLLER_NAME  . '-' . ACTION_NAME, session('teacher_id'))){
//            exit("<script>alert('没权限');</script>");
        }

    }




}