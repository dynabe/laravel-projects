<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\User;
use App\Http\Requests\PagesRequest;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::orderBy('id', 'DESC')->paginate(10);

        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \app\Http\Requests\PagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagesRequest $request)
    {
        Pages::create($request->all());
        return redirect()->route('pages.index');
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
    public function edit(Pages $page)
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesRequest $request, Pages $page)
    {
        $page->update($request->all());
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $page)
    {
        $page->delete();
        return redirect()->route('pages.index');
    }
}
