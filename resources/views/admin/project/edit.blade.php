@extends('layouts.admin.edit')
@section('form-content')
    @if(isset($record))
        <h2>Editing {{$record->title}}</h2>
    @else
        <h2>Creating new project</h2>
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
        <div class="cell small-8">
            <label for="github">Github link:
                <input type="text" name="github" value="{{isset($record) ? $record->github : ""}}">
            </label>
        </div>
        <div class="cell small-4">
            <label for="tags">Tags:
                <input type="text" name="tags" id="tags"/>
            </label>
        </div>
    </div>
@endsection

@push('javascript')
<script>
    var tags = [
        @foreach(Vhom\Tag::all() as $tag)
        {
            tag : "{{$tag->name}}",
            value : "{{$tag->id}}"
        },
        @endforeach
    ];

    $('#tags').selectize({
        delimiter: ',',
        persist: false,
        valueField: 'value',
        labelField: 'tag',
        searchField: 'tag',
        options: tags,
        create: function(input) {
            return {
                tag: input,
                value: input
            }
        }
    });

    @if(isset($relatedTags))
        @foreach($relatedTags as $relatedTag)
            $('#tags')[0].selectize.addItem({{$relatedTag->id}});
        @endforeach
    @endif
</script>
@endpush
