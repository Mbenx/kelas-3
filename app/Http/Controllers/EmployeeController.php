<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use DB;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('employee/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // query builder
        DB::table('karyawan')->insert(
            ['nama' => $request->name,
             'alamat' => $request->alamat,
             'phone' => $request->phone,
             'jabatan' => $request->jabatan]
        );
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
