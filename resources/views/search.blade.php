<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pramanpatra &trade;</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
               
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
    <nav style="margin:0 auto; text-align:center;width:100%">
            <img src="{{asset('images/logo.png') }}" />
    </nav>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="panel panel-primary">
                    <div class="panel-body" id="data">
                        <div class="col-md-4">
                        <h3>{{$certificate->student_name}}</h3>
                            <p> 
                                <b>Rating </b><span class="fa fa-stars"></span> &nbsp;{{$certificate->rating}}  <br />
                            </p>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-striped">
                                <tr><th>Event Name</th><td>{{$certificate->eventname}}</td></tr>
                                <tr><th>Event Venue</th><td>{{$certificate->venue}}</td></tr>
                                <tr><th>Start Date</th><td>{{$certificate->start_date}}</td></tr>
                                <tr><th>End Date</th><td>{{$certificate->end_date}}</td></tr>
                            </table>
                        </div>
                        <img src="/images/verified.png"  style="width:150px; position: absolute;right: 30%;top: 60%;float: right" />
                        <button class="btn btn-primary" onclick="printContent()"> Print Page </button>
                    </div>
                </div>
            </div>
        </div>
        <script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>

        <script >
            function printContent(el){
            var restorepage = $('body').html();
            var printcontent = $('#data').clone();
            
            $('body').empty().html(printcontent);
            
            window.print();
            
            $('body').html(restorepage);
            }
        </script>
    </body>
</html>

