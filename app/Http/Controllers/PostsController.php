<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Post;
use Session;
use Purifier;
use Image;
use Carbon\Carbon;
use App\Category;
use Illuminate\Support\Facades\Storage;
use App\Tag;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
	
	 public function index1()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index1')->withPosts($posts);
		
    }
	public function indexuser()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.indexuser')->withPosts($posts);
		
    }

    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories=Category::all(); 
	   $tags=Tag::all(); 
       return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $this->validate(request(),
            [
                 'title'=>'required|min:5|max:255',
				 'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                 'body'=>'required|min:5',
				 'category_id'=>'required|integer',
				 'file'=>'sometimes|image',
            ]);

       // $post->title = request('title');
       // $post->body = request('body');
        //treba da ga sacuva u bazi podataka
       // Post::create(request(['title','body']));
	   $post = new Post;
		$post->title = request('title');
		$post->slug = $request->slug;
		$post->body = Purifier::clean(request('body'));
		$post->category_id = $request->category_id;
		$post->user_id = auth()->id();
    	
		 if($request->hasFile('file')){
    		
			$slika = $request->file('file');			
    		$filename = time() . '.' . $slika->getClientOriginalExtension();
			//$path='uploads/avatars/'.'/'.$filename;
			$location= public_path('uploads/' . $filename ) ;
			Image::make($slika)->resize(null, 400, function ($constraint) {
																		$constraint->aspectRatio();
																			})->save($location);
			$post->slika=$filename;
			}

		$post->save();
		$post->tags()->sync($request->tags,false);
	    Session::flash('success','Uspesno ste postavili novi post') ;
        //treba da redirektuje korisnika na home page
        return redirect('oglasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
		
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = Post:: find($id);
		$categories = Category:: all();
		$cats=array();
		foreach($categories as $category)
			{$cats[$category->id]=$category->name;}
		//return view('posts.edit')->withPost($post)->withCategories($cats);
	   
	          $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
			$tags= $tags2;
        }
        // return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post)->withCategories($cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    { 
		$post = Post::find($id);
			
			 if ($request->input('slug') == $post->slug) {
            $this->validate($request, array(
                'title' => 'required|max:255',
				'file'=>'sometimes|image',
                'category_id' => 'required|integer',
                'body'  => 'required'
            ));
        } else {
        $this->validate($request, array(
                'title' => 'required|max:255',
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id' => 'required|integer',
				'file'=>'sometimes|image',
                'body'  => 'required'
            ));
        }
			
			$post = Post::find($id);
		$post->title= $request->input('title') ;
		 $post->slug = $request->input('slug');
		$post->category_id= $request->input('category_id') ;
		$post->body = Purifier::clean($request->input('body'));
		
		 
        if($request->hasFile('file')){
    		$slika = $request->file('file');
    		$filename = time() . '.' . $slika->getClientOriginalExtension();
			//$path='uploads/avatars/'.'/'.$filename;
			$location= public_path('uploads/' . $filename ) ;
    		Image::make($slika)->resize(1400, null, function ($constraint) {
    $constraint->aspectRatio();
})->save($path );
			$post->slika=$filename;
			}
		$post->tags()->sync($request->tags,false);
		$post->save();
		/* if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        } else {
            $post->tags()->sync(array());
        }*/
		 Session::flash('success','Uspesno ste promenili post') ;
        
	
        //treba da redirektuje korisnika na home page
         return redirect('/oglasi');/**/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
