@extends('layouts.admin.edit')
@section('form-content')
    <h2>Creating new project</h2>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">
            <label for="title">Title:
                <input type="text" name="title" value="{{$record ? $record->title :"" }}">
            </label>
        </div>
        <div class="cell small-12">
            <label for="subtitle">Subtitle:
                <input type="text" name="subtitle" value="{{$record ? $record->subtitle : ""}}">
            </label>
        </div>
        <div class="cell small-12">
            <label for="body">Body:
                <textarea name="body" class="rte" rows="10">
                    {{ $record ? htmlspecialchars($record->body) : "" }}
                </textarea>
            </label>
        </div>
        <div class="cell small-12">
            <label for="github">Github link:
                <input type="text" name="github" value="{{$record ? $record->github : ""}}">
            </label>
        </div>
    </div>
@endsection
