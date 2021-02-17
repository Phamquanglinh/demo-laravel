<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return 'List News';
    }
    public function create(){
        return view('backend.user.create');
    }
}
