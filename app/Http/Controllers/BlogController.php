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
        $cover = $request->file('background_url');

        $cover_name = strtolower($request->title)."-cover.".$cover->getClientOriginalExtension();

        try {
            Blog::create([
                'title' => $request->title ,
                'desc' => $request->desc,
                'background_url' => 'img/posts/'.$cover_name,
            ]);

            // Moves Files
            $cover->move('img/posts/',$cover_name);

            return redirect()->route('blogs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
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
        if($request->file('background_url') == NULL){
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
        else{
            $cover = $request->file('background_url');
            $cover_name = strtolower($request->title)."-cover.".$cover->getClientOriginalExtension();
            try {
                Blog::where('id', $id)->update([
                    'title' => $request->title ,
                    'desc' => $request->desc,
                    'background_url' => 'img/posts/'.$cover_name,
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        unlink($data['background_url']);
        $data = Blog::destroy($id);

        return redirect()->back();
    }
}
