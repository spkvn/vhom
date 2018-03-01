@extends('layouts.admin')
@section('content')
    <div class="grid-x">
        <div class="cell small-2"></div>
        <div class="cell small-8 raised">
            <h1>{{$record->title}}'s images</h1>
            <div class="grid-x grid-margin-x raised">
                <div class="cell small-6">
                    <div class="image-dropzone" data-id="lead_image">

                    </div>
                </div>
                <div class="cell small-6">
                    <div class="image-dropzone" data-id="background_image">

                    </div>
                </div>
            </div>
        </div>
        <div class="cell small-2"></div>
    </div>
@endsection