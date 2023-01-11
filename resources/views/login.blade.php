<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    @include('common_files.header')
    <div class="main-categorious">
        <div class="footer">
            <div class="login-here">
                <div class="login">
                    <p>Login Here</p>
                    <div class="user-info">
                        <form action="{{ url('login-details-submit') }}" method="post">
                            {{ csrf_field() }}
                            <table class="login-1">
                                <tr class="inpt">
                                    <td><span>Username</span></td>
                                    <td><input type="email" name="email"></td>
                                </tr><br>
                                <tr class="inpt">
                                    <td><span>Password</span></td>
                                    <td><input type="text" name="password"></td>
                                </tr>
                                <tr class="logn-btn">
                                    <td></td>
                                    <td><input class="log" type="submit" name="save" value="Login">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-up">
            <div class="sign">
                <p>New to Shop? <a href=""> Sign up</a></p>
                <div class="user-info">
                    <form action="{{ url('signup-details-submit') }}" method="post">
                        {{ csrf_field() }}
                        <table class="login-1">
                            <tr class="inpt-1">
                                <td><span>Full Name</span></td>
                                <td><input type="text" name="name"></td>
                            </tr><br>
                            <tr class="inpt-1">
                                <td><span>Email</span></td>
                                <td><input type="email" name="email"></td>
                            </tr>
                            <tr class="inpt-1">
                                <td><span>Password</span></td>
                                <td><input type="text" name="password"></td>
                            </tr>
                            <tr class="logn-btn">
                                <td></td>
                                <td><input class="log" type="submit" name="save" value="Sign up">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-2">
            <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
        </div>
    </div>
    </div>
</body>

</html>
