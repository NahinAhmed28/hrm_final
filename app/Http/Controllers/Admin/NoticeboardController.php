<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Noticeboard;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.noticeboards.index');
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
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function show(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticeboard $noticeboard)
    {
        //
    }
}
