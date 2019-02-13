<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Department;

class PositionController extends Controller
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
        $data = Position::all();
        
        //show softdelete 
        //$data = Position::withTrashed()->get();
        //$data = Position::onlyTrashed()->get();
        return view('position/home',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('position/create',['data'=>$department]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // eloquent
        Position::create([
        'name' => $request->name,
        'department_id' => $request->department_id,
        ]);

        return redirect('/position');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Position::where('id','=',$id)->first();
        //dd($data);
        return view('position/show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Position::where('id','=',$id)->first();
        $department = Department::all();
        //dd($data);
        return view('position/edit',['data'=>$data,'dept'=>$department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Position::where('id','=',$request->id)
        ->update([
            'name' => $request->name,
            'department_id' => $request->department_id
        ]);

        return redirect('/position');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Position::find($id);
        
        // use softdeletes
        //$data->delete();
        
        // Permanent Delete
        $data->forceDelete();

        return redirect('/position');
    }

    public function restore($id){
        // how to restore
        $data = Position::find($id);
        $data->restore();
    }
}