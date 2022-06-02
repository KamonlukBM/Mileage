    <!-- ทำอนิเมชั่น -->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!-- ทำอนิเมชั่น -->

    <!-- ทำ animation (best service)  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- ทำ animation (best service)  -->



    <!-- slide  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
.mySlides {
    display: none
}

.w3-left,
.w3-right,
.w3-badge {
    cursor: pointer
}

.w3-badge {
    height: 13px;
    width: 13px;
    padding: 0
}

.button {
    background-color: #1940c7;
    border: none;
    color: white;
    padding: 12px 32px;
    text-align: center;
    border-radius: 50px;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    font-family: 'Prompt', sans-serif;
    cursor: pointer;
}

.button2 {
    font-size: 12px;
}

.button2:hover {
    background-color: #ffffff;
    color: #1940c7;
}

.button03 {
    background-color: #f2692b;
    border: none;
    color: white;
    padding: 15px 19px;
    text-align: center;
    border-radius: 78%;
    text-decoration: none;
    display: inline-block;
    float: right;
    margin-right: -76px;
    margin-top: -55px;
    font-family: 'Prompt', sans-serif;
    cursor: pointer;
}

.button03 {
    font-size: 14px;
}
    </style>
    <!-- slide  -->

    <div class="w3-content w3-display-container" style="max-width: 100%;margin-top: -46px;">
        <img class="mySlides" src="images/s1.jpg" style="width: 100%; display: block;">
        <div class="carousel-caption d-none d-md-block">
            <div data-aos="zoom-out-down" data-aos-duration="500" class="aos-init">
                <p style="font-size: 45px;color: #ffff;margin-top: -350px;font-family: 'Open Sans', sans-serif;"> Disney
                    Packages
                </p>
            </div>
            <div data-aos="zoom-out-right" data-aos-duration="500" class="aos-init">
                <p style="font-size: 16px;color: #ffff;font-family: 'Prompt', sans-serif;"> สนุกสนานทั้งครอบครัว </p>
            </div>
            <a href="#">
                <button class="button button2"> ดูแพคเกจ </button>
            </a>
        </div>
        <img class="mySlides" src="images/s2.jpg" style="width: 100%; display: none;">
        <div class="carousel-caption d-none d-md-block">
            <div data-aos="zoom-out-down" data-aos-duration="500" class="aos-init">
                <p style="font-size: 45px;color: #ffff;margin-top: -350px;font-family: 'Open Sans', sans-serif;"> Disney
                    Packages
                </p>
            </div>
            <div data-aos="zoom-out-right" data-aos-duration="500" class="aos-init">
                <p style="font-size: 16px;color: #ffff;font-family: 'Prompt', sans-serif;"> สนุกสนานทั้งครอบครัว </p>
            </div>
        </div>
        <img class="mySlides" src="images/s3.jpg" style="width: 100%; display: none;">
        <div class="carousel-caption d-none d-md-block">
            <div data-aos="zoom-out-right" data-aos-duration="500" class="aos-init">
                <p style="font-size: 45px;color: #ffff;margin-top: -350px;font-family: 'Open Sans', sans-serif;"> Disney
                    Packages
            </div>
            <div data-aos="zoom-out-right" data-aos-duration="500" class="aos-init">
                <p style="font-size: 16px;color: #ffff;font-family: 'Prompt', sans-serif;"> สนุกสนานทั้งครอบครัว </p>
            </div>
        </div>

        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
            style="width:100%">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">❮</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">❯</div>
        </div>
    </div>





    <!-- ทำ animation (best service)  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
AOS.init();
    </script>
    <!-- ทำ animation (best service)  -->


    <!-- slide  -->
    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}
    </script>
    <!-- slide  -->