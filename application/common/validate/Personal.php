<?php
namespace app\common\validate;
use think\Validate;
class Personal extends Validate{
	//验证规则
	protected $rule = [
		//表单name名称=>规则1|规则2
		'Taxcard' => 'require|min:15',
		'Taxcard' => 'require|max:20',
	];
	//验证不通过的提示信息
	protected $message = [
		//表单name名称.规则名
		'ApplicationTime.require' => '发票抬头必填',
		'Taxcard.require' => '税务登记证号必填',
	];
	//验证场景
	protected $scene = [
		//场景名 => [元素=>规则1|规则2]
		'Submission' => ['ApplicationTime','Taxcard'],
		'personaldata'=>['usernmae'],
	];

}