<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\{Gate, File, Auth};
use App\{Gallery,Logs};
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Repositories\GalleryRepository;
class GalleryController extends Controller
{
    protected $model;
    public function __construct(Gallery $gallery)
    {
        // set the model
        $this->middleware('auth');
        $this->model = new GalleryRepository($gallery);
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
            $gallery = Gallery::orderBy('id', 'desc')->get();

            return view("dashboard.gallery.index")->with([
                "gallery" => $gallery,
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
        //
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
                'heading' => ['required', 'string', 'max:199'],
            
            ]);

            if($request->hasFile('file')) {
                $file = $request->file;
                foreach ($file as $files) {
                    $filenameWithExt = $files->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $files->getClientOriginalExtension();
                    $fileNameToStore = $filename.'_'.date('Y-m-d').'.'.$extension;
                    $path=$files->move('post/', $fileNameToStore);
                    $data = new Gallery([
                        "heading" => $request->input("heading"),
                        "file" => $fileNameToStore,
                        "extension" => $extension,
                        'type' => $request->input("type"),
                    ]);
                    $data->save();
                    $log = new Logs([
                        "email" => $request->input("email"),
                        "activities" => 'Added ' . $fileNameToStore . " to Gallery Post",
                    ]);
                }
                $message = "You Have Added The Post Successfully";
                return redirect()->route("gallery.index")->with([
                    "success" => $message
                ]);
            }else{
                return redirect()->back()->with(["error" => 'Please select a file(s)']);
            }
        
        } else {
            return view('errors.403');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::allows('Administrator', auth()->user())) {

            if(Gallery::where(['id' => $id])->exists()){
                $gallery = Gallery::where('id', $id)->first();
                return view('dashboard.gallery.edit')->with([ "details" => $gallery,]);
            }else{
                return redirect()->back()->with([
                    'error' => $id. " does not exits for any post",
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gallery::where(['id' => $id])->exists()){
            if (Gate::allows('Administrator', auth()->user())) {

                $this->validate($request, [
                    'heading' => ['required', 'string', 'max:199'],
                
                ]);

                $gallery = $this->model->show($id);
                if($request->hasFile('file')){
                    $filenameWithExt = $request->file('file')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension =  $request->file('file')->getClientOriginalExtension();
                    $cut = str_replace(" ", "_", $filename);
                    $cutting = str_replace("-", "_", $cut);
                    $fileNameToStore = $cutting.time().'.'.$extension;
                    $dir = 'post/';
                    !file_exists(File::makeDirectory($dir, $mode = 0777, true, true));
                    $path=$request->file('file')->move(('post/'), $fileNameToStore);

                }else{
                    $fileNameToStore = $gallery->file;
                    $extension = $gallery->extension;
                }

                $data = ([
                    'gallery' => $this->model->show($id),
                    "heading" => $request->input("heading"),
                    "file" => $fileNameToStore,
                    "extension" => $extension,
                    'type' => $request->input("type"),
                ]);
                
                if($this->model->update($data, $id)){
                    $message = "You Have Updated The details Successfully";
                    return redirect()->route("gallery.index")->with([
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
                'error' => $id. " does not exits for any Post",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gallery::where(['id' => $id])->exists()){
            if (Gate::allows('Administrator', auth()->user())) {
                
                $gallery =  $this->model->show($id);
                if ($gallery->delete($id)) {
                    $log = new Logs(["email" => Auth::user()->email,"activities" => "Deleted  $gallery->file",]);
                    $log->save();
                    return redirect()->back()->with([
                        'success' => "You Have Deleted The Post Successfully",
                    ]);
                }else{
                    return redirect()->back()->with([
                        'error' => "Network failure, Please try again later",
                    ]);
                }
            } else {
                return view('errors.403');
            }

        }else{
            return redirect()->back()->with([
                'error' => $id. " does not exits for any Post",
            ]);
        }        }
}
