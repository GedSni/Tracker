<?php

namespace App\Http\Controllers;


use DB;
use App\Result;
use App\Commit;
use Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::select('SELECT commits.id as commitId, commits.date as commitDate,
                                   results.id as resultId,
                                   results.date as resultDate,
                                   results.value as resultValue,
                                   results.domain as resultDomain                                                                     
                            FROM 
                                commits, results');

        $commitData = DB::select('SELECT * FROM commits');

        return view('index')->with('data', $data)->with('commitData', $commitData);
    }

    public function updateTable()
    {
        $commitId = Request::input('commitId');

        $data = DB::select('SELECT commits.id as commitId, commits.date as commitDate,
                                   results.id as resultId,
                                   results.date as resultDate,
                                   results.value as resultValue,
                                   results.domain as resultDomain                                                                     
                            FROM 
                                commits, results
                            WHERE
                                commits.id = results.commit_id    
                            ');

        return view('index')->with('data', $data);;
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
        //
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
