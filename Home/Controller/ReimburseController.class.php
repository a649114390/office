<?php
/**
 * Created by PhpStorm.
 * User: llz
 * Date: 17-9-2
 * Time: 上午11:28
 */

namespace Home\Controller;
use Think\Controller;
use Think\Auth;

class ReimburseController extends BaseController{
    public function index(){

            if (IS_POST) {
                if (I('get.type') == 'form'){
                    $data =  I('form_data');
                    $upload = new \Think\Upload();// 实例化上传类
                    $upload->maxSize = 3145728 ;// 设置附件上传大小
                    //        $upload->exts = array('rar', 'zip', '', 'jpeg');// 设置附件上传类型
                    $upload->rootPath = './Uploads/'; // 设置附件上传根目录
//            $upload->savePath =  array('date','Ymd'); // 设置附件上传（子）目录
                    // 上传文件

                    if ($_FILES['file']['name']!=''){

                        $info = $upload->uploadOne($_FILES['file']);
                        if(!$info) {// 上传错误提示错误信息
                            $this->error($upload->getError());
                        }
                        $path = '/Uploads/' . $info['savepath'] . $info['savename'];
                    }else{
                        $path = '';
                    }
                    $data = D('reimburse')->create();
                    if ($data){
                        $data['reimburse_attachment'] = $path;
                        $data['teacher_id'] = session('teacher_id');
                        $result = D('reimburse')->add($data); // 写入数据到数据库
                        if ($result){
                            // 如果主键是自动增长型 成功后返回值就是最新插入的值

                            M('reimburse_progress')->add(array('reimburse_id' => $result));
                            $this->success('','',1);
                        }else{
                            $this->error();
                        }
                    }
                }

            }



        if (IS_AJAX){
//            数据源

            if (I('get.type') == 'data'){
                $filed='xs_reimburse.id,xs_reimburse.teacher_id,xs_reimburse.reimburse_name,xs_reimburse.add_time,xs_reimburse.reimburse_attachment,
                xs_reimburse.reimburse_money,xs_teacher.teacher_name,xs_teacher.teacher_id,xs_reimburse_progress.reimburse_state';
                switch (session('teacher_level')){
                    case 1:
                        $rs['data'] = M('reimburse')->join('xs_teacher  on xs_teacher.teacher_id = xs_reimburse.teacher_id')
                            ->join('xs_reimburse_progress on  xs_reimburse_progress.reimburse_id=xs_reimburse.id')
                            ->field($filed)
                            ->order('xs_reimburse.add_time desc')
                            ->where('xs_reimburse.teacher_id = %d', session('teacher_id'))->select();
                        break;
                    case 2:
                        $rs['data'] = M('reimburse')->join('xs_teacher  on xs_teacher.teacher_id = xs_reimburse.teacher_id')
                            ->join('xs_reimburse_progress on  xs_reimburse_progress.reimburse_id=xs_reimburse.id')
                            ->field($filed)
                            ->order('xs_reimburse.add_time desc')
                            ->where('xs_teacher.teacher_department="%s"',session('teacher_department'))->select();
                        break;
                    case 3:
                        if (session('teacher_department') == 11){
                            $rs['data'] = M('reimburse')->join('xs_teacher  on xs_teacher.teacher_id = xs_reimburse.teacher_id')
                                ->join('xs_reimburse_progress on  xs_reimburse_progress.reimburse_id=xs_reimburse.id')
                                ->field($filed)
                                ->order('xs_reimburse.add_time desc')
                                ->where('xs_reimburse_progress.reimburse_state  >= %d',1)->select();
                        }else{
                            $rs['data'] = M('reimburse')->join('xs_teacher  on xs_teacher.teacher_id = xs_reimburse.teacher_id')
                                ->join('xs_reimburse_progress on  xs_reimburse_progress.reimburse_id=xs_reimburse.id')
                                ->field($filed)
                                ->order('xs_reimburse.add_time desc')
                                ->where('xs_reimburse.teacher_id = %d', session('teacher_id'))->select();
                        }

                        break;
                    case 4:
                        $rs['data'] = M('reimburse')->join('xs_teacher  on xs_teacher.teacher_id = xs_reimburse.teacher_id')
                            ->join('xs_reimburse_progress on  xs_reimburse_progress.reimburse_id=xs_reimburse.id')
                            ->field($filed)
                            ->order('xs_reimburse.add_time desc')
                            ->where('xs_reimburse_progress.reimburse_state >= %d',2)->select();
                        break;
                    case 5:
                        $rs['data'] = M('reimburse')->join('xs_teacher  on xs_teacher.teacher_id = xs_reimburse.teacher_id')
                            ->join('xs_reimburse_progress on  xs_reimburse_progress.reimburse_id=xs_reimburse.id')
                            ->field($filed)
                            ->order('xs_reimburse.add_time desc')
                            ->where('xs_reimburse_progress.reimburse_state >= %d',3)->select();
                        break;
                    default:
                        $rs['data'] = M('reimburse')->join('xs_teacher  on xs_teacher.teacher_id = xs_reimburse.teacher_id')
                            ->join('xs_reimburse_progress on  xs_reimburse_progress.reimburse_id=xs_reimburse.id')
                            ->field($filed)
                            ->order('xs_reimburse.add_time desc')
                            ->select();
                }
                $this->ajaxReturn($rs);
            }else if (I('get.type') == 'check'){ //审核通过

                $rs2 = M('reimburse_progress')->where('reimburse_id =%d', I('post.check_data'))->save(
                    array(
                        "reimburse_state" => (session('teacher_level')-1),
                        (session('teacher_level')-1)."_check" => session('teacher_id').'-'.session('teacher_name').'-'.session('teacher_department'),
                        (session('teacher_level')-1)."_time" => time())
                );

                if ($rs2 === false) {
                    $this->ajaxReturn(0);
                }else{
                    $this->ajaxReturn(1);
                }


            }else if(I('get.type') == 'fail'){
                $rs2 = M('reimburse_progress')->where('reimburse_id = %d', I('post.fail_data'))->save(
                    array(
                        'reimburse_state' => -1,
                        'fail_reason' => (session('teacher_level') - 1) .'-'. session('teacher_id') .'-'.session('teacher_name').'-'.
                            session('teacher_department'). time() . '-' . I('post.fail_reason'),
                    ));
                if ($rs2 === false) {
                    $this->ajaxReturn(0);
                }else{
                    $this->ajaxReturn(1);
                }
            }
        }else{
            $auth = new Auth();
//            多功能按钮启用
            if ($auth->check('Reim-show-Multibtn',session('teacher_id'))){
                $this->assign('btn_flag', true);
            }
            $this->display();
        }



    }
}