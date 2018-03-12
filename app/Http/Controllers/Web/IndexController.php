<?php

/**
 * Created by PhpStorm.
 * Sign: 自古真情留不住 总是套路得人心
 * User: yun.li
 * Date: 2018/1/23
 * Time: 14:06
 */
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class IndexController extends Controller{


	public function foo(){

//		$res = \DB::table('users')->get()->toArray();
//
//		var_dump($res);exit;


		return view('web.index');

	}


}