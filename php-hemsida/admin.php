<?php session_start();
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='bootstrap/dist/css/bootstrap.min.css'>

    <!-- Custom stylesheet -->
    <link rel='stylesheet' href='public/assets/css/stylesheet.css'>
    <!--Specific page styling-->


    <!--Specific page styling-->
    <style>
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
            background-image: url('public/assets/img/transparent-4.jpg');
            background-size: cover;
            background-repeat: no-repeat;

        }

        .display-1 {
            color: #16a085;
        }

        .lead {
            color: #c0392b;
        }

        h2 {
            color: #fff;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type='email'] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type='password'] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

/*        .btn-lg {
            border-bottom: 4px solid rgba(11, 92, 162, 0.65);
            border-radius: 6px;
        }*/
    </style>
</head>


<body>

    <nav class='navbar navbar-toggleable-md navbar-inverse bg-inverse'>
        <button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>
        <a class='navbar-brand' href='index.html'><img src='public/assets/img/logo.png' width='30' height='30' alt=''>
  </a>

        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <div class='navbar-nav ml-auto'>

                <ul class='nav nav-pills flex-column flex-sm-row'>
                    <li class='nav-item'>
                        <a class='flex-sm-fill text-sm-center nav-link text-success' href='about.php'>About</a>
                    </li>
                    <li class='nav-item'>
                        <a class='flex-sm-fill text-sm-center nav-link text-info' href='contact.php'>Contact</a>
                    </li>
                    <li class='nav-item'>
                        <a class='flex-sm-fill text-sm-center nav-link active link' href='admin.php'>Admin</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <header class='mt-5'>
        <div class='container text-center'>
            <h1 class='display-1'>Admin page</h1>
            <p class='lead'>This page is only for members, by signing giving you option to optimaze this page</p>
        </div>
    </header>

    <?php
if (isset($_POST['password']) && $_POST['password'] == "james") {
$_SESSION['admin'] = true;}
?>

    <aside>
        <div class='container'>

            <form method='post' action='' class='form-signin'>
                <h2 class='form-signin-heading'>Please sign in</h2>
               <!-- <label for='inputEmail' class='sr-only'>Email address</label>
                <input type='email' id='inputEmail' class='form-control' placeholder='Email address' required autofocus>-->
                <label for='inputPassword' class='sr-only'>Password</label>
                <input type='password' id='inputPassword' class='form-control' placeholder='Password' required>
                <div class='checkbox'>
                    <label style='color:#fff'>
                <input type='checkbox' value='remember-me'> Remember me
            </label>
                </div>
                <button class='btn btn-lg btn-primary btn-block' type='submit'>Logga in</button>
            </form>

        </div>
        <!-- /container -->
    </aside>




    <footer class='footer'>
        <div class='container text-center'>
            <a href='https://plus.google.com/u/0/102873376610745733364' target='_blank'>
    <img src='public/assets/img/Google+.svg' width='30' height='30' alt='Sharing link'>
    </a>
            <span class='text-white'>Copyright &copy; 2017</span>
        </div>
    </footer>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js' integrity='sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n'
        crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' integrity='sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb'
        crossorigin='anonymous'></script>
    <script src='bootstrap/dist/js/bootstrap.min.js'></script>

</body>

</html>