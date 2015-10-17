<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewsFormRequest;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{


    public function __construct(){
        $this->repo = new \App\Repos\ReviewsRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'reviews'=>$this->repo->getAll()
        ];

        return view('home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Repos\ReviewsFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewsFormRequest $request)
    {

        $this->repo->save($request->all());
        return redirect('/');
    }


    /**
     * Approve a newly created resource in storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {

        $this->repo->approve($id);
        return redirect('/');
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
        $this->repo->delete($id);
        return redirect('/');
    }
}
