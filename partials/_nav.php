<script>
function myfunction() {
    alert("Curruntly not Available! Try again Later");
}
</script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
           
            <a class="navbar-brand" href="index.php">  <img src="logo.jpg" style="border-radius: 30px;" width="50px" height="50px" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="about.php">About Prog.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">contact us</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link active" href="aboutme.php">Developer Details</a>
                    </li>
                   
                </ul>
  
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" onclick="myfunction()" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>


