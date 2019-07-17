<?php

namespace App\Http\Controllers;//命名空间的三要素

use App\ArticleModel;
use App\UserModel;
use I11uminate\Http\Requset;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
	//测试控制路由的使用
	public function index()
    {
//		ArticleModel::create([
//            'cover'=>123,
//            'comment'=>22,
//            'browse'=>12,
//
//            'summary'=>1212,
//            'content'=>1212,
//            'title'=>122,
//            'type'=>12121,
//        ]);
//
//
//	return ArticleModel::first();


        //      return view(baskstage);


        $article = ArticleModel::find(1);
        dd($article);

        //    $article = ArticleModel::where('id','>','1')
        //  ->orderBy('name','desc')
        //->first();
        //dd($article);
    }
}
