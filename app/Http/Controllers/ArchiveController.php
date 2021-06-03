<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    protected $uploadPath;


    public function __construct()
    {
        
        $this->uploadPath = public_path(config('cms.document.directory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archives = Archive::all();
        return view('archive.index',compact('archives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $archive = new Archive();
        $archive->name = $request->name;
        $archive->description = $request->description;
        $archive->type = $request->type;
        $archive->user_id = $request->user_id;

        $archive->uri = $this->handleRequest($request);
        $archive->save();

        return redirect('/archive')->with('successMsg','Item Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function show(Archive $archive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function edit(Archive $archive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archive $archive)
    {
        //
    }

    private function handleRequest($request){
        $data = $request->image;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // $fileName = $file->getClientOriginalName();
            $fileName=time()."-".$file->getClientOriginalName().".".$file->getClientOriginalExtension();
            dd($fileName);
            $destination = $this->uploadPath;
            $successUploaded = $file->move($destination, $fileName);
            $data = $fileName;
            if ($successUploaded){
                return $data;
            }
            return "sd";
        }
        return null;
    }
}
