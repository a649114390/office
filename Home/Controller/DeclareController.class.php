<?php
/**
 * Created by PhpStorm.
 * User: llz
 * Date: 17-8-24
 * Time: 上午10:14
 */

namespace Home\Controller;

use Think\Auth;
use Think\Controller;

class DeclareController extends BaseController
{
    public function index()
    {


        if (IS_POST) {

            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            //        $upload->exts = array('rar', 'zip', '', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
//            $upload->savePath =  array('date','Ymd'); // 设置附件上传（子）目录
            // 上传文件
            if ($_FILES['file']['name'] != '') {

                $info = $upload->uploadOne($_FILES['file']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }
                $path = '/Uploads/' . $info['savepath'] . $info['savename'];
            } else {
                $path = '';
            }
            $title = I('title');
            $content = $_POST['content'];
            $data = array(
                'declare_title' => $title,
                'declare_content' => $content,
                'teacher_id' => session('teacher_id'),
                'add_time' => time(),
                'declare_attachment' => $path,

            );
            $rs = M('declare')->add($data);
            if ($rs) {
                M('declare_progress')->add(array('declare_id' => $rs));
                $this->success('提交成功');
            } else {
                $this->error('提交失败,请重试');
            }
        }
        $this->display();
    }

    public function timeLine()
    {

        $id = I('id');
        $rs = M('declare')->join('xs_declare_progress on xs_declare.id = xs_declare_progress.declare_id')
            ->join('xs_teacher on xs_teacher.teacher_id=xs_declare.teacher_id')
            ->where('xs_declare.id =%d', $id)->find();

        if (session('teacher_level') == 1) {
            if ($rs['teacher_id'] != session('teacher_id')) {
                exit('请勿越墙访问');
            }
        } elseif (session('teacher_level') == 2) {

            if ($rs['teacher_department'] != session('teacher_department')) {
                exit('请勿越墙访问');
            }
        }
        $rs['declare_fail_reason'] = explode('-', $rs['declare_fail_reason']);
        if ($rs) {
            $this->assign('declare_info', $rs);
        } else {
            $this->error('没有此条记录');

        }
        $this->display();
    }

