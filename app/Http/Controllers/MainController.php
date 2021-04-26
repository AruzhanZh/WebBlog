<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactModel;
class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function contact_check(Request $request){
        dd($request);

        //$contact = new Contact();
        //$contact-> email = $request->input('email');
        //$contact-> name = $request->input('name');
        //$contact-> message = $request->input('message');

        //$contact->save();

        //return redirect('contact');

        $contactm = new ContactModel();
        $contactm->name = $request->input('name');
        $contactm->email = $request->input('email');
        $contactm->message = $request->input('message');

        $contactm->save('contact');

        return redirect('about');
    }
}
