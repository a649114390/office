<?php
/**
 * Created by PhpStorm.
 * User: llz
 * Date: 17-9-5
 * Time: 下午5:42
 */

namespace Home\Controller;


class TeacherController extends BaseController
{
    public function index()
    {
        if (IS_AJAX) {

            if (I('get.type') == 'data') {

                $rs['data'] = M('teacher')->join('xs_teacher_department d on xs_teacher.teacher_department=d.department_id ')
                    ->select();
                $this->ajaxReturn($rs);
            } else if (I('get.type') == 'edit') {
                if (I('get.flag') != '') {
                    $id = I('get.flag');
                    $rs = M('teacher')->where('id =%d', $id)->save(array(
                        'teacher_id' => I('post.id'),
                        'teacher_name' => I('post.name'),
                        'teacher_sex' => I('post.sex'),
                        'teacher_job' => I('post.job'),
                        'teacher_department' => I('post.depart'),
                        'add_time' => time()));
                    if ($rs === false) {
                        $this->ajaxReturn(-1);
                    } elseif ($rs == false) {
                        $this->ajaxReturn(0);
                    } else {
                        $this->ajaxReturn(1);
                    }
                } else {
                    $rs = M('teacher')->add(array(
                        'teacher_id' => I('post.id'),
                        'teacher_pwd' => I('post.id'),
                        'teacher_name' => I('post.name'),
                        'teacher_sex' => I('post.sex'),
                        'teacher_job' => I('post.job'),
                        'teacher_department' => I('post.depart'),
                        'add_time' => time()));
                    if ($rs == false) {
                        $this->ajaxReturn(0);
                    } else {
                        $this->ajaxReturn(1);
                    }
                }

            } else if (I('get.type') == 'del') {
                $rs = M('teacher')->delete(I('post.data'));
                if ($rs) {
                    $this->ajaxReturn(1);
                } else {
                    $this->ajaxReturn(0);
                }
            }


        } else {
            $rs = M('teacher_department')->select();
            $this->assign('tea_depart', $rs);
            $this->display();
        }
    }

    public function auth()
    {
        if (IS_AJAX) {
            if (I('get.type') == 'group_data') {
                $rs['data'] = M('auth_group')->select();
                foreach ($rs['data'] as $k => $v) {
//                    $rs['data'][$k]['rules_name']
                    $tmp = M('auth_rule')->where("id in(%s)", $v['rules'])->field('title')->select();
                    $arr = array();
                    foreach ($tmp as $k1 => $v1) {
                        $arr[] = $v1['title'];
                    }
                    $tmp = implode(',', $arr);
                    $rs['data'][$k]['rules_name'] = $tmp;
                }
                $this->ajaxReturn($rs);
            }


        } else {
            $rs = M('auth_rule')->field('id,title')->select();
            $this->assign('rule', $rs);
            $this->display();
        }
    }

    public function authDepart()
    {
        if (IS_AJAX){
            if (I('get.type') == 'depart_data') {
                $rs['data'] = M('teacher_department')->select();
                $this->ajaxReturn($rs);
            } else if (I('get.type') == 'rules_data') {
                $rs['data'] = M('auth_rule')->select();
                $this->ajaxReturn($rs);
            }elseif (I('get.type') === 'add_depart') {
                $name = I('name');
                $rs = M('teacher_department')->add(array('department' => $name));
                if ($rs) {
                    $this->ajaxReturn(1);
                } else {
                    $this->ajaxReturn(0);
                }
            } elseif (I('get.type') == 'edit_depart') {
                $rs = M('teacher_department')->where('department_id =%d', I('id'))->save(array('department' => I('name')));
                if ($rs === false) {
                    $this->ajaxReturn(0);
                } elseif ($rs == false) {
                    $this->ajaxReturn(-1);
                } else {
                    $this->ajaxReturn(1);
                }
            } elseif (I('get.type') == 'del_depart') {
                $rs = M('teacher_department')->delete(I('data'));
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


}