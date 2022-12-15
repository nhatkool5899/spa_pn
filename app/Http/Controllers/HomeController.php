<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /* Trang chu */
    public function index(){
        return view ('trangchu.content');
    }
    public function vechungtoi(){
        return view ('trangchu.vechungtoi');
    }
    /* Tin tuc */
    public function tintuc(){
        return view ('tintuc.tatca');
    }
    public function tintuc1(){
        return view ('tintuc.tintuc1');
    }
    public function tintuc2(){
        return view ('tintuc.tintuc2');
    }
    public function tintuc3(){
        return view ('tintuc.tintuc3');
    }
        /* Phun theu */
    public function phunmay(){
        return view ('dichvu.phuntheu.phunmay');
    }
    public function phunmoi(){
        return view ('dichvu.phuntheu.phunmoi');
    }
        /* Xong hoi giam mo */
    public function xonghoi(){
        return view ('dichvu.xonghoigiammo.xonghoi');
    }
    public function xongchanthaidoc(){
        return view ('dichvu.xonghoigiammo.xongchanthaidoc');
    }
        /* Da */
    public function mun(){
        return view ('dichvu.da.mun');
    }
    public function namtannhan(){
        return view ('dichvu.da.namtannhan');
    }
    public function trietlong(){
        return view ('dichvu.da.trietlong');
    }
    public function tamtrang(){
        return view ('dichvu.da.tamtrang');
    }
        /* Duong sinh */
    public function dau(){
        return view ('dichvu.duongsinh.dau');
    }
    public function covaigay(){
        return view ('dichvu.duongsinh.covaigay');
    }
    public function gan(){
        return view ('dichvu.duongsinh.gan');
    }
    public function than(){
        return view ('dichvu.duongsinh.than');
    }
    public function tyvi(){
        return view ('dichvu.duongsinh.tyvi');
    }
    public function phonghan(){
        return view ('dichvu.duongsinh.phonghan');
    }
}