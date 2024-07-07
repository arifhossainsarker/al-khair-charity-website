<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\NoticeBoard;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Repositories\MediaRepo;
use Illuminate\Http\Request;

class  NoticeBoardController extends Controller
{
     /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $notice_boards = NoticeBoard::get();

        return view('back.notice.index', compact('notice_boards'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('back.notice.create');
    }

    /**
     * @param \App\Http\Requests\ResearchStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $v_data = [
            'title' => 'required|max:255',
            'description' => 'required',
            'file_upload' => 'mimes:pdf,xlx,csv,jpeg,jpg,png,gif|max:20048',
        ];
        $request->validate($v_data);

        $notice_board = new NoticeBoard();
        $notice_board->title = $request->title;
        $notice_board->slug = Str::slug($request->title);
        $notice_board->description = $request->description;
        $fileName = time().'.'.$request->file_upload->extension();
        $request->file_upload->move(public_path('uploads/notice'), $fileName);
        $notice_board->notice_file = $fileName;
        $notice_board->save();

        return redirect()->back()->with('success-alert', 'Notice created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, NoticeBoard $NoticeBoard)
    {
        return view('back.notice.show', compact('NoticeBoard'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice_board = NoticeBoard::findOrFail($id);
        return view('back.notice.edit', compact('notice_board'));
    }

    /**
     * @param \App\Http\Requests\ResearchUpdateRequest $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $v_data = [
            'title' => 'required|max:255',
            'description' => 'required',
        ];
        $request->validate($v_data);

        $notice_board = NoticeBoard::findOrFail($id);
        $notice_board->title = $request->title;
        $notice_board->slug = Str::slug($request->title);
        $notice_board->description = $request->description;
        $notice_board->save();

        return redirect()->back()->with('success-alert', 'Notice Update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice_board = NoticeBoard::findOrFail($id);
        $notice_board->delete();

        return redirect()->route('back.notice.index')->with('success-alert', 'Notice deleted successfully.');
    }
}
