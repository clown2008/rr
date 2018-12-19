<?php
namespace app\common\validate;
use think\Validate;
class Register extends Validate{
	//验证规则
	protected $rule = [
		//表单name名称=>规则1|规则2
		'username' => 'require|unique:user',
		'password' => 'require|min:8',
		'ConfirmPassword' => 'require|confirm:password'
	];
	//验证不通过的提示信息
	protected $message = [
		//表单name名称.规则名
		'username.require' => '账号必填',
		'password.require' => '密码必填',
		'ConfirmPassword.require' => '确认密码必填',
		'username.unique' => '账号重复了',
		'password.min' => '密码必须大于8位数',
		'ConfirmPassword.confirm' => '两次密码不一致'
	];
	//验证场景
	protected $scene = [
		//场景名 => [元素=>规则1|规则2]
		'tijiao' => ['username','password','ConfirmPassword']
	];

}