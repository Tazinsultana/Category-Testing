<?php

namespace App\Http\Controllers;

use App\Models\File;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $file = File::all();
        return view('file.index', compact('file'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('file.create');
    }

    public function store(Request $req)
    {

        $req->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg,csv,txt,xlx,xls,pdf|max:2048',
            'title' => 'required',
            'version' => 'required',
        ]);
        // dd($req->all());

        // $fileModel = new File;
        // $input['version']=$req->version;
        if ($req->hasFile('file')) {
            $filename = $req->file('file')->hashName();
            $filePath = $req->file('file')->storeAs('uploads', $filename, 'public');
            // dd($filename);

            // dd($filename);
            //  $fileModel->file_path = $req->file->getClientOriginalName();
            //  $fileModel->version = $req->version;;

            // $fileModel->save();

            // $input['file_path'] = $filename;
        }
        $input = [
            'file_path' => $filename,
            'title' => $req->title,
            'version' => $req->version

        ];
        // dd($input);
        File::create($input);

        return redirect()->route('file.index')
            ->with('success', 'file created successfully.');


    }


    public function show(File $file)
    {
        // dd($file);
        return view('file.show', compact('file'));

    }


    public function edit(File $file)
    {

        return view('file.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, File $file)
    {

        $req->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg,csv,txt,xlx,xls,pdf|max:2048',
            'title' => 'required',
            'version' => 'required',
        ]);
        if ($req->hasFile('file')) {
            $filename = $req->file('file')->hashName();
            $filePath = $req->file('file')->storeAs('uploads', $filename, 'public');
        }
        else{
            unset($input);
        }
        $input = [
            'file_path' => $filename,
            'title' => $req->title,
            'version' => $req->version

        ];
        $file->update($input);

        return redirect()->route('file.index')
            ->with('success', 'file created successfully.');
    }



    public function destroy(File $file)
    {
        $file->delete();
        return redirect()->route('file.index');
    }
}