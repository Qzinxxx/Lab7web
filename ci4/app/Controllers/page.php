<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman about',
            'content' => 'Ini adalaha hal yang menjelaskan ttg isi.'
        ]);
    }

    public function contact()
    {
        echo "ini hal kontak";
    }

    public function faqs()
    {
        echo "ini hal FAQ";
    }
    public function tos()
    {
    echo "ini halaman Term of Services";
    }
}