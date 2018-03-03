<div class="tag cell small-4 " data-id="{{$tag->id}}" style="margin-bottom:10px; background:white;">
    <p class="tag-name">{{$tag->name}}</p>
    <button class="tag-edit">
        edit
    </button>
    <a class="delete"
       data-route="{{ route('admin.tag.destroy', $tag->id) }}"
       data-message="Are you sure you want to delete {{$tag->name}}">
        delete
    </a>
</div>