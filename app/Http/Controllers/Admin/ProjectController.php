<?php

namespace Vhom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Vhom\Http\Controllers\Controller;
use Vhom\Project;
use Vhom\Tag;

class ProjectController extends Controller
{
    protected $base = 'admin.project';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(12);

        return view('admin.project.index', [
            'records' => $projects,
            'base'    => $this->base
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.edit',[
            'base' => $this->base,
            'relatedTags' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = Project::create([
            'title'     => $request->title,
            'subtitle'  => $request->subtitle,
            'body'      => $request->body,
            'github'    => $request->github,
            'background_image' => 'none',
            'lead_image' => 'none'
        ]);

        self::handleTags($project, explode(',',request('tags')));

        return redirect()
            ->route('admin.project.index')
            ->with('flashNotice',$request->title." created");
    }
    

    public function edit(Project $project)
    {
        return view('admin.project.edit',[
            'record' => $project,
            'relatedTags' => $project->tags,
            'base'   => $this->base
        ]);
    }
    
    public function update(Request $request, Project $project)
    {
        $project->update([
            'title'     => $request->title,
            'subtitle'  => $request->subtitle,
            'body'      => $request->body,
            'github'    => $request->github
        ]);

        self::handleTags($project, explode(',',request('tags')));

        return redirect()
            ->route('admin.project.index')
            ->with('flashNotice', 'Project Updated');
    }

    public function images(Project $project)
    {
        return view('admin.project.images',[
            'record' => $project,
            'base'   => $this->base
        ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json(['message' => 'project deleted'],200);
    }

    private static function handleTags(Project $project, $tags)
    {
        $project->tags()->detach();
        foreach($tags as $tag)
        {
            $tag = Tag::find($tag);
            if($tag){
                $tag->projects()->save($project);
            }
        }

    }
}
