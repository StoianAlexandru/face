@extends('layouts.app')

@section('content')
    <div class="picture-container">
        {{--<img id="picture" class="picture" src="">--}}
        <img src="{{ asset('img/grup3_n.jpg') }}" alt="image" id="picture">
    </div>
    {{--<a href="#" class="do-img-detect" id="try-it">click</a>--}}
    <a id="try-it" href="#" class="button-try">
        <h1>test</h1>
    </a>
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{----}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@endsection
@push('inline_scripts')
<script>
    /*
     * jQuery Face Detection Plugin
     *
     * More demos and Download:
     *
     * http://facedetection.jaysalvat.com
     *
     */
    $('#try-it').click(function (e) {
        e.preventDefault();

        $('.face').remove();

        $('#picture').faceDetection({
            complete: function (faces) {
                console.log(faces);
                for (var i = 0; i < faces.length; i++) {
                    $('<div>', {
                        'class':'face',
                        'css': {
                            'position': 'absolute',
                            'left':   faces[i].x * faces[i].scaleX + 'px',
                            'top':    faces[i].y * faces[i].scaleY + 'px',
                            'width':  faces[i].width  * faces[i].scaleX + 'px',
                            'height': faces[i].height * faces[i].scaleY + 'px'
                        }
                    })
                        .insertAfter(this);
                }
            },
            error:function (code, message) {
                alert('Error: ' + message);
            }
        });
    });

</script>
{{--<script>--}}
    {{--$('#picture').faceDetection({--}}
        {{--complete: function (faces) {--}}
            {{--console.log(faces[0].x);--}}
{{--//            console.log(faces[0]);--}}
            {{--console.log(faces[0].y);--}}
            {{--console.log(faces[0].width);--}}
            {{--console.log(faces[0].height);--}}
            {{--var marg = 20;--}}

            {{--for (var i = 0; i < faces.length; i++) {--}}
                {{--var left   = (faces[i].x - marg),--}}
                    {{--top    = (faces[i].y - marg),--}}
                    {{--width  = (faces[i].width  + (marg * 2)),--}}
                    {{--height = (faces[i].height + (marg * 2));--}}

                {{--$('<div />', {--}}
                    {{--'class': 'face-img',--}}
                    {{--'css': {--}}
                        {{--'left':   left   * faces[i].scaleX + 'px',--}}
                        {{--'top':    top    * faces[i].scaleY + 'px',--}}
                        {{--'width':  width  * faces[i].scaleX + 'px',--}}
                        {{--'height': height * faces[i].scaleY + 'px'--}}
                    {{--}--}}
                {{--})--}}
                    {{--.appendTo($img.closest('div'));--}}

                {{--var $div = $('<div />', {--}}
                    {{--'class': 'portrait',--}}
                    {{--'css': {--}}
                        {{--'background-image': 'url(' + $img.attr('src') + ')',--}}
                        {{--'background-position': -left + 'px ' + -top + 'px'--}}
                    {{--}--}}
                {{--}).on('click', function(e) {--}}
                    {{--e.preventDefault();--}}

                    {{--$('.portrait').fadeOut('fast', function() {--}}
                        {{--$(this).remove();--}}

                        {{--initFaces();--}}
                    {{--});--}}
                {{--}).appendTo('#portraits');--}}

                {{--(function($div, i) {--}}
                    {{--setTimeout(function() {--}}
                        {{--$div.addClass('animated swing');--}}
                    {{--}, 100 * i);--}}
                {{--})($div, i);--}}
            {{--}--}}
        {{--},--}}
        {{--error: function (code, message) {--}}
            {{--console.log('error');--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}
@endpush
