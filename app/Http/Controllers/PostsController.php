<?php

namespace App\Http\Controllers;
use App\Post;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
   // public function __construct()
   // {
      //  $this->middleware('auth');
  //  }
    public function index()
    {
        $posts = Post::all()->toArray();            //grab data from posts table
        return view('layouts.app', compact('posts'));
        //dd($posts);

    }


    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'item_id'=>'required',
            'item_name'=>'required',
            'price'=>'required',
            'caption'=>'required',
            'image1'=>['required','image'],
            'image2'=>['required','image'],
            'image3'=>['required','image'],
        ]);

        $imagePath1 = (request('image1')->store('items','public'));
        $image1 = Image::make(public_path("storage/{$imagePath1}"))->fit(1200);
        $image1 ->save();

        $imagePath2 = (request('image2')->store('items','public'));
        $image2 = Image::make(public_path("storage/{$imagePath2}"))->fit(1200);
        $image2 ->save();

        $imagePath3 = (request('image3')->store('items','public'));
        $image3 = Image::make(public_path("storage/{$imagePath3}"))->fit(1200);
        $image3 ->save();

        auth()->user()->posts()->create([
            'item_id'=>$data['item_id'],
            'item_name'=>$data['item_name'],
            'price'=>$data['price'],
            'caption'=> $data['caption'],
            'image1' => $imagePath1,
            'image2' => $imagePath2,
            'image3' => $imagePath3
        ]);


        return redirect('/');

    }
    public function show(Post $post){
        return view('posts.show',compact('post'));
    }
    public function search(Request $request){
        $request->validate([
            'query'=>'required|min:3'
        ]);


        $query = $request->input('query');
        $products = Post::where('item_name','like',"%$query%")
                         ->orwhere('item_id','like',"%$query%")
                         ->orwhere('caption','like',"%$query%")
                         ->latest()->paginate(10);
      //  $products = Post::search($query)->latest()->paginate(10);


        return view('posts.search-result')->with('products',$products);
    }

    public function delete(){
        return view('posts.delete');
    }

    public function destroy(){
        $products = Post::find('item_id');
        $products->delete();
        return redirect('/')->with('products',$products);


    }
}
