<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class LoginController extends Controller
{
    public function __invoke(){
        return view('login_index.login');
    }
}
