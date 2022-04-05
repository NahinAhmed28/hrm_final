<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Department;
use App\Models\Noticeboard;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    protected $noticeboardModel;
    public function __construct(Noticeboard $noticeboard)
    {
        $this->noticeboardModel = $noticeboard;
    }

    /**
     * Display a listing of the resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $notices = $this->noticeboardModel->orderBy('id','desc')->simplePaginate(5);
        return view('admin.noticeboards.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $notices = $this->noticeboardModel->get();
        return view('admin.noticeboards.create', compact('notices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $value = $this->noticeboardModel->create([
            'title' => $request->title,
            'description' => $request->description,
        ]);


        if ($value) {
            return back();
        } else {

            $notices = $this->noticeboardModel->orderBy('id','asc')->get();
            return view('admin.noticeboards.create', compact('notices'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $notices = $this->noticeboardModel->find($id);
        return view('admin.noticeboards.show', compact('notices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notices = $this->noticeboardModel->find($id);
        return view('admin.noticeboards.edit', compact('notices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notices =  $this->noticeboardModel->find($id);
        $notices->title =  $request->title;
        $notices->description =  $request->description;
        $notices->update();
        return redirect()->route('admin.noticeboards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->noticeboardModel->destroy($id);
        return  back();
    }
}
