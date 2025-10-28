<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatepostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //  $post = post::all();
    //    $post =post::with('user')->get();

    //      return view('home', ['post' =>$post  ]);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //      { $validated = $request->validate([
    //          'user_id' => 'required|exists:users,id',
    //         'title' => 'required',
    //         'content' => 'required',
    //         'status' => 'required',
       
    //     ]);
    //     // Post::create($validated);
    //     // return redirect()->route('home')->with('success', 'Employé ajouté avec succès.');
    //     // $post = $user->posts()->create([]);
    //      $post = Post::create( $validated );

    // return response()->json($post, 201);
    // }
    // }
public function index()
{
    
    return $post = Post::with('user')->get();
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $validated = $request->validate([
        'user_id' => 'required|exists:users,id',
        'title' => 'required',
        'content' => 'required',
        'status' => 'required',
    ]);

    $post = Post::create($validated);

    return response()->json($post, 201);
}

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
         return view('detail',['post'=>$post]);
    }

   
     
    public function edit(post $post)
    {
           return view('update',['post' =>$post]);

    }

    /**
     * Update the specified resource in storage.
     *  $infos = $request->validate([
          

     */
    public function update(UpdatepostRequest $request, post $post)
    {
        $infos = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
          
            'status' => ['required'],
        ]);
          
         return $post->update($infos);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
