<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("course.add_course");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validat = Validator::make($request->all(), [
            'name_course' => 'required',
            'discreption' => 'required'
        ]);
        if ($validat->fails()) {
            return redirect('addCourse')
                ->withErrors($validat);
        } else {
            $course = new course;
            $course->name_course = $request->input('name_course');
            $course->discreption = $request->input('discreption');
            $course->save();

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        //
    }
}
