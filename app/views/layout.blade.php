<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>| Ben Bhamdeo</title>

    <meta name="author" content="Benjamin Bhamdeo">
    <meta name="description" content="Hello World! Welcome to my internet based basecamp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image.png" href="css/img/icon.png">
    
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Balthazar'>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/resume.css">
    <link rel="stylesheet" type="text/css" href="css/about-this-site.css">    

  </head>
  
  <body>
    <div class="default-container">    
        
        <div class="header">
            <div class="row-fluid">
                <div class="span4 header-title">
                    <h1>
                        <a href="/">BENJAMIN BHAMDEO</a>
                    </h1>
                </div>
                <div class="span4 header-menu">
                    <nav>
                        <ul class="unstyled inline">
                            <li>
                                <a href="about-me">About Me</a>
                            </li>
                            <li>
                                <a href="resume">Résumé</a>
                            </li>
                            <li>
                                <a href="stuff-i-like">Stuff I like</a>
                            </li>
                            <li>
                                <a href="http://www.benbhamdeo.com">WordPress</a>
                            </li>
                            <li>
                                <a href="get-in-touch">Get In Touch</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="body">
            @yield('home-content')
            @yield('about-me-content')
            @yield('resume-content')
            @yield('stuff-i-like-content')
            @yield('get-in-touch-content')
            @yield("about-this-site-content")
        </div>

        <div class="footer">
            <div class="footer-text"> Designed and Maintained by Benjamin Bhamdeo © 2013 || :D || 
                <a href="about-this-site">About this Site</a>
            </div>
        </div>

    </div>

    <!-- Load JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>  
  </body>

</html>