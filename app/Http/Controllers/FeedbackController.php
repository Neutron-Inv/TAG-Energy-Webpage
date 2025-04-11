<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\{Feedback, User};
use Illuminate\Support\Facades\Validator;
use App\Mail\Contact;

class FeedbackController extends Controller
{
    /**
     * Send a mail with the message to the email specified in the contact form
     *
     * @param  Request  $request
     * @return Response
     */

    public function index()
    {
        return Feedback::orderby('created_at','desc')->get();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|min:3',
            'email' => 'required|email|max:100',
            'phone'     => 'required|min:11|max:16',
            'message'    => 'required|min:15'
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

        $contact= Feedback::create($data);

        // dd($contact);

        $admin = 'contact@tagenergygroup.net';
        $hr = 'hr@tagenergygroup.net';
        $dev = 'oliverbiggs737@gmail.com';

        try{
           // Mail::to($admin)->cc($hr)->bcc($dev)->send( new Contact($contact));

            $notification = array(
                'message' => 'You have Sucessfully contacted TAG Energy.',
                'alert-type' => 'success'
            );
        }catch(\Exception $e){
            $error = 'Email not sent, please check your network connectivity.';
            // print($e);
            $notification = array(
                'message' => $error,
                'alert-type' => 'error'
            );
        }  

        return redirect()->back()->with($notification);
    }

    public function getById($id)
    {
        $feed = Feedback::findorfail($id);
        return $feed;
    }

    public function closeFeed($id){
        $feed = $this->getById($id);
        $feed->status = '2';
        $feed->save();
    }
    public function resolveFeed($id){
        $feed = $this->getById($id);
        $feed->status = '1';
        $feed->save();
    }
    public function resolveFeedF($id, $remark){
        $feed = $this->getById($id);
        $feed->remark = $remark;
        $feed->save();
    }

    public function show($id)
    {
        $feedback = Feedback::findorfail($id);
        return $feedback;
    }
    public function replyFeedback(Request $request)
    {
        $feedback = $this->show($request->resolve);

        $this->validate($request, [
            'remark'  => 'max:500',
        ]);

        $this->id = $feedback->id;
        array_set($feedback, 'remark', $request->remark);
        array_set($feedback, 'status', '2');

        $feedback->save();
        // return redirect()->back()->with('success', 'Feedback updated successfully');
        $notification = array(
            'message' => 'Ticket RESOLVED Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function getUserFeedbacks($id)
    {
        $id = Auth::id();
        $user = User::findorfail($id);
        $email = $user->email;
        $feedbacks = Feedback::where('email', $email)->get();
        return view('user.feedbacks')->with(compact('feedbacks', 'user'));
    }
}
