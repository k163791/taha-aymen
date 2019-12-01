<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Match;
use Session;
class MatchesController extends Controller
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
      $teams = Team::all();
      if($teams->count() == 0) {
        Session::flash('info', 'Add Team First');
        return redirect()->back();
      }

      return view('admin.matches.add')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->team1 == $request->team2) {
          Session::flash('info', 'Teams cannot be same');
          return redirect()->back();
        }

        Match::create([
          'team_id1' => $request->team1,
          'team_id2' => $request->team2,
          'date' => $request->date,
          'time' => $request->time
        ]);

        Session::flash('success', 'Match successfully added');
        return redirect()->back();

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
        //
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
        //
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
