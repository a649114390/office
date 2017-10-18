<?php
/**
 * Created by PhpStorm.
 * User: llz
 * Date: 17-9-2
 * Time: 下午3:29
 */
namespace Home\Model;
use Think\Model;
class ReimburseModel extends Model{
    protected $_auto = array(
        array('add_time','time',1,'function')
    );
}