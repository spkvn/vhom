@extends('layouts.admin')
@section('content')
    <div class="grid-x grid-padding-x">
        <div class="cell small-8">
            <h2>vhom.org projects</h2>
        </div>
        <div class="cell small-4">
            <a href="#" class="button">new</a>
        </div>
        @forelse($records as $project)
            <div class="cell small-4">
                <p><strong>{{$project->title}}</strong></p>
                <p>{{$project->subtitle}}</p>
            </div>
        @empty
            <div class="cell auto">
                <p>No Projects :-(</p>
            </div>
        @endforelse
    </div>
@endsection