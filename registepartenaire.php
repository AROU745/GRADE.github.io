<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>contact</title>
    <link rel="stylesheet" href="regist/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="regist/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="regist/css/styles.css">
    <link rel="stylesheet" href="regist/css/trelyco-login-vertical-horizontal-1.css">
    <link rel="stylesheet" href="regist/css/trelyco-login-vertical-horizontal.css">
</head>

<body>

    <?php include("header.php"); ?>
    <div class="row register-form" style="background-color:antiquewhite; margin:auto; ">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form">
                <h1>Partenaires projets</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Dropdown </label></div>
                    <div class="col-sm-4 input-column">
                        <div class="dropdown"><button class="btn btn-light dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Partenaire </button>

                        </div>
                    </div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">I've read and accept the terms and conditions</label></div><button class="btn btn-light submit-button" type="button">Submit Form</button>
            </form>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>