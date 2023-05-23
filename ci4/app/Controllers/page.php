<?php 
    namespace App\Controllers; 
    class Page extends BaseController 
    { 
        public function about() 
        { 
            return view('about', [ 
                'title' => 'Halaman About', 
                'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.' 
            ]); 
        }
        public function contact() 
        { 
            return view('contact', [ 
                'title' => 'Halaman Contact', 
                'content' => 'Ini adalah halaman Contact yang menjelaskan tentang isi halaman ini.' 
            ]); 
        } 
        public function artikel() 
        { 
            return view('artikel', [ 
                'title' => 'Halaman artikel', 
                'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.' 
            ]); 
        } 
        public function tos() 
        { 
            echo "Ini halaman Term of Services"; 
        } 

    }