    public function info()
    {

        if (IS_AJAX) {
//            数据源
            if (I('get.type') == 'data') {
                switch (session('teacher_level')) {
                    case 1:
                        $rs['data'] = M('declare')->join('xs_teacher  on xs_teacher.teacher_id = xs_declare.teacher_id')
                            ->join('xs_declare_progress on  xs_declare_progress.declare_id=xs_declare.id')
                            ->field('xs_declare.id,xs_declare.teacher_id,xs_declare.declare_title,xs_declare.add_time,xs_declare.declare_attachment,
                                    xs_teacher.teacher_name,xs_teacher.teacher_name,xs_declare_progress.declare_state')
                            ->order('xs_declare.add_time desc')
                            ->where('xs_declare.teacher_id = %d', session('teacher_id'))->select();
                        break;
                    case 2:
                        $rs['data'] = M('declare')->join('xs_teacher  on xs_teacher.teacher_id = xs_declare.teacher_id')
                            ->join('xs_declare_progress on  xs_declare_progress.declare_id=xs_declare.id')
                            ->field('xs_declare.id,xs_declare.teacher_id,xs_declare.declare_title,xs_declare.add_time,xs_declare.declare_attachment,
                                    xs_teacher.teacher_name,xs_teacher.teacher_name,xs_declare_progress.declare_state')
                            ->order('xs_declare.add_time desc')
                            ->where('xs_teacher.teacher_department="%s"', session('teacher_department'))->select();
                        break;
                    case 3:
                        $rs['data'] = M('declare')->join('xs_teacher  on xs_teacher.teacher_id = xs_declare.teacher_id')
                            ->join('xs_declare_progress on  xs_declare_progress.declare_id=xs_declare.id')
                            ->field('xs_declare.id,xs_declare.teacher_id,xs_declare.declare_title,xs_declare.add_time,xs_declare.declare_attachment,
                                    xs_teacher.teacher_name,xs_teacher.teacher_name,xs_declare_progress.declare_state')
                            ->order('xs_declare.add_time desc')
                            ->where('xs_declare_progress.declare_state  >= %d', 1)->select();
                        break;
                    case 4:
                        $rs['data'] = M('declare')->join('xs_teacher  on xs_teacher.teacher_id = xs_declare.teacher_id')
                            ->join('xs_declare_progress on  xs_declare_progress.declare_id=xs_declare.id')
                            ->field('xs_declare.id,xs_declare.teacher_id,xs_declare.declare_title,xs_declare.add_time,xs_declare.declare_attachment,
                                    xs_teacher.teacher_name,xs_teacher.teacher_name,xs_declare_progress.declare_state')
                            ->order('xs_declare.add_time desc')
                            ->where('xs_declare_progress.declare_state >= %d', 2)->select();
                        break;
                    case 5:
                        $rs['data'] = M('declare')->join('xs_teacher  on xs_teacher.teacher_id = xs_declare.teacher_id')
                            ->join('xs_declare_progress on  xs_declare_progress.declare_id=xs_declare.id')
                            ->field('xs_declare.id,xs_declare.teacher_id,xs_declare.declare_title,xs_declare.add_time,xs_declare.declare_attachment,
                                    xs_teacher.teacher_name,xs_teacher.teacher_name,xs_declare_progress.declare_state')
                            ->order('xs_declare.add_time desc')
                            ->where('xs_declare_progress.declare_state >= %d', 3)->select();
                        break;
                    default:
                        $rs['data'] = M('declare')->join('xs_teacher  on xs_teacher.teacher_id = xs_declare.teacher_id')
                            ->join('xs_declare_progress on  xs_declare_progress.declare_id=xs_declare.id')
                            ->field('xs_declare.id,xs_declare.teacher_id,xs_declare.declare_title,xs_declare.add_time,xs_declare.declare_attachment,
                                    xs_teacher.teacher_name,xs_teacher.teacher_name,xs_declare_progress.declare_state')
                            ->order('xs_declare.add_time desc')
                            ->select();
                }
                $this->ajaxReturn($rs);
            } else if (I('get.type') == 'check') { //审核通过
//                办公室同意－办公室登记
                if (session('teacher_level') == 3) {
                    $rs1 = M('declare')->where('id =%d', I('post.check_data'))->save(array('declare_register_id' => I('post.register_id'))); //申报表里的进度字段
                    if ($rs1 === false) {
                        $this->error('登记出错');
                    }
                }

                $rs2 = M('declare_progress')->where('declare_id =%d', I('post.check_data'))->save(
                    array(
                        "declare_state" => (session('teacher_level') - 1),
                        (session('teacher_level') - 1) . "_check" => session('teacher_id'),
                        (session('teacher_level') - 1) . "_time" => time())
                );

                if ($rs2 === false) {
                    $this->ajaxReturn(0);
                } else {
                    $this->ajaxReturn(1);
                }


            } else if (I('get.type') == 'fail') {
                $rs2 = M('declare_progress')->where('declare_id = %d', I('post.fail_data'))->save(
                    array(
                        'declare_state' => -1,
                        'declare_fail_reason' => (session('teacher_level') - 1) . session('teacher_id') . '-' . time() . '-' . I('post.fail_reason'),
                    ));
                if ($rs2 === false) {
                    $this->ajaxReturn(0);
                } else {
                    $this->ajaxReturn(1);
                }
            }
        } else {

            $auth = new Auth();
//            多功能按钮启用
            if ($auth->check('Declare-show-Multibtn', session('teacher_id'))) {
                $this->assign('btn_flag', true);
            }
//            登记编号启用
            if ($auth->check('Declare-register_id', session('teacher_id'))) {
                $this->assign('register_flag', true);
            }


            $this->display();
        }

    }
}