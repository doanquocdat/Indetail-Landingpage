<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
class MyController extends Controller
{
    public function XinChao(){
    	echo "Xin Chao Cac Ban";
    }

    public function KhoaHoc($ten){
    	   echo "Khoa Hoc: ".$ten;
    	   return redirect()->route('MyRoute2');
    }

    public function GetURL(Request $request){
      // if($request-> isMethod('post')){
      // 	echo "Phuong thuc Get";
      // }else{
      // 	echo "Khong phai phuong thuc Get";
      // }
    	if ($request->is('dat*'))
    		echo "Co Dat";
    	else 
    		echo "Khong cos Dat";
    }
    public function postForm(Request $request){
    	if($request->has('tuoi'))
    		echo "Co tham so";
    	else
    		echo "Khong co tham so ";
    }
   
   	public function setCookie(){
   			$response = new Response();
   			$response -> withCookie('KhoaHoc','Dat',0.1);
   			echo "Da set Cookie  ";
   			return $response;
    	}
   	public function getCookie(Request $request){
   			echo "Cookie cua ban la : ";

   			return $request -> cookie('KhoaHoc');
   	}

   	public function postFile(Request $request){
   			if($request->hasFile('myFile')){
   				$file = $request->file('myFile');
   				$fileName = $file -> getClientOriginalName('myFile');
   				echo $fileName;
   				$file->move('img',$fileName);
   			}else{
   				echo "Chua co file";
   			}
   	}

   	public function getJson(){
   		 $array = ['Laravel','Java','PHP'];
   		 return response() -> json($array);

   	}

   	public function myView(){
   		return view('view.QuocDat');
   	}

   	public function Time( $t){
   		return view('myView',['t'=> $t]);
   	}

   	public function blade($str){
   		$khoahoc1 = "";
   		if($str == "laravel")
   		{
   			return view('pages.laravel',['ten1'=>$khoahoc1]);

   		}else{
   			return view('pages.php',['ten1'=>$khoahoc1]);
   		}
   	}
}
