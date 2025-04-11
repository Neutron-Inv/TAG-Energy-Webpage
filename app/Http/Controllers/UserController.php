<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\{User,Logs};
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    protected $model;
    public function __construct(User $user)
    {
        // set the model
        $this->middleware('auth');
        $this->model = new UserRepository($user);
        $this->middleware(['role:Administrator']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('Administrator', auth()->user())) {
            $user = User::where('role', 'Administrator')->orderBy('first_name', 'asc')->get();

            return view("dashboard.administrator.index")->with([
                "user" => $user,
            ]);
        } else {
            return view('errors.403');
        }
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('Administrator', auth()->user())) {

            return view("dashboard.administrator.create")->with([
            ]);
        } else {
            return view('errors.403');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::allows('Administrator', auth()->user())) {

            $this->validate($request, [
                'first_name' => ['required', 'string', 'max:199'],
                'last_name' => ['required', 'string', 'max:199'],
                'password' => ['required', 'string', 'min:4', 'confirmed'],
                'phone_number' => ['required', 'string', 'min:10', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:199', 'unique:users'],

            ]);
            $role = 'Administrator';
            $data = new User([

                "email" => $request->input("email"),
                "first_name" => $request->input("first_name"),
                "last_name" => $request->input("last_name"),
                "password" => Hash::make($request->input("password")),
                "role" => $role,
                "phone_number" => $request->input("phone_number"),
                "status" => 1,
            ]);

            $log = new Logs([
                "email" => $request->input("email"),
                "activities" => 'Added ' . $request->input("email") . ' as ' . $request->input('role'),
            ]);

            if ($data->save() AND ($log->save())) {
                $data->assignRole($role);
                $message = "You Have Added ". $request->input("email") . " Successfully";
                return redirect()->route("administrator.index")->with([
                    "success" => $message
                ]);

            }else{
                return redirect()->back()->with("error", "Network Failure, Please try again later");
            }
        } else {
            return view('errors.403');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($email)
    {
        if (Gate::allows('Administrator', auth()->user())) {

            if(User::where(['email' => $email, 'role' => 'Administrator'])->exists()){
                $user = User::where('email', $email)->first();
                return view('dashboard.administrator.edit')->with([ "details" => $user,]);
            }else{
                return redirect()->back()->with([
                    'error' => $email. " does not exits for any user",
                ]);
            }
        } else {
            return view('errors.403');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $email)
    {
        if(User::where(['email' => $email, 'role' => 'Administrator'])->exists()){
            $user = User::where('email', $email)->first();
            if (Auth::user()->role == 'Administrator') {
                $this->validate($request, [
                    'first_name' => ['required', 'string', 'max:199'],
                    'last_name' => ['required', 'string', 'max:199'],
                    'phone_number' => ['required', 'string', 'min:10'],
                    'email' => ['required', 'string', 'email', 'max:199'],
                ]);
                #
                $id = $request->input("user_id");
                if(empty($request->input("password"))){
                    $password = $user->password;
                }else{
                    $password = Hash::make($request->input("password"));
                }

                $data = ([
                    "user" => $this->model->show($id),
                    "email" => $request->input("email"),
                    "first_name" => $request->input("first_name"),
                    "last_name" => $request->input("last_name"),
                    "password" => $password,
                    "role" => $user->role,
                    "phone_number" => $request->input("phone_number"),
                    "status" => 1,
                ]);
                #
                $log = new Logs([
                    "email" => $request->input("email"),
                    "activities" => 'Updated ' . $request->input("email") . ' details as ' . $request->input('role'),
                ]);
                if (($this->model->update($data, $id))) {
                    $message = "You Have Updated The details Successfully";
                    return redirect()->route("administrator.index")->with([
                        "success" => $message
                    ]);
                }else{
                    return redirect()->back()->with("error", "Network Failure, Please try again later");
                }
            } else {
                return view('errors.403');
            }
        }else{
            return redirect()->back()->with([
                'error' => $email. " does not exits for any administrator",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        if (Gate::allows('Administrator', auth()->user())) {
            $use = User::where(["email" => $email])->first();
            $user =  $this->model->show($use->id);
            if ($user->delete($user->id)) {
                $log = new Logs(["email" => Auth::user()->email,"activities" => "Deleted  $email Account as a super admin",]);
                $log->save();
                return redirect()->back()->with([
                    'success' => "You Have Deleted  $email From The User Details Successfully",
                ]);
            }else{
                return redirect()->back()->with([
                    'error' => "Network failure, Please try again later",
                ]);
            }
        } else {
            return view('errors.403');
        }
    }
    
    public function suspend($email)
    {
        if (Gate::allows('Administrator', auth()->user())) {
            $use = User::where(["email" => $email ])->first();
            $user =  $this->model->show($use->id);

            $updat = User::where('email', $email)->update(["status" => 0,]);
            $log = new Logs(["email" => Auth::user()->email,"activities" => 'Suspended  $email Account',]);
            $log->save();

            if ($updat) {
                return redirect()->back()->with([
                    'success' => "You Have Suspend  $email Account Successfully",
                ]);
            }else{
                return redirect()->back()->with([
                    'error' => "Network failure, Please try again later",
                ]);
            }
        } else {
            return view('errors.403');
        }
    }

    public function unsuspend($email)
    {
        if (Gate::allows('Administrator', auth()->user())) {
            $use = User::where(["email" => $email,])->first();
            $user =  $this->model->show($use->id);

            $updat = User::where('email', $email)->update(["status" => 1,]);
            $log = new Logs(["email" => Auth::user()->email, "activities" => "Un Suspended  $email Account",]);
            $log->save();
            if ($updat) {
                return redirect()->back()->with([
                    'success' => "You Have Un Suspend  $email Account Successfully",
                ]);
            }else{
                return redirect()->back()->with([
                    'error' => "Network failure, Please try again later",
                ]);
            }
        } else {
            return view('errors.403');
        }
    }
}
