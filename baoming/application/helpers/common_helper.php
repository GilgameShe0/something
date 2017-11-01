<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 分页函数
 * @author sxy
 * @date 4.17
 */

//手机正则
function make_mobile($mobile){
	if(preg_match("/1[3456789]{1}\d{9}$/",$mobile)){
		return 1;
	}else{
		return 0;
	}
}

//数字 字母 中文字
function make_name($str){
	if(preg_match('/^[0-9a-zA-Z_\x{4e00}-\x{9fa5}]+$/u',$str)){  
		return 1;
	}else{
		return 0;
	}
}

?>