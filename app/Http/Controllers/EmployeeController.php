<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use DB;
use App\Employee;
use App\Position;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        //$users = DB::table('karyawan')->get();
        //dd($users);
        
        $users = Employee::all();
        return view('employee/home',['data'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Position::all();
        return view('employee/create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // dd($request);

        // query builder
        // DB::table('karyawan')->insert(
        //     ['nama' => $request->name,
        //      'alamat' => $request->alamat,
        //      'phone' => $request->phone,
        //      'jabatan' => $request->jabatan]
        // );
        $filename = $req->id.time().'.png';
        $req->file('picture')->storeAs('public/employee',$filename);
                
        Employee::create([
            'name' => $req->name,
            'alamat' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'position_id' => $req->website,
            'picture' => $filename,
        ]);        
    
        return redirect('/organization');


        return redirect('/employee');
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
    public function edit($id)
    {
        $users = DB::table('karyawan')->where('id','=',$id)->first();
        //dd($users);
        return view('employee/edit',['data'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //dd($req);
        // query builder
        DB::table('karyawan')
            ->where('id','=',$req->id)
            ->update(['nama' => $req->name,
            'alamat' => $req->alamat,
            'phone' => $req->phone,
            'jabatan' => $req->jabatan]);
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('karyawan')->where('id', '=', $id)
        ->delete();
        return redirect('/employee');
    }
}
