<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/SIMS/css/boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/SIMS/css/mycss.css" rel="stylesheet">


    <title>Login</title>
</head>

<body>


    <div class="mainDiv">
        <div class="innerDiv" id="innerdiv">

            <div class="container">
                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <label class="text-info" id="lblrollno">
                            <h4>Roll No.</h4>
                        </label>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <input class="loginrow" type="text" id="txtrollno">
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <label class="text-info">
                            <h4>Password</h4>
                        </label>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <input class="loginrow" type="password" id="txtpassword">
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <div style="width:100%; display:flex; justify-content:end">
                            <button class="btn btn-success" id="btnloggin">LOGIN</button>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>

            <label id="lblerrmessage" style="background: red;">

            </label>

        </div>
    </div>


    <script src="/SIMS/css/boostrap/js/bootstrap.bundle.min.js"></script>
    <script src="/SIMS/jquerry/jquerry.js"></script>
    <script src="/SIMS/userinterface/slogin.js"></script>


</body>

</html>