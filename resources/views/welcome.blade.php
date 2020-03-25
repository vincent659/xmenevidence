<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="default.css">
    <title>XMEN-EVIDENCE</title>
</head>
<body>
    <div id="wrapper">

        {{-- Select Users --}}
        <div id="left">
            <div id="signin">
                <div class="logo">
                    <img src="images/logo.png" alt="marvel">
                </div>

                <div class="links">
                    <a class='primary-btn' href="{{ url('/submission') }}">I WANT TO BE A HERO</a>
                </div>
                <div class="or">
                    <hr class="bar">
                    <span>OR</span>
                    <hr class="bar">
                </div>
                <div class="links">
                    <a class='primary-btn' href="{{ url('/admin') }}">I AM X-MAN</a>
                </div>

            </div>
            <footer id="home-footer">
                <p>Copyright &copy; 2020, MARVEL All Rights Reserved</p>
                <div>
                    <a href="#">terms of use</a> | <a href="#">Privacy Policy</a>
                </div>
            </footer>
        </div>

        {{-- About --}}

        <div id="right">
            <div class="showcase">
                <div class="showcase-content">
                    <h1 class="showcase-heading"><strong> So you want to be a hero?</strong></h1>
                    <br>
                    <p class="showcase-text">Come and show us what you really are maybe one day you could save the world with us...</p>
                    <br>
                    <p class="showcase-text"><strong>Let's create the future together</strong></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
