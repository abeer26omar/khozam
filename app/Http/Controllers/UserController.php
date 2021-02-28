<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter = DB::table('users')->count();
        $users=User::all();

        return view("dashboard",["users"=>$users],compact('counter'));
       
       
    }
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = User::all();
  
        // share data to view
        view()->share('users',$data);
        $pdf = PDF::loadView('pdf_view', $data);
  
        // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');
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
        //
        $request->validate([
            'your-Name' => 'required',
            'your-Phone' => 'required|numeric',
            'your-email' => 'required',
            'select-project'=>'required',
        ]);
        if($request->fails())
        {
            return view('index');
        }
        User::create([
             "name"=>$request["your-Name"],
             "mobile"=>$request["your-Phone"],
             "email"=>$request["your-email"],
             "standalone"=>$request["select-project"],
             
 
            ]);
 
         return redirect(route("users.index"));
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
