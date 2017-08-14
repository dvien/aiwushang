<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\Admin;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Services\AdminService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Session;

class LoginController extends Controller
{
    protected $admin;
    protected $adminService;

    public function __construct(Admin $admin,AdminService $adminService)
    {
        $this->admin = $admin;
        $this->adminService=$adminService;
    }
    public function index()//加载登录视图
    {
        return view('admin.login.index');
    }

    public function login(LoginRequest $request)//后台登录处理
    {
        $date=$request->all();
        $first=Admin::select(['pwd','id','pic'])->where(['mobile'=>$date['mobile']])->first();
        if($first){
            if(Hash::check($date['pwd'],$first->pwd)){
                if(Session::get('code')===$date['captcha']){
                    $res=$this->admin->updateAdmin($request->ip(),$first->id);
                    if($res){
                        $str=$date['mobile'].'-'.$first->id.'-'.$_SERVER['HTTP_USER_AGENT'].'-'.uniqid().time();
                        $info=$this->admin->getEncrypt($str);
                        session(['pic'=>$res['pic']]);
                        session(['info'=>$info]);
                        return redirect()->route('admin.index');
                    }else{
                        return back()->with('error','登录失败');
                    }
                }else{
                    return back()->with('error','验证码输入有误');
                }
            }else{
                return back()->with('error','管理员登录密码错误');
            }
        }else{
            return back()->with('error','管理员账号不存在');
        }
    }

    public function layout(Request $request)
    {
        $arr=$this->adminService->getUserInfo();
        $date['status']=2;
        $date['updated_at']=date('Y-m-d H:i:s',time());
        $res=$this->admin->where(['id'=>$arr[1],'mobile'=>$arr[0]])->update($date);
        if($res){
            $request->session()->flush();
            return redirect(url('login/index'));
        }else{
            return back()->with('error','退出失败');
        }
    }
}