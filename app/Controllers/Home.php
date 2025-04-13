<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Restoran'
        ];
        return view('layout/home', $data);
    }

    public function sate(){
        $data = [
            'title' => 'Sate Mas Joko'
        ];
        return view ('pages/sate',$data);
    }

    public function sakuraBento(){
        $data = [
            'title' => 'Sakura Bento'
        ];
        return view ('pages/sakuraBento',$data);
    }

    public function admin(){
        $data = [
            'title' => 'Admin'
        ];
        return view ('layout/admin',$data);
    }
}
