<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() 
    {

        $skills = ['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'MySQL',];

        $projects = [
            [
                'name' => 'Website Company Profile',
                'description' => 'Membuat website untuk company profile menggunakan Laravel'
            ],
            [
                'name' => 'E-commerce App',
                'description' => 'Aplikasi toko online menggunakan Laravel dan Vue.js'
            ],
            [
                'name' => 'Blog Platform',
                'description' => 'Platform blogging sederhana dengan fitur CRUD'
            ],
            [
                'name' => 'Sistem Login & Register',
                'description' => 'Membuat sistem autentikasi lengkap dengan register, login, dan reset password'
            ]
        ];

        
        return view('portofolio.portofolio', compact('skills', 'projects'));
    }
}
