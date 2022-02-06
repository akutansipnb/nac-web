<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::orderBy('id','desc')->paginate(10);
        return view('admin.blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'background_url'=>'required'
        ]);
        $cover = $request->file('background_url');
        $cover_name = strtolower($request->title)."-cover.".$cover->getClientOriginalExtension();

        if($request->file('file_pdf') != NULL){
            $pdf = $request->file('file_pdf');

            $pdf_name = strtolower($request->title)."-file-blog.".$pdf->getClientOriginalExtension();
            try {
                Blog::create([
                    'title' => $request->title ,
                    'desc' => $request->desc,
                    'background_url' => 'img/posts/'.$cover_name,
                    'file_pdf' => $pdf_name,
                ]);

                // Moves Files
                $cover->move('img/posts/',$cover_name);
                $pdf->move('files/posts/',$pdf_name);

                return redirect()->route('blogs.index');
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        else{
            try {
                Blog::create([
                    'title' => $request->title ,
                    'desc' => $request->desc,
                    'background_url' => 'img/posts/'.$cover_name,
                    'file_pdf' => NULL,
                ]);

                // Moves Files
                $cover->move('img/posts/',$cover_name);

                return redirect()->route('blogs.index');
            } catch (\Throwable $th) {
                throw $th;
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Blog::find($id);
        $filename = $data['file_pdf'];
        $path = public_path('files/posts/'.$filename);

        return response()->make(file_get_contents($path), 500, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Blog::find($id);
        return view('admin.blog.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'desc'=>'required'
        ]);

        if($request->file('background_url') == NULL && $request->file('file_pdf') == NULL){
            try {
                Blog::where('id', $id)->update([
                    'title' => $request->title ,
                    'desc' => $request->desc,
                ]);

                return redirect()->route('blogs.index');
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        else if($request->file('background_url') != NULL && $request->file('file_pdf') == NULL){
            $data = Blog::find($id);
            $cover = $request->file('background_url');
            $cover_name = strtolower($request->title)."-cover.".$cover->getClientOriginalExtension();
            try {
                Blog::where('id', $id)->update([
                    'title' => $request->title ,
                    'desc' => $request->desc,
                    'background_url' => 'img/posts/'.$cover_name,
                ]);

                // Moves Files
                unlink($data['background_url']);
                $cover->move('img/posts/',$cover_name);
                return redirect()->route('blogs.index');
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        else if($request->file('background_url') == NULL && $request->file('file_pdf') != NULL){
            $data = Blog::find($id);
            $pdf = $request->file('file_pdf');

            $pdf_name = strtolower($request->title)."-file-blog.".$pdf->getClientOriginalExtension();
            try {
                Blog::where('id', $id)->update([
                    'title' => $request->title ,
                    'desc' => $request->desc,
                    'file_pdf' => $pdf_name,
                ]);

                // Moves Files
                unlink('files/posts/'.$data['file_pdf']);
                $pdf->move('files/posts/',$pdf_name);
                return redirect()->route('blogs.index');
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        else{
            $data = Blog::find($id);
            $pdf = $request->file('file_pdf');
            $cover = $request->file('background_url');
            $cover_name = strtolower($request->title)."-cover.".$cover->getClientOriginalExtension();
            $pdf_name = strtolower($request->title)."-file-blog.".$pdf->getClientOriginalExtension();
            try {
                Blog::where('id', $id)->update([
                    'title' => $request->title ,
                    'desc' => $request->desc,
                    'background_url' => 'img/posts/'.$cover_name,
                    'file_pdf' => $pdf_name,
                ]);

                // Moves Files
                unlink('files/posts/'.$data['file_pdf']);
                unlink($data['background_url']);
                $cover->move('img/posts/',$cover_name);
                $pdf->move('files/posts/',$pdf_name);
                return redirect()->route('blogs.index');
            } catch (\Throwable $th) {
                throw $th;
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        unlink($data['background_url']);
        unlink('files/posts/'.$data['file_pdf']);
        $data = Blog::destroy($id);

        return redirect()->back();
    }
}
