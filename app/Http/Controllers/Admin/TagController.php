<?php

namespace Vhom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Vhom\Http\Controllers\Controller;
use Vhom\Tag;

class TagController extends Controller
{
    protected $base = "admin.tag";
    public function index()
    {
        $tags = Tag::all();

        return view("$this->base.index",[
            'tags' => $tags,
            'base' => $this->base
        ]);
    }

    public function store(Request $request)
    {
        Tag::create([
            'name' => $request->name
        ]);

        return response()->json(['message' => 'created tag']);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return response()->json(['message' => 'success']);
    }
}
