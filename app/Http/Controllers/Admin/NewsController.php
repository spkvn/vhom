<?php

namespace Vhom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Vhom\Http\Controllers\Controller;
use Vhom\News;

class NewsController extends Controller
{
    protected $base = "admin.news";
    public function index()
    {
        $records = News::paginate(12);

        return view("$this->base.index",[
           'records' => $records,
           'base'    => $this->base
        ]);
    }

    public function create()
    {
        return view("$this->base.edit",[
           "base" => $this->base
        ]);
    }

    public function store(Request $request)
    {
        News::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'background_image' => 'none',
            'user_id' => auth()->id(),
        ]);

        return redirect()
            ->route('admin.news.index')
            ->with('flashNotice', $request->title." created");
    }

    public function edit(News $news)
    {
        return view("admin.news.edit",[
            'record' => $news,
            'base'   => $this->base
        ]);
    }

    public function update(Request $request,News $news)
    {
        $news->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body
        ]);

        return redirect()
            ->route('admin.news.index')
            ->with('flashNotice', 'News Item updated');
    }

    public function images(News $news)
    {
        return view("admin.news.images",[
            'record' => $news,
            'base'   => $this->base
        ]);
    }

    public function destroy(News $news)
    {
        $news->delete();
        return response()->json(['message' => 'News item deleted'],200);
    }
}
