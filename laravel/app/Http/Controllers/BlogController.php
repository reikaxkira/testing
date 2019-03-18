<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Kernel;
use App\Blog;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;



class BlogController extends Controller {
        

     
    public function indexpage()
    {
        $blogs = Blog::paginate(2);
        return view('index', compact('blogs'));
    }

    public function show($slugs) { 
        $blogs = Blog::where('slugs', $slugs)->first();
        return view('view',compact('blogs'));
        
    }

    public function indexs()
    {
        // $blogs = Blog::all();
        $blogs = Blog::paginate(8);
        return view('admin', compact('blogs'));
    }


    public function blogform()
    {
        return view('blog');
        
    }

    public function editform($slugs)
    {
        $blogs = Blog::where('slugs', $slugs)->first();
        return view('edit',compact('blogs'));   
    }

    public function updates(Request $request,$id)
    {   
        $request->validate([
            'title'=>'required',
            'slugs' => ['required','alpha_dash',
             Rule::unique('blogs','slugs')->ignore($id,'id')],
            'description' => 'required | max:255',
        ]);
        
        // Validator::make($request, [
        //     'slugs' => ['required',
        //         Rule::unique('blogs','slugs')->ignore($blogs,'slugs'),
        // ],
        // ]);

        $blogs = Blog::where('id', $id)->first();
        $blogs->title=$request->input('title'); 
        $blogs->slugs=$request->input('slugs'); 
        $blogs->description=$request->input('description');
        $blogs->save();
        return redirect()->route('indexs')->with('message','Blog updated successfully.');

    }

    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'slugs'=>'required | alpha_dash | unique:Blogs',
            'description' => 'required | max:255',
        ]);
        //save data into database
        Blog::create($request->all());
        return redirect()->back()->with('message','Blog added successfully.');
                       
    }

    public function destroy($id)
    {
        blog::find($id)->delete();
        return redirect()->route('indexs')->with('message','Post has been deleted successfully');
    }
}




