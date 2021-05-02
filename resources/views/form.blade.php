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
    <title>form</title>
</head>
<style>
    body {
        background-image: url("image.png");
        background-repeat: no-repeat;
        background-size: 1303px 665px;
        font-family: 'Open Sans', sans-serif;
    }
    .qr {
        margin-top:220px;
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
        margin-left: 75px;
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
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div>
                <img src="logo.jpeg" alt="Italian Trulli" height ="200px">
            </div>
            <div class="row qr">
                <div class="col-md-6">
                    <img src="qr.png" alt="">
                </div>
                <div class="col-md-6">
                    <p class="way mt-4 mb-0 text-uppercase font-weight-bold">ways</p> 
                    <p class="way mb-0 text-uppercase font-weight-bold">to give:</p>
                    <p class="mb-0">Website</p>
                    <p class="mb-0">Check/Cash</p>
                    <p class="mb-0">planned Giving</p>
                    <p class="mb-0">Text 2 Give:Text 84321</p>
                    <p><<< Scan Me</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h1 class="form-text text-uppercase font-weight-bold mb-4">my pledge</h1>
            <form action="" style="margin-left:92px; font-size: 20px">
                <div class="form-group row">
                    <label for="inputPassword" class="col-form-label text-uppercase">Name</label>
                    <div class="name">
                    <input type="text" name="name" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-form-label text-uppercase">address</label>
                    <div class="address">
                    <input type="text" name="address"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-form-label text-uppercase">city / state / zip</label>
                    <div>
                    <input type="text" name="city_state" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="row">
                    <div class="col-md-6">
                    <label for="inputPassword" class="col-form-label text-uppercase">phone</label>
                        <input class="phone" type="text" name="phone" />
                    </div>
                    <div class="col-md-6">
                    <label for="inputPassword" class="col-form-label text-uppercase">email</label>
                        <input class="email" type="text" name="email" />
                    </div>
                   </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-form-label text-uppercase font-weight-bold">total pledge $</label>
                    <div>
                    <input type="text" name="pledge"/>
                    </div>
                </div>
                <div class="form-group forward-faith">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="inputPassword" class="col-form-label text-uppercase">$</label>
                            <input class="dollar" type="text" name="weekly"/>
                        </div>
                        <div class="col-md-4" style="margin-left:-145px">
                            <label for="inputPassword" class="col-form-label">Weekly $</label>
                            <input class="dollar" type="text" name="monthly" />
                        </div>
                        <div class="col-md-4" style="margin-left:-70px">
                            <label for="inputPassword" class="col-form-label">Monthly $</label>
                            <input class="dollar" type="text" name="other" />
                            <span style="margin-left: -10px">Other</span>
                        </div>
                    </div>
                </div>
                <p class="forward-faith mt-2">I/We wish to give to "Forward in Faith" by means of </p>
                 <div class="row">
                    <p class="mr-3">a gift other then cash.</p>
                    <div class="form-group">
                    <label for="inputPassword" class="">Description</label>
                    <input class="dollar" type="text" name="description" />
                </div>
                 </div>
                 <div class="form-group row">
                    <label for="inputPassword" class="col-form-label">Total $</label>
                    <div>
                    <input class="dollar" type="text" name="total" />
                    </div>
                </div>
                <p class="footer mt-5">1500 W Cowing Dr. Munic, IN 47304 <br>
                Phone: 765-744-6292 . RisingHopeChurch.com <br>
                mhewitt@RisingHopeChurch.com</p>
            </form>
        </div>
    </div>
</div>
</body>
</html>