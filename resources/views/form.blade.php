@extends('app')
@section('css')
    <link href="{{ asset('/css/basic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container dropzone-container">
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/dropzone.min.js'); !!}
    <script>
    $(document).ready ( function(){
        console.log('loading ok');
        var url='{{route('file.index')}}';
        $.ajax({
            url:url
        }).done(function (data){
            console.log(data);
            $('.dropzone-container').html(data);
            Dropzone.discover();
        });

    });
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 10,
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    console.log('File added');
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success",
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>
@endsection