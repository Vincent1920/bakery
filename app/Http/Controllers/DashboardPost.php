<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\posts;
use Illuminate\Support\Facades\Storage;
use App\Models\categories;
use App\posts as AppPosts;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
class DashboardPost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return post::all();
        return view('dashboard.posts.index',[
            'posts'=> posts::all(),
            'categories' => categories::all()

        ]);
        // dd($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'dashboard.posts.create',[
            'posts'=>posts::all(),
            'categories' => categories::all() 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //  return $request->all();

        // $validatadData = $request->validate([
        //     'title' => 'required',
        //     'category_id'=>'required',
        //     'slug' => 'required|unique:posts',
        //     'body'=>'required'
        // ]);
        
        // // $validatadData['user_id'] = auth()->user()->id; 

        // $validatadData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        // posts::create(validatadData);
       
       // // return redirect()->route('/dashboard/posts')
        //                        ->with('success','success, New post has baen added!!');

        // ddd();
        //  return $request->all();

        // $validatedData = $request->validate([
        //     'title' => 'required | max:255',
        //     'slug' => 'required | unique:posts',
        //     'categories_id' => 'required',
        //     'harga' => 'required',
        //     // 'image' => 'image|file|max:1024',
        //     'body' => 'required'
        // ]);
      
        $image='';
        if($request->image != null){
            $image=$request->image;
        }
        // return $request->file('image')->store('posts-images');
        
        $data = [
            'categories_id'=>$request->categories_id,
            'title'=>$request->title,
            'slug'=>$request->slug,
            // 'image'=>$request->image,
            'image' =>$image->store('posts-images'),
            'harga'=>$request->harga,
            'body'=>$request->body
        ];
       
    
        // $validatedData['user_id'] =auth()->user()->id;
            $data['excerpt'] =Str::limit(strip_tags($request->body), 200);
            posts::create($data);

        // return redirect()->Route(/posts');
        // return redirect()->route('index')->with('success','success, New post has baen added!!');
        return redirect('/posts')->with('success','success, New post has baen added!!');

    }

    /** 
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    // public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'post'=>$post, 
            'posts'=>posts::all(),
            'category'=>categories::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',[
            'post'=>$post,
            'categories'=>categories::all()
              
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //  return $request->all();
        
        $request->validate([
            'title'=>'required',
            'categories_id'=>'required',
            'body'=>'required',
            'slug'=>'required',
            'harga'=>'required',
            'image'=>'required',
            // 'image' =>'required'->store('posts-images')
        ]);
        
        // $request['excerpt'] = Str::limit(strip_tags($request->body), 200);

        $image='';
        if($request->image != null){
           $image=$request->image;
        }

        $data = [
            'categories_id'=>$request->categories_id,
            'title'=>$request->title,
            'slug'=>$request->slug,
            'image' => $request->image,
            // 'image' =>$image->string('posts-images'),
            'harga'=>$request->harga,
            'body'=>$request->body,
        ];
        
        $data['excerpt'] = Str::limit(strip_tags($request->body), 200);
        
        $post->update($data);

        // posts::update($data);


        return redirect('/posts')->with('success','Product updated successfully');
        // return redirect()->Route('/')->with('success','Product updated successfully');


        // $rules = [
        //     'title'=> 'required|max:255',
        //     // 'slug'=> 'required|max:255',
        //     'categories_id' => 'required',
        //     'image'=>'image|file|max:5000',
        //     'body' => 'required'
        // ];
        // if($request->slug != $post->slug){ 
        //     $rules['slug'] = 'required|unique:posts';

        // }
        // $validatadData = $request->validate($rules);

        // if($request->file('image')){
        //     if($request->oldimage){
        //         Storage::delete($request->oldimage);
        //     }
        //     $validatadData['image'] = $request->file('image')->store('post-images');
        // }
        // $image='';
        // if($request->image != null){
        //     $image=$request->image;
        // }

        // // $validatedData['user_id'] =auth()->user()->id;
        // $validatadData['excerpt'] =Str::limit(strip_tags($request->body), 200);
     
        // post::where('id',$post->id)->update($validatadData);

        // return redirect('/dashboard/posts')->with('success', 'post has been update!! ');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */


    public function destroy(Post $posts)
    {
        //  return $posts;
        // Post::delete($post->id);
        $posts->delete();
        return redirect('/posts')->with('success, post has baen deleted');
        // DB::select('posts')->where('id', $post->id)->first();
         
     //    if($post->image){
     //          storage::delete($post->image);
     //       }
 
     //   return "batu";
    
    //  $post = post::destroy();
    //  session()->flash('success', 'Post Deleted Successfully.');
    
    //  $post::delete();
    //   session()->flash('success', 'Post Deleted Successfully.');
     
    //  post::destroy($post->slug);
        //  return redirect('/posts')->with('success, post has baen deleted!');
        
    }
    
    // public function delete(Post $post)
    // {
    //     $post=Post::delete($post->id);
    //     return redirect('posts')->with('success, post has baen deleted');
    // }


     
    public function  checkSlug (Request $request)
    {
        $slug =  SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]); 
    }
 
}
