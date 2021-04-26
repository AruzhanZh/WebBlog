<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
        $objDemo = new \stdClass();
        $objDemo->sender = '190103359@stu.sdu.edu.kz';
        $objDemo->reciever = '190103359@stu.sdu.edu.kz';

        Mail::to("190103359@stu.sdu.edu.kz")->send(new DemoMail($objDemo));
    }//
}
