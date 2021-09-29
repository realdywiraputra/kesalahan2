<?php
namespace app\controllers;

/**
 * created by phpstorm.
 * user: realdywiraputra
 * date: 24/09/2021
 * Time: 16.49
 */
class selamatdatang extends basecontroller {

    public function hal_awal(){
        return 'hello saya belajar CI4';
    }

    public function beranda_login(){
        return view( name: 'halaman/login');
    }

}