@extends('layouts.admin')
@section('content')
    <div class="grid-x grid-padding-x">
        <div class="cell small-2">
            <h2>Tags</h2>
        </div>
        <div class="cell small-6"></div>
        <div class="cell small-4" style="display:flex;jutsify-content:flex-end;align-items:center;">
            <input type="text" id="tag-name">
            <button class="button" id="tag-create">New</button>
        </div>
    </div>
    <div class="grid-x grid-padding-x" id="tag-list-parent">
        @forelse($tags as $tag)
            @include('admin.partials.tag',$tag)
        @empty
            <div id="no-tags" class="cell small-12">
                No Tags
            </div>
        @endforelse
    </div>
@endsection

@push('javascript')
<script>
    function cleanUpEdit(){
        //Clean up other open inputs
        $('div.tag').each(function(){
            $(this).css('background','white');
        });
        $('input#tag-edit-input').each(function(){
            $(this).remove();
        });
        $('button#tag-edit-submit').each(function(){
            $(this).remove();
        });
        $('p.tag-name').each(function(){
            $(this).show();
        });
    }
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
                $('div#tag-list-parent').append('<div class="cell small-4" style="margin-bottom:10px; background:white;"><p>'+name+'</p></div>');
            }
        });
    });
    $('button.tag-edit').on('click',function(){
        cleanUpEdit();
        var parent = $(this).parent('div.tag');
        var id = parent.data('id');
        var name = parent.find('p.tag-name').html();
        var input  = $('<input id="tag-edit-input" value="'+name+'"/>');
        var button = $('<button id="tag-edit-submit">Save</button>');
        button.on('click', function(){
            var name = $('input#tag-edit-input').val();
            $.ajax({
                url : '/admin/tag/'+id,
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name : name
                },
                success:function(){
                    cleanUpEdit();
                    parent = $('div.tag[data-id="'+id+'"]').find('p.tag-name').html(name);
                }
            })
        });
        parent.css('background','darkorange');
        parent.find('p.tag-name').hide();
        parent.prepend(button);
        parent.prepend(input);
    });
</script>
@endpush