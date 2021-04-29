

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <title>Home </title>
    <link rel="shortcut icon" href="logo1.ico">
    <style>
 h1,p,h4{
      font-family: 'Architects Daughter', cursive;
    }
    



.scrollToTopBtn {
  background-color: black;
  border: none;
  border-radius: 50%;
  color: white;
  cursor: pointer;
  font-size: 16px;
  line-height: 80px;
  width: 80px;
  
  /* place it at the bottom right corner */
  position: fixed;
  bottom: 30px;
  right: 30px;
  /* keep it at the top of everything else */
  z-index: 100;
  /* hide with opacity */
  opacity: 0;
  /* also add a translate effect */
  transform: translateY(100px);
  /* and a transition */
  transition: all .5s ease
}
    
.showBtn {
  opacity: 1;
  transform: translateY(0)
}

.card-check{
 
  width:auto;
  height:400px;
  box-shadow:2px 5px 1px 5px solid red;
}
    </style>
     
</head>

<body>
<?php require 'partials/_nav.php' ?>
    

  


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <h1 class="bg-warning text-center">My Dream Companies</h1>
        <div class="carousel-inner my-0">
          <div class="carousel-item active ">
            <img src="1.jpg"  width="700" height="500" class="d-block w-100" alt="...">
            <div class="carousel-caption rounded-pill d-none d-md-block  bg-secondary">
              <h1 class=" fw-bold">Infosys Pune</h1>
              <p>Infosys is now youth's favorite IT company nowdays</p>
              <a class="btn btn-warning" href="https://www.infosys.com/" role="button">Read More</a>
            </div>
          </div>
          <div class="carousel-item" style="border:black;">
            <img src="2.jpeg" width="600" height="500"class="d-block w-100" alt="TCS PUNE" >
            <div class="carousel-caption rounded-pill d-none d-md-block bg-secondary ">
              <h1 class="  fw-bold ">T.C.S pune</h1>
              <p>TATA consultancy services is now 2nd most famous IT company nowdays</p>
              <a class="btn btn-warning" href="https://www.tcs.com/" role="button">Read More</a>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="wipro.jpg" width="650" height="500" class="d-block w-100" alt="" >
            <div class="carousel-caption rounded-pill d-none d-md-block  bg-secondary my-0">
              <h1 class=" fw-bold">Wipro </h1>
              <p >Wipro is one of the  most famous IT company nowdays</p>
              <a class="btn btn-warning" href="https://www.wipro.com/" role="button">Read More</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>




    <div class="container my-4">

    <h1 class="text-primary text-center" > Technical Blog</h1>
        <div class="row mb-2 ">
            <div class="col-md-6 ">
                <div
                    class="row g-0 card-check border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Programming</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">feb 12</div>
                        <p class="card-text mb-auto">

                            Programmers will still need to learn new languages over the next decade. However, their
                            priority and their employers' priority should be getting a good grasp of the main IDE
                            systems, machine learning and AI, and how 5G will drive new programming language and
                            software applications.
                        </p>
                        <a href="https://hub.packtpub.com/category/programming/" class="btn btn-outline-danger stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="thumb.png" class="bd-placeholder-img" width="200" height="250" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div
                    class="row g-0 card-check border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success"> New language</strong>
                        <h3 class="mb-0">Programming language to learn</h3>
                        <div class="mb-1 text-muted">feb 22</div>
                        <p class="mb-auto">12 New Programming Languages to Learn
                        <p>
                            Elixir.
                            Elm.
                            Go.
                            Dart.
                            Pony.
                            TypeScript.
                            Kotlin.
                            Nim.</p>
                        </p>
                        <a href="https://www.rankred.com/new-programming-languages-to-learn/"
                            class="stretched-link btn btn-outline-danger">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <img src="thumb2.jpg" class="bd-placeholder-img" width="200" height="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center ">
        <div class="card-header bg-light">
          Featured
        </div>
        <div class="card-body">
          <h2 class="card-title text-primary fst-italic"> Developer contact</h2>
          <h3 class="card-text text-danger fst-italic">Know more About developer</h3>
          <a class="btn btn-outline-success"  id="btn" href="aboutme.php"  type="button">Bharat Borude</a>
        </div>
     
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>

  <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item disabled"><a class="page-link" href="index.php">1</a></li>
          <li class="page-item"><a class="page-link" href="about.php">2</a></li>
          <li class="page-item"><a class="page-link" href="contact.php">3</a></li>
          <li class="page-item"><a class="page-link" href="aboutme.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="about.php">Next</a>
          </li>
        </ul>
      </nav>







    <footer class="container">
    
      
     
        <p>© 2020–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

        

<main>
  
  
  <!-- Button on fixed on bottom right corner of the page -->
  <button class="scrollToTopBtn"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
  <script>
  var scrollToTopBtn = document.querySelector(".scrollToTopBtn")
var rootElement = document.documentElement

function handleScroll() {
  // Do something on scroll
  var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
  if ((rootElement.scrollTop / scrollTotal ) > 0.80) {
    // Show button
    scrollToTopBtn.classList.add("showBtn")
  } else {
    // Hide button
    scrollToTopBtn.classList.remove("showBtn")
  }
}

function scrollToTop() {
  // Scroll to top logic
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  })
}
scrollToTopBtn.addEventListener("click", scrollToTop)
document.addEventListener("scroll", handleScroll)
  </script>
</main>


</body>

</html>