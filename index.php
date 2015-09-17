<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>AJAX Test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <style>
body {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    </style>
    <script>
$(document).ready(function(e){
    $('#country').on('change keyup paste', function(){
        console.log('new value is ' + $('#country').val());
        $.ajax({
            type: 'GET',
            url: 'suggest.php',
            data: {country: $('#country').val()},
            success: function(json){
                $("#result").empty();
                $.each(json, function(key,val) {
                    $("#result").append('<li class="list-group-item">' + val + '<\/li>');
                });
            },
            dataType: 'json'
            });
    });
    });
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-inline">
                    <div class="input-group" style="width:100%;">
                        <div class="input-group-addon">
                            Country Name
                        </div>
                        <input class="form-control" id="country" placeholder="Write any country name" type="text">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <ul class="list-group" id="result">
                </ul>
            </div>
        </div>
    </div>
</body>
</html>