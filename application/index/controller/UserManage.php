<?php
namespace app\index\controller;
use \think\captcha\Captcha;
use \think\Session;

class UserManage extends \think\Controller
{
    public function login()
    {
        return $this->fetch();
	}
	
	public function doLogin()
    {
        $user_name  = input('user_name');
        $user_pwd  = input('user_pwd');
        //查询用户表有没有这些信息的用户
		$info =  db('user')
					->where("user_name='$user_name' and user_pwd='$user_pwd'")
					->find();
        if (empty($info)) {
            $this->error('用户名或密码不正确！');
        }else{
            Session::set('uinfo',$info);
            $this->success('欢迎登录', 'index/home');

        }
	}
	
	public function logout()
    {
            Session::delete('uinfo');
            $this->success('已退出登录','index/home'); 
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
			$info = $file->validate(['ext'=>'jpg,png','size'=>2*1024*1024])->move('../../uploads');
			if(!$info){
				$this->error ("头像仅支持jpg,png。且不能大于5M");
			}
			$data['avatar'] = $info->getSaveName();
		} else {
			$this->error ('请上传头像仅支持jpg,png。且不能大于5M');
		}
		unset($data['yzm']);//验证码不需要,释放掉
		unset($data['user_repwd']);
		db('user')->insert($data);
		
		$userName = $data['user_name'];
		$info =  db('user')
					->where("user_name='$userName'")
					->find();
        if (empty($info)) {
            $this->error('自动登录失败！');
        }else{
            Session::set('uinfo',$info);
            $this->success('已经自动登录', 'index/home');
        }
	}
}