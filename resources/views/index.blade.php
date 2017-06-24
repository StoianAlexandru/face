<!DOCTYPE html>
<html lang="en">

<head>

    <title>Face recognition</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
</head>

<body>

    <div class="container">
        <div class="row videos">
            <div class="col-lg-6 col-md-6 col-sm-6">
               <video id="videoel" width="400" height="300"></video>
               <canvas id="overlay" width="400" height="300"></canvas>
               <canvas id="reper" width="400" height="300"></canvas>
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p id="analisys"></p>

                <p id="matchdisplay"></p>
            </div>
        </div>
       

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 btns">
               <button class="btn btn-warning scanbtn">Scan my face</button>
               <button class="btn btn-danger trackbtn">Track</button>
            </div> 
        </div>
        <div class="row">
            <p id="positions"></p>
        </div> 
    </div>




    {{--<script src="assets/js/jquery.min.js"></script>--}}
    {{--<script src="assets/js/bootstrap.min.js"></script>--}}
    {{--<script src="assets/js/clmtrackr.min.js"></script>--}}
    {{--<script src="assets/js/model.js"></script>--}}
    {{--<script src="assets/js/scripts.js"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/js2/clmtrackr.min.js') }}"></script>
    <script src="{{ asset('js/js2/model.js') }}"></script>
    <script src="{{ asset('js/js2/scripts.js') }}"></script>
</body>
</html>