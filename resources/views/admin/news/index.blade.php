@extends('layouts.admin')
@section('content')
    <div class="grid-x grid-padding-x">
        <div class="cell small-8">
            <h2>vhom.org news</h2>
        </div>
        <div class="cell small-4">
            <a href="{{ route('admin.news.create') }}" class="button">new</a>
        </div>
        @forelse($records as $news)
            <div class="cell small-4 raised taller relative">
                <h3>{{$news->title}}</h3>
                <p>{{$news->subtitle}}</p>
                <div class="bottom-buttons">
                    <a href="{{ route('admin.news.images',$news->id) }}">images</a>
                    <a href="{{ route('admin.news.edit', $news->id) }}">edit</a>
                    <a class="delete"
                       data-route="{{ route('admin.news.destroy', $news->id) }}"
                       data-message="Are you sure you want to delete {{$news->title}}"
                    >delete</a>
                </div>
            </div>
        @empty
            <div class="cell auto">
                <p>No News :-(</p>
            </div>
        @endforelse
    </div>
@endsection