
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.ico">
    <script src="js/validate.js"></script>
</head>

<body>
<div class="container">
    <div class="row" style="margin-top: 20px;text-align: center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>REGISTRATION FORM</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" class="form-horizontal" action="validate.inc.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="name">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Enter your full name" required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="DOB">Date of Birth:</label>
                            <div class="col-sm-8">
                                <input type="date" max="2010-12-31" class="form-control" name="DOB" required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="college">College:</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="college" pattern=".{2,50}"
                                       placeholder="Enter your college name" required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="city">City:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="city" pattern=".{3,50}"
                                       placeholder="Enter your city name" required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="phone_no">Phone Number:</label>
                            <div class="col-sm-8">
                                <input type="text" onkeypress="return isNumber(event)" class="form-control" name="phone_no" pattern="[0-9]{10}"
                                       placeholder="Enter your phone number" required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Enter email" required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="password">Password:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" pattern=".{5,10}" title="5 to 10 characters" name="password" id="password"
                                       placeholder="Enter password" required="required" onkeyup="checkPass(1);return false;"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="password_confirm">Password Confirmation:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" pattern=".{5,10}" name="password_confirm" id="password_confirm" title="5 to 10 characters"
                                       placeholder="Enter password" required="required" onkeyup="checkPass(2);return false;"/>
                                <span id="pass_match"></span><br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="id_image">College ID Card Upload:</label>
                            <div class="col-sm-8">
                                <input type="file" name="id_image" class="form-control file" id="file"
                                       onclick="document.getElementById('error_file').style.display = 'none';"
                                       onchange="checkFile(this, 2);"required="required" />
                                <div id="error_file"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <input type="submit" value="register" class="form-control btn btn-success"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var isNumber= function(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    };
</script>
</body>

</html>