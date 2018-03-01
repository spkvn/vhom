@extends('layouts.admin')
@section('content')
    <div class="grid-x">
        <div class="cell small-2"></div>
        <div class="cell small-8 raised">
            <h1>{{$record->title}}'s images</h1>
            <div class="grid-x grid-margin-x raised">
                <div class="cell small-6">
                    <div class="image-dropzone" data-id="{{$record->id}}" data-name="lead_image">
                        <div class="dz-message"><span class="lnr lnr-cloud-upload"></span></div>
                        <div class="dz-message">Upload Lead Image</div>
                    </div>
                </div>
                <div class="cell small-6">
                    <div class="image-dropzone" data-id="{{$record->id}}" data-name="background_image">
                        <div class="dz-message"><span class="lnr lnr-cloud-upload"></span></div>
                        <div class="dz-message">Upload Background Image</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell small-2"></div>
    </div>
@endsection
@push('javascript')
<script>
    $(document).ready(function(){
        var token = $("meta[name='csrf-token']").attr('content');
        $("div.image-dropzone").each(function(){
            var id = $(this).data('id');
            var name = $(this).data('name');
            console.log('dropzoning: ' +id + ' ' +name)
            $(this).dropzone({
                url : '/admin/image/upload',
                paramName : name,
                maxFiles: 1,
                headers : {
                    'X-CSRF-TOKEN' : token
                }
            });
        });
    });
</script>
@endpush