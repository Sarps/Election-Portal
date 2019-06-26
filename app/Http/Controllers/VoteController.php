<?php

namespace App\Http\Controllers;

use Auth;
use App\Vote;
use App\Voter;
use App\Post;
use App\Nominee;

use App\Charts\PieChart;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vote::updateOrCreate(
            ['nominee_id'=>$request->nominee, 'voter_id'=>Auth::guard('voter')->id()],
            ['value'=>$request->value]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
        $nominee->votes()
            ->where('user_id', '=', Auth::id())
            ->first()->delete();
    }

    public function results(Request $request)
    {
        $results = Post::with('nominee')->get()->map(function ($post) {
            return $this->getChartData($post);
        });

        $aspirants = Nominee::with('post')->withCount([
            'votes as ups' => function($query) {
                $query->where('value', 1);
            },
            'votes as downs' => function($query) {
                $query->where('value', -1);
            }
        ])->get();

        //dd($results);

        return view('dashboard')
            ->withResults($results)
            ->withAspirants($aspirants)
            ->withVoteCount(Vote::count())
            ->withVoterCount(Voter::count())
            ->withNomineeCount(Nominee::count());
    }

    public function getChartData($post)
    {
        $sources = array();
        $nominee = $post->nominee;
            
        $ups = $nominee->votes()->where('value', 1)->count();
        $downs = $nominee->votes()->where('value', -1)->count();
        $voters = Voter::count();
        $data = (new PieChart(
                ["Up Vote", "Down Vote", "Rejected"],
                [ $ups, $downs, $voters - ( $ups + $downs ) ],
                $post->title)
        )->getResponse();

        $meta = ['perc'=>round(($ups/$voters)*100), 'name'=>$nominee->name];

        return [
            'data'=>$data,
            'meta'=>$meta
        ];

    }

}
