<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactUsFormController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
      return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        
    
    }

    function edit($id){
        $data=Contact::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req){
        $data=Contact::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->subject=$req->subject;
        $data->message=$req->message;
        $data->save();
        return redirect('dashboard');
    }

    function delete($id){
        $data=Contact::find($id);
        $data->delete();
        return redirect('dashboard');
    }

}