<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return 'List Product';
    }
    public function create(){
        return view('backend.product.store');
    }
    public function store(){
        print_r($_REQUEST);
    }
}
