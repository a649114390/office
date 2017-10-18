<?php
/**
 * Created by PhpStorm.
 * User: llz
 * Date: 17-8-30
 * Time: 下午5:12
 */

namespace Home\Controller;
use Think\Controller;

class MailController extends BaseController{
    public function index(){
        if (IS_AJAX){
            if (I('get.type') == 'data') {
                $rs['data'] = M('mail')->join('xs_teacher on xs_teacher.teacher_id = xs_mail.mail_from_id')
                    ->where('xs_mail.mail_to_id =%d or xs_mail.mail_to_id =%d',session('teacher_id'),session('teacher_department'))
                    ->order('xs_mail.mail_add_time desc')
                    ->select();
                $this->ajaxReturn($rs);
            }else if (I('get.type') == 'delete'){
                $rs = M('mail')->delete(I('data'));
                if ($rs) {
                    $this->ajaxReturn(1);
                } else {
                    $this->ajaxReturn(0);
                }
            }
        }else{
            $this->display();
        }

    }


    public function mailInfo(){
        $id = I('id');
        if (I('flag') == 0) {
//            未读短信
            M('mail')->where('id=%d',$id)->save(array('mail_flag' => 1,));
        }
        $rs = M('mail')->join('xs_teacher on xs_teacher.teacher_id = xs_mail.mail_from_id')
            ->where('xs_mail.id=%d',$id)->find();
//        dump($rs);
        $this->assign('info', $rs);
        $this->display();
    }

    public function sendMail(){
        if (IS_AJAX){
            if (I('get.mail') == 'recipient') {
                $teacher_id = I('post.mail_recipient');
                if (session('teacher_id') == $teacher_id) {
                    $this->ajaxReturn(-1);//发送给本人
                }else{
                    $rs = M('teacher')->where('teacher_id=%d', $teacher_id)->find();
                    if (!$rs) {
                        $this->ajaxReturn(0);//无此人
                    }else{
                        $this->ajaxReturn(1);//ok
                    }
                }

            }
        }elseif (IS_POST){
            $teacher_id = I('post.mail_id');
            if (empty($teacher_id)) {
                $teacher_id = I('post.mail_ids');
            }
            $title = I('post.title');
            $content = $_POST['content'];
            $rs = M('mail')->add(array(
                'mail_from_id'      =>  session('teacher_id'),
                'mail_to_id'        =>  $teacher_id,
                'mail_add_time'     =>  time(),
                'mail_title'        =>  $title,
                'mail_content' => $content,
            ));
            if ($rs) {
                $this->success('success');
            }else{
                $this->error('error');
            }
        }

        else{

            $this->display();
        }
    }
}