<?php
namespace app\index\controller;
use \think\captcha\Captcha;

class UserManage extends \think\Controller
{
    public function login()
    {
        return $this->fetch();
	}
	
	public function register(){
		return $this->fetch();
	}
	
	public function doRegister(){
		
		$data = request()->param();
		$user_vali = validate('userManage');
		if (!$user_vali->check($data)) {
            $this->error($user_vali->getError());
        }
        $captcha = new Captcha();
        if (!$captcha->check($data["yzm"])) {
            $this->error('验证码输入不正确！');
            exit();
        }
		
		// 获取表单上传文件 例如上传了001.jpg
		//注意当文件>2M时获取不到对象的,因为配置文件设置的!!!!!
		$file = request()->file("avatar");
    
		// 移动到框架应用根目录/public/uploads/ 目录下
		if($file){
			$info = $file->validate(['ext'=>'jpg,png','size'=>2*1024*1024])->move('uploads');
			if(!$info){
				$this->error ("文件仅支持jpg,png。且不能大于5M");
			}
			$data['avatar'] = $info->getSaveName();
		} else {
			die ('没有获取到头像');
		}
		unset($data['yzm']);//验证码不需要,释放掉
		unset($data['user_repwd']);
		db('user')->insert($data);
        $this->success('注册成功');
	}
}