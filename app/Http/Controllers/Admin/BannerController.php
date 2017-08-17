<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\PublicController as Controller;
use Storage;
use DB;
use Exception;

class BannerController extends Controller
{
   
    /***轮播图**************************************************************************************************************************************************/
   public function index(){
        $banner=DB::table('advertisement')->where('type',1)->get();
         $total=DB::table('advertisement')->where('type',1)->count();//总条数

        // $goodsClass=10;
        // $page=ceil($total/$goodsClass->count());//共几页
        // $currentPage=$goodsClass->currentPage();//当前页
        
        return view('admin.banner.index',compact('banner','total','page','currentPage'));


   }
    public function add(){
        return view('admin.banner.add');
    }
    public function edit(Request $request ,$id){

        $banner=DB::table('advertisement')->where('id',$id)->first();
        
        return view('admin.banner.edit', ['banner' => $banner]);
    }

    public function editinfo(Request $request){
        $post=$request->input();

       // var_dump($post);die;
            #组合信息
        $data=[];
        $data['title']=$post['title'];
        $data['url']=$post['url'];
        $data['status']=$post['status'];
        $data['update_at']=time();
            
         if ($request->hasFile('pic')) { //

            $file = $request->file('pic');
             if($file->isValid()){  
                //获取原文件名  
                $originalName = $file->getClientOriginalName();  
                //扩展名  
                $ext = $file->getClientOriginalExtension();  
                //文件类型  
                $type = $file->getClientMimeType();  
                //临时绝对路径  
                $realPath = $file->getRealPath();  
  
                $filename = date('Y-m-d-H-i-S').'-'.uniqid().'.'.$ext;  
  
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));  
                 $data['pic']='/app/uploads/'.$filename;
               // var_dump($bool);  
            }  
          }else{
                  $data['pic']='';
          } 
            
        if ($post['yin'] == 2){
            $banner=DB::table('advertisement')->where('id',$post['id'])->update($data);
        }elseif($post['yin'] == 1){
            $data['create_at']=time();
            $data['type']=$post['type'];
            $banner=DB::table('advertisement')->insert($data);
            #存在是修改
        }else{
             return back()->withErrors('参数错误');
        }
            if($banner){
               return back()->with('success','请求成功');  
            }else{
                return back()->withErrors('请求失败'); 
            }
    }


    /***系统公告**************************************************************************************************************************************************/
      public function noticeindex(){
        $banner=DB::table('advertisement')->where('type',2)->get();
        // $total=DB::table('advertisement')->where('type',1)->count();//总条数

        // $goodsClass=10;
        // $page=ceil($total/$goodsClass->count());//共几页
        // $currentPage=$goodsClass->currentPage();//当前页
        
        return view('admin.banner.noticeindex',['banner' => $banner]);


   }
    public function noticeadd(){
        return view('admin.banner.noticeadd');
    }
    public function noticeedit(Request $request ,$id){

        $banner=DB::table('advertisement')->where('id',$id)->first();
        
        return view('admin.banner.noticeedit', ['banner' => $banner]);
    }




    /***简介brief**************************************************************************************************************************************************/
  public function briefindex(){
        $banner=DB::table('advertisement')->where('type',3)->get();
        // $total=DB::table('advertisement')->where('type',1)->count();//总条数

        // $goodsClass=10;
        // $page=ceil($total/$goodsClass->count());//共几页
        // $currentPage=$goodsClass->currentPage();//当前页
        
        return view('admin.banner.briefindex',['banner' => $banner]);


   }
    public function briefadd(){
        return view('admin.banner.briefadd');
    }
    public function briefedit(Request $request ,$id){

        $banner=DB::table('advertisement')->where('id',$id)->first();
        
        return view('admin.banner.briefedit', ['banner' => $banner]);
    }





    /***新手必看novice**************************************************************************************************************************************************/   
  public function novvveindex(){
        $banner=DB::table('advertisement')->where('type',4)->get();
         $total=DB::table('advertisement')->where('type',1)->count();//总条数

        // $goodsClass=10;
        // $page=ceil($total/$goodsClass->count());//共几页
        // $currentPage=$goodsClass->currentPage();//当前页
        
        return view('admin.banner.novvveindex',compact('banner','total','page','currentPage'));


   }
    public function novvveadd(){
        return view('admin.banner.novvveadd');
    }
    public function novvveedit(Request $request ,$id){

        $banner=DB::table('advertisement')->where('id',$id)->first();
        
        return view('admin.banner.novvveedit', ['banner' => $banner]);
    }

  


    /***公用删除*************************************************************************************************************************************************/
    public function del(Request $request){

        $id = $request->only('id')['id'];
        $banner=DB::table('advertisement')->where('id',$id)->delete();
        if ($banner) {
            return $this->ajaxMessage(true,'删除成功');
        }else{
            return $this->ajaxMessage(false,'删除失败');
             }
        
    }




}
