<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Kernel;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        // return view('admin')->with('blogs', $blogs);
        return view('admin', compact('blogs'));
    }


    public function blogform()
    {
        return view('blog');
        
    }

    public function editform($id)
    {
        $blogs = Blog::find($id);
        return view('edit',compact('blogs'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'slugs'=>'required | unique:Blogs',
            'description' => 'required',
        ]);
        //save data into database
        Blog::create($request->all());
        return redirect()->back()->with('message','Blog added successfully.');
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
        // $blog = Blog::find($id);
        // return view('edit',compact('id'));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $request, $id) { 
        $request->validate([
            'slugs'=>'required | unique:Blogs'
        ]);
        // $blogs = Blog::find($id);
        // $blogs->title = $request->get('title');
        // $blogs->slugs = $request->get('slugs'); 
        // $blogs->description = $request->get('description');
        // $blogs->save();
        // return redirect()->back()->with('message','Blog added successfully.');

        $blogs = $request->all();
        dd($blogs);

        $test->fill($blogs)->save();
    }

    public function update(Request $request, $id)
    {  
        // $blogs = Blog::find($id);
        // $blogs->title = $request->get('title');
        // $blogs->slugs = $request->get('slugs'); 
        // $blogs->description = $request->get('description');
        // $blogs->save();
        // return redirect()->back()
        //                  ->with('message','Blog added successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        blog::find($id)->delete();
        return redirect()->route('admin.index')->with('message','Post has been deleted successfully');
    }
}


