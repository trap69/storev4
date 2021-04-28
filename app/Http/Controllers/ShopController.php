<?php

namespace App\Http\Controllers;
use App\Models\Post;
use File;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index']]);
    }
    public function index(){
        $posts = Post::all();
        return view('shop.pages.home', compact('posts'));
    }

    public function table(){
        return view('shop.pages.table');
    }
    public function category(){
        return view('shop.pages.categoryPage');
    }
    public function addPost(){
        return view('shop.pages.addPost2');
        dd(request()->all());
    }
    public function show(){
        return view('shop.pages.showPost');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
            'category' => 'required',
            'img' => 'mimes:mimes:jpeg,png,jpg,gif,svg |max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/',"",$path);

        //dd(request()->all());
        Post::create([
            'title' => request ('title'),
            'content' => request ('content'),
            'category' => request ('category'),
            'path' => $filename

        ]);
        return redirect ('/');
    }

    public function delete(Post $post){
        $post->delete();

        return redirect('/');
    }
    public function update(Post $post){

        return view ('shop.pages.update-post',compact('post'));
    }

    public function storeUpdate(Request $request ,Post $post){
        if($request->file()){
            File::delete(storage_path('app/public'.$post->path));
            $path = $request->file('img')->store('public/images');
            $filename = str_replace('public/',"",$path);
            Post::where('id',$post->id)->update(['path'=>$filename]);
        }
        Post::where('id',$post->id)->update($request->only(['title','content']));

        return redirect('/');
    }
}
// $category = Category::where()->get();
//
