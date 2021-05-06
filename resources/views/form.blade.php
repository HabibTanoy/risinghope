<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link rel="stylesheet" href="css/desktop.css">
    <title>form</title>
</head>
<style>
    .body {
        background-image: url('image/image.png');
        height: 100%;

        /* Center and scale the image nicely */
        background-position: bottom right;
        background-repeat: no-repeat;
        background-size: cover;
    }
    img {
        width: 100%;
        height: auto;
      }
    .qr {
        margin-top:118px;
    }
    .div-form {
        text-align: center;
    }
    .way {
        color: #ff824f;
        font-size:20px;
    }
    .form-text {
        color: #ff824f;
        margin-top: 16px;
        margin-left: 10%;
    }
    .form-edit {
        margin-left:30px; 
        font-size: 20px
    }
    input {
        outline: 0;
        border-width: 0 0 2px;
        border-color: black;
        width: 183%;
        background: none;
    }
    .name {
        outline: 0;
        border-width: 0 0 2px;
        border-color: black;
        width: 43%;
        background: none;
    }
    .address {
        outline: 0;
        border-width: 0 0 2px;
        border-color: black;
        width: 40%;
        background: none;
    }
    .phone {
        outline: 0;
        border-width: 0 0 2px;
        border-color: black;
        width: 77%;
        background: none;
    }
    .email {
        outline: 0;
        border-width: 0 0 2px;
        border-color: black;
        width: 67%;
        background: none;
    }
    .dollar {
        width: 40%
    }
    .form-group {
        margin-bottom: 0rem;
    }
    .footer {
        margin-left:-10px;
        font-size: 20px;
        line-height:23px
    }
    .forward-faith {
        margin-left:-10px;
    }
    .input-group-text{
        color: black;
        background: none;
        border: none;
        font-size: 20px;
    }
    input{
        border: none !important;
        border-bottom: 1px solid black !important;
        background: none !important;
    }
    input:focus{
        outline: none !important;
    }
    .color {
        color: #ff824f;
        line-height: 7px;
        margin-top: -15px;
        font-size: 20px
    }
</style>
<body>
<div class="container-fluid body">
    <div class="row">
        <div class="col-md-4">
            <div>
                <img src="{{\Illuminate\Support\Facades\URL::to('image/logo.png')}}" alt="Italian Trulli" height ="200px">
            </div>
            <div class="font-weight-bold color ml-4">
                <p>"Now to him</p>
                <p>who is able to do</p>
                <p>immeasurably more than all we</p>
                <p>ask or imagine, according to his</p>
                <p>power that is at work within us."</p>
            </div>
            <span class="color ml-4">Eph 3:20</span>
            <div class="row qr">
                <div class="col-md-6">
                    <img class="qr-image" src="{{\Illuminate\Support\Facades\URL::to('image/qr.png')}}" alt="">
                </div>
                <div class="col-md-6 qr-text">
                    <p class="way for-text mt-4 mb-0 text-uppercase font-weight-bold">ways</p>
                    <p class="way for-text mb-0 text-uppercase font-weight-bold">to give:</p>
                    <p class="mb-0 for-text">Website</p>
                    <p class="mb-0 for-text">Check/Cash</p>
                    <p class="mb-0 for-text">planned Giving</p>
                    <p class="mb-0 for-text">Text 2 Give:Text 84321</p>
                    <p><<< Scan Me</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="form-text text-uppercase font-weight-bold">my pledge</h1>
                </div>
                <div class="col-md-6 text-right text-uppercase">
                    <h5 class="mt-4">{{\Carbon\Carbon::now()->format('M-d')." - Dec, 31, ".\Carbon\Carbon::now()->format('Y')}}</h5>
                </div>
            </div>
            @include("pledge.form.fields")
        </div>
    </div>
</div>
</body>
</html>
