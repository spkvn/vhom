@extends('layouts.admin')

@section('content')
    <div class="grid-x form-grid">
        <div class="cell small-2"></div>
        <div class="cell small-8 content-cell">
            @if(isset($record))
            <form action="{{route("$base.update", $record->id)}}" method="POST">
                {{method_field("PUT")}}
            @else
            <form action="{{route("$base.store")}}" method="POST">
            @endif
                {{csrf_field()}}

                @yield('form-content')
        </div>
        <div class="cell small-2"></div>
        <div class="cell small-2"></div>
        <div class="cell small-8 content-cell">
            <a href="{{ \Illuminate\Support\Facades\URL::previous()}}" class="button primary">Back</a>
            <input class="button float-right submit-button" type="submit" value="Save">
            </form>
        </div>
        <div class="cell small-2"></div>
    </div>
@endsection
