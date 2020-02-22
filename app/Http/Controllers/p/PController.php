<?php

namespace App\Http\Controllers\p;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PController extends Controller
{
    public function index()
    {
        return view('index/index');
    }
    public function send()
    {
        $email = $_POST['email'];
        $text  = $_POST['text'];

        a($email,$text);
    }

    public function sendEmail()
    {

    }
}
