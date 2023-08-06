<?php

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--owl carousel-->
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">


    <title>costruzioni_MAB</title>
    <link rel="icon" type="image/x-icon" href="img/logo COSTRUZIONI MAB 1_page-0001.png">
</head>

<body>
    <div>
        <?php
        include("pages/navbar.html");
        ?>
    </div>

    <div class="contatti text-center">
        <h6>CELLULARE:    EMAIL:</h6>
    </div>

    <div class="row">
        <div class="wrapper  col-sm-10 offset-sm-1 col-md-6 offset-md-3 col-lg-8 offset-lg-2">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                    <a href="pages/chi_siamo.html">
                        <img   src="img/logo COSTRUZIONI MAB 1_page-0001.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption ">
                            <button id="carousel-btn1" class="carousel-btn rounded" style="background-color:white;" onmouseover="changeColor('#F1C93B')" onmouseleave="changeColor('white')"><h1>CHI SIAMO?</h1></button>
                        </div>
                    </a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="pages/servizi.html">
                        <img src="img/logo COSTRUZIONI MAB 1_page-0001.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption ">
                            <button id="carousel-btn2" class="carousel-btn rounded" style="background-color:white;" onmouseover="changeColor('#F1C93B')" onmouseleave="changeColor('white')"><h1>SERVIZI</h1></button>
                        </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                    <a href="pages/chi_siamo.html">
                        <img src="img/logo COSTRUZIONI MAB 1_page-0001.png" class="d-block w-100" alt="vaffanculo">
                        <div class="carousel-caption ">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


    <div>
        <?php
        include("pages/carousel.html");
        ?>
    </div>

    <div>
        <?php
        include("pages/footer.html");
        ?>
    </div>













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    <!--owl carousel-->
    <script src="jquery.min.js"></script>
    <script src="owl.carousel.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });
        function changeColor(color){
            const elem1=document.getElementById("carousel-btn1");
            console.log(elem1);
            elem1.style.backgroundColor=color;
            const elem2=document.getElementById("carousel-btn2");
            console.log(elem2);
            elem2.style.backgroundColor=color;

        }

    </script>
</body>

</html>