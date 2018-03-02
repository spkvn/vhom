@extends('layouts.admin.edit')
@section('form-content')
    @if(isset($record))
        <h2>Editing {{$record->title}}</h2>
    @else
        <h2>Creating new news item</h2>
    @endif
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">
            <label for="title">Title:
                <input type="text" name="title" value="{{ isset($record) ? $record->title :"" }}">
            </label>
        </div>
        <div class="cell small-12">
            <label for="subtitle">Subtitle:
                <input type="text" name="subtitle" value="{{isset($record) ? $record->subtitle : ""}}">
            </label>
        </div>
        <div class="cell small-12">
            <label for="body">Body:
                <textarea name="body" class="rte" rows="10">
                    {{ isset($record) ? htmlspecialchars($record->body) : "" }}
                </textarea>
            </label>
        </div>
    </div>
@endsection