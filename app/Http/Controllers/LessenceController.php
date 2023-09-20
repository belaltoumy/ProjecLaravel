<?php

namespace App\Http\Controllers;

use App\Models\lessence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessenceController extends Controller
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
        return view('lessens.createless');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $fileName = $request->video->getClientOriginalName();
        $filePath = 'videos/' . $fileName;

        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));

        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);

        if ($isFileUploaded) {
            $video = new lessence;
            $video->courses_id=1;
            $video->name_video = $fileName;
            $video->location = $filePath;
            $video->save();

            return back()
            ->with('success','Video has been successfully uploaded.');
        }

        return back()
            ->with('error','Unexpected error occured');
    }

    /**
     * Display the specified resource.
     */
    public function show(lessence $lessence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lessence $lessence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lessence $lessence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lessence $lessence)
    {
        //
    }
}
