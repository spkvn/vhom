@extends('layouts.admin')
@section('content')
    <div class="grid-x grid-padding-x">
        <div class="cell small-8">
            <h2>vhom.org projects</h2>
        </div>
        <div class="cell small-4">
            <a href="{{ route('admin.project.create') }}" class="button">new</a>
        </div>
        @forelse($records as $project)
            <div class="cell small-4 raised taller relative">
                <h3>{{$project->title}}</h3>
                <p>{{$project->subtitle}}</p>
                <div class="bottom-buttons">
                    <a href="{{ route('admin.project.images',$project->id) }}">images</a>
                    <a href="{{ route('admin.project.edit', $project->id) }}">edit</a>
                    <a class="delete"
                       data-route="{{ route('admin.project.destroy', $project->id) }}"
                       data-message="Are you sure you want to delete {{$project->title}}"
                    >delete</a>
                </div>
            </div>
        @empty
            <div class="cell auto">
                <p>No Projects :-(</p>
            </div>
        @endforelse
    </div>
@endsection