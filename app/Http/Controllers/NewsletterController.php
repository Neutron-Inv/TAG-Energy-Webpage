<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function index(){
        return Newsletter::orderby('created_at','desc')->get();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|string|max:255|unique:newsletters'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $data = $request->all();

        Newsletter::create($data);               

        $notification = array(
            'message' => 'You have successfully subscribed to TAG Energy\'s newsletter.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
