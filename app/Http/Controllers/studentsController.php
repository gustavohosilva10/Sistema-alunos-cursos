<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Collective\Html\HtmlServiceProvider;
use Storage;
use Redirect;
use App\Course;
class studentsController extends Controller
{   
    protected $course;
    protected $student;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $course =  Course::all();
        $student = Students::all();
        return view('/students/index',compact(['student','course']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::pluck('name','id');
        $student = Students::all();
        return view('/students/new',compact(['course']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('avatar')->store('imagens', 'public');

        $student = new Students();
        $student->name = $request->input('name');
        $student->gender = $request->input('gender');
        $student->status = $request->input('status');
        $student->zip_code = $request->input('zip_code');
        $student->address = $request->input('address');
        $student->complement = $request->input('complement');
        $student->strict = $request->input('strict');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        $student->city = $request->input('city');
        $student->city = $request->input('city');
        $student->avatar = $path;
        $student->save();

        return Redirect::to('/students/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = $this->student->findOrFail($id);
        return view('/students/show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::find($id);
        if(isset($student)){
            return view('/students/edit', compact('student'));
        }
        return redirect('/students/index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Students::find($id);
        
        $contract->update($request->all());

        return redirect('/students/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::find($id);
        if(isset($student)){
            $student->delete();
        }
        return redirect('/students/index');
    }
}
