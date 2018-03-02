@extends('layouts.admin')
@section('content')
    <div class="grid-x grid-padding-x">
        <div class="cell small-2">
            <h2>Tags</h2>
        </div>
        <div class="cell small-6"></div>
        <div class="cell small-4 align-right" style="display:flex;jutsify-content:flex-end;align-items:center;">
            <input type="text" id="tag-name">
            <button class="button" id="tag-create">New</button>
        </div>
    </div>
    <div class="grid-x grid-padding-x" id="tag-list-parent">
        @forelse($tags as $tag)
            <div class="cell small-12 " style="margin-bottom:10px; background:white;">
                <p>{{$tag->name}}</p>
                <a class="delete"
                   data-route="{{ route('admin.tag.destroy', $tag->id) }}"
                   data-message="Are you sure you want to delete {{$tag->name}}">
                   delete
                </a>
            </div>
        @empty
            <div id="no-tags" class="cell small-12">
                No Tags
            </div>
        @endforelse
    </div>
@endsection

@push('javascript')
<script>
    $("button#tag-create").on('click', function(){
        var name = $('input#tag-name').val();
        $.ajax({
            url : '/admin/tag',
            method: "post",
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                name : name
            },
            success: function(response){
                $('input#tag-name').val("");
                $('div#tag-list-parent').append('<div class="cell small-12" style="margin-bottom:10px; background:white;"><p>'+name+'</p></div>');
            }
        });
    });
</script>
@endpush