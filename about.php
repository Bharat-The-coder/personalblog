<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.css">
    <link rel="script" href="bootstrap.js">
    <title>About Programming</title>
    <link rel="shortcut icon" href="logo1.ico">
    
    <style>main{
        font-family: 'Amatic SC', cursive;}
        img{
            border-radius:20%;
        }
        </style>
</head>

<body>

<?php require 'partials/_nav.php' ?>

<main>
    <div class="container my-4">


        <div class="row featurette d-flex justify-content-center align-items-center my-4">
            <div class="col-md-7">
                <h2 class="featurette-heading"> What is c ?
                    <p class="lead"> The C programming language is a computer programming language that was developed to
                        do
                        system programming for the operating system UNIX and is an imperative programming language. ...
                        The
                        language itself has very few keywords, and most things are done using libraries, which are
                        collections of code for them to be reused.</p>
            </div>
            <div class="col-md-5  order-md-1">
                <img src="c.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="400" height="400" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center my-4">
            <div class="col-md-7  order-md-2">
                <h2 class="featurette-heading">What is Cpp?
                    <p class="lead">C++ is a powerful general-purpose programming language. It can be used to develop
                        operating systems, browsers, games, and so on. C++ supports different ways of programming like
                        procedural, object-oriented, functional, and so on. This makes C++ powerful as well as flexible.
                    </p>
            </div>
            <div class="col-md-5">
                <img src="cpp.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="500" height="500" alt="">

            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center mx-4 my-4">
            <div class="col-md-7">
                <h2 class="featurette-heading">What is Java?
                    <p class="lead">The Java programming language was developed by Sun Microsystems in the early 1990s.
                        Although it is primarily used for Internet-based applications, Java is a simple, efficient,
                        general-purpose language. Java was originally designed for embedded network applications running
                        on
                        multiple platforms.</p>
            </div>
            <div class="col-md-5  order-md-1">
                <img src="java.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="500" height="500" alt="">

            </div>

        </div>
    </div>


    <div class="container text-center">
        <h3 class="fst-italic">Click here to Learn Programming</h3>
        <a href="https://www.youtube.com/channel/UCeVMnSShP_Iviwkknt83cww" class="btn btn-danger btn-lg " tabindex="-1" role="button" aria-disabled="true">Go there</a>
    </div>


    <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-center my-4">
            <li>
                <a class="page-link" href="index.php" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="index.php">1</a></li>
            <li class="page-item disabled"><a class="page-link" href="about.php">2</a></li>
            <li class="page-item"><a class="page-link" href="contact.php">3</a></li>
            <li class="page-item"><a class="page-link" href="aboutme.php">4</a></li>

            <li class="page-item">
                <a class="page-link" href="contact.php">Next</a>
            </li>
        </ul>
    </nav>
    </main>
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2020–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
</body>

</html>