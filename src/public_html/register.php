<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stalkify Register</title>

    <link href="assets/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="assets/lib/bootstrap/bootstrap.min.js"></script>
    <link href="assets/css/authform.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="assets/js/stalker.js"></script>
</head>
<body>
    <div class="container-fluid page-fill noverflow bg-grad">
        <div class="row align-items-center page-fill">
            <div class="col-sm-12 col-md-6 order-sm-2 order-md-1 order-2 l-register ">
                <div class="text-center font-weight-light c-did reg-peep">
                    <h5 class="text-d-green">Know Yourself</h5>
                    <p class="text-light">Begin keeping track of your updated Spotify listening habits, your favorites,
                        and statistics!</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 order-sm-1 order-md-2 order-1 r-register">
                <div class="row align-items-center register-wrap">
                    <div class="register-form c-did">
                        <div class="form">
                            <div id="signup">
                                <h5>Sign Up</h5>
                                <form action="registerex.php" method="post">
                                    <div class="top-row">
                                        <div class="field-wrap">
                                            <input name="firstname" placeholder="First Name" type="text" required autocomplete="off" />
                                        </div>
                                        <div class="field-wrap">
                                            <input name="lastname" placeholder="Last Name" type="text" required autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="field-wrap">
                                        <input name="username" placeholder="Username" required autocomplete="off"/>
                                    </div>
                                    <div class="field-wrap">
                                        <input name="email" placeholder="Email" type="email" required autocomplete="off"/>
                                    </div>
                                    <div class="field-wrap">
                                        <input name="password" placeholder="Set a Password" type="password" required autocomplete="off"/>
                                    </div>
                                    <button type="submit" class="button button-block">Get Started</button>
                                    <p id="login"><a href="login.php">Log in?</a></p>
                                </form>
                            </div>
                        </div> <!-- /form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>