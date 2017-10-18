<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        layout(false);

        if (IS_POST){
            $code = I('code');
            $verify = new \Think\Verify();
            if ($verify->check($code,'')){
                $id = I('user_id');
                $pwd = I('user_pwd');
                $rs = M('teacher')->join('xs_auth_group_access on xs_teacher.teacher_id = xs_auth_group_access.uid')
                    ->where("teacher_id ='%s' and teacher_pwd = '%s'", $id, $pwd)->find();
                if ($rs) {
                    session('teacher_id', $id);
                    session('teacher_name', $rs['teacher_name']);
                    session('teacher_department', $rs['teacher_department']);
                    session('teacher_level', $rs['group_id']);
                    $this->success('',U('Declare/index'));
                }else{
                    $this->error('密码或账号错误', U('Index/index'),3);
                }
            }else{
                $this->error('验证码错误', U('Index/index'),3);
            }
        }
        $this -> display();
    }

    public function verify(){
        $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->entry();
    }



}