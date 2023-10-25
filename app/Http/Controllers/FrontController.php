<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class FrontController extends Controller
{
    public function index(){
       $allBannerList = DB::table('banners')->get();

       $allReviewList =DB::table('reviews')->where('status',1)->latest()->get();

       $productListSingle = DB::table('products')->where('type','Single Product')->latest()->get();
       $productListCombo = DB::table('products')->where('type','Combo Package')->latest()->get();

       $cartCollection = \Cart::getContent();


        return view('index',compact('cartCollection','allReviewList','allBannerList','productListSingle','productListCombo'));
    }


    public function comboProduct(){


        $allBannerList = DB::table('banners')->get();

        $allReviewList =DB::table('reviews')->where('status',1)->latest()->get();

        $productListSingle = DB::table('products')->where('type','Single Product')->latest()->get();
        $productListCombo = DB::table('products')->where('type','Combo Package')->latest()->get();

        $cartCollection = \Cart::getContent();


         return view('comboProduct',compact('cartCollection','allReviewList','allBannerList','productListSingle','productListCombo'));



    }


    public function singleProduct(){


        $allBannerList = DB::table('banners')->get();

        $allReviewList =DB::table('reviews')->where('status',1)->latest()->get();

        $productListSingle = DB::table('products')->where('type','Single Product')->latest()->get();
        $productListCombo = DB::table('products')->where('type','Combo Package')->latest()->get();

        $cartCollection = \Cart::getContent();


         return view('singleProduct',compact('cartCollection','allReviewList','allBannerList','productListSingle','productListCombo'));



    }


    public function productDetail($id){




        $allBannerList = DB::table('banners')->get();

        $allReviewList =DB::table('reviews')->where('status',1)->where('productId',$id)->latest()->get();

        $allReviewListCount =DB::table('reviews')->where('status',1)->where('productId',$id)->count();

        $productDetail = DB::table('products')->where('id',$id)->first();

        $cartCollection = \Cart::getContent();

         return view('productDetail',compact('cartCollection','allReviewList','allBannerList','productDetail','allReviewListCount'));



    }

    public function contact(){

        $allBannerList = DB::table('banners')->get();

        $allReviewList =DB::table('reviews')->where('status',1)->latest()->get();

        $productListSingle = DB::table('products')->where('type','Single Product')->latest()->get();
        $productListCombo = DB::table('products')->where('type','Combo Package')->latest()->get();

        $cartCollection = \Cart::getContent();


         return view('contact',compact('cartCollection','allReviewList','allBannerList','productListSingle','productListCombo'));
    }


    public function returnPolicy(){

        $returnPolicyList = DB::table('return_policies')->first();

        $allBannerList = DB::table('banners')->get();

        $allReviewList =DB::table('reviews')->where('status',1)->latest()->get();

        $productListSingle = DB::table('products')->where('type','Single Product')->latest()->get();
        $productListCombo = DB::table('products')->where('type','Combo Package')->latest()->get();

        $cartCollection = \Cart::getContent();


         return view('returnPolicy',compact('cartCollection','returnPolicyList','allReviewList','allBannerList','productListSingle','productListCombo'));

    }


    public function privacyPolicy(){

        $returnPolicyList = DB::table('privacy_policies')->first();

        $allBannerList = DB::table('banners')->get();

        $allReviewList =DB::table('reviews')->where('status',1)->latest()->get();

        $productListSingle = DB::table('products')->where('type','Single Product')->latest()->get();
        $productListCombo = DB::table('products')->where('type','Combo Package')->latest()->get();

        $cartCollection = \Cart::getContent();


         return view('privacyPolicy',compact('cartCollection','returnPolicyList','allReviewList','allBannerList','productListSingle','productListCombo'));

    }


    public function message(Request $request){

        //dd($request->all());

        DB::table('messages')->insert([
            ['name' =>$request->name,'phone' =>$request->phone, 'email' =>$request->email,'subject'=>$request->subject,'message'=>$request->msg,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
        ]);

        return redirect()->back();

    }


    public function review(Request $request){

        // dd($request->all());

         DB::table('reviews')->insert([
            ['rating' =>$request->rating,'email' =>$request->email,'productId' =>$request->id, 'clientName' =>$request->name,'clientDescription'=>$request->des,'status'=>'0','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
        ]);

        return redirect()->back();
    }
}
