@extends('layouts.admin')
@section('content')
    <div class="grid-x">
        <div class="cell small-2"></div>
        <div class="cell small-8 raised">
            <h1>{{$record->title}}'s images</h1>
            <p>Uploading more will overwrite.</p>
            <div class="grid-x grid-margin-x raised">
                <div class="cell small-6">
                    <div class="image-dropzone" data-id="{{$record->id}}" data-name="lead_image">
                        <div class="dz-message"><span class="lnr lnr-cloud-upload"></span></div>
                        <div class="dz-message">Upload Lead Image</div>
                        @if(isset($record->lead_image))
                            <div class="dz-preview">
                                <div class="dz-image">
                                    <img src="{{asset('storage/app/'.$record->lead_image)}}" alt="">
                                </div>
                                <div class="dz-details">
                                    <div class="dz-filename">
                                        Current Image
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="cell small-6">
                    <div class="image-dropzone" data-id="{{$record->id}}" data-name="background_image">
                        <div class="dz-message"><span class="lnr lnr-cloud-upload"></span></div>
                        <div class="dz-message">Upload Background Image</div>
                        @if(isset($record->background_image))
                            <div class="dz-preview">
                                <div class="dz-image">
                                    <img src="{{asset('storage/app/'.$record->background_image)}}" alt="">
                                </div>
                                <div class="dz-details">
                                    <div class="dz-filename">
                                        Current Image
                                    </div>
                                </div>
                            </div>
                        @endif
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
                },
                sending: function(file, xhr, formData){
                    formData.append('id', id);
                }
            });
        });
    });
</script>
@endpush