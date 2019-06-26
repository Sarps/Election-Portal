<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Voter;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::guest()) {
            Auth::logout();
        }
        return view('index')
            ->withPosts(Post::with('nominee')->get());
    }

    public function login(Request $request)
    {
        $voter = Voter::firstOrCreate([
           'nsbe_id' => $request->id
        ]);
        //$voter = Voter::where('nsbe_id', $request->id)->first();
        if($voter){
            Auth::guard('voter')->login($voter);
            return 0;
        }
        //\abort(404, 'Error in credentials');
    }

    public function logout()
    {
        Auth::guard('voter')->logout();
        return 0;
    }
}
