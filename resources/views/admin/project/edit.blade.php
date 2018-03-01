@extends('layouts.admin.edit')
@section('form-content')
    <h2>Creating new project</h2>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">
            <label for="title">Title:
                <input type="text" name="title">
            </label>
        </div>
        <div class="cell small-12">
            <label for="subtitle">Subtitle:
                <input type="text" name="subtitle">
            </label>
        </div>
        <div class="cell small-12">
            <label for="body">Body:
                <textarea name="body" class="rte" rows="10"></textarea>
            </label>
        </div>
        <div class="cell small-12">
            <label for="github">Github link:
                <input type="text" name="github">
            </label>
        </div>
        <!-- ToDo: find out how i want to do file upload -->
        <div class="cell small-6">
            <label for="github">Background image
                <input type="text" name="github">
            </label>
        </div>
        <div class="cell small-6">
            <label for="github">Project Image
                <input type="text" name="github">
            </label>
        </div>
    </div>
@endsection