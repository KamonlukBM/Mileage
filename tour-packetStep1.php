<!DOCTYPE html>
<html lang="en">

<head>
    <!--<link rel="shortcut icon" href="images/favicon.ico">-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="เว็บสำหรับเว็บไซต์ธุรกิจ">
    <meta name="keyword" content="เว็บสำหรับเว็บไซต์ธุรกิจ">
    <meta name="author" content="เว็บสำหรับเว็บไซต์ธุรกิจ">

    <title> Mileageair </title>


    <!-- ฟอนด์ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- ฟอนด์ -->

    <!-- ทำอนิเมชั่น -->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!-- ทำอนิเมชั่น -->

    <!-- ทำ animation (best service)  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- ทำ animation (best service)  -->

    <link href="css/icofont.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



    <link rel="stylesheet" href="css/coreNavigation-1.1.3.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/custom.css" />


    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">


    <link href="css/header.css" rel="stylesheet">

    <link href="css/tour-packetStep1.css" rel="stylesheet">


    <!-- tab -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- tab -->


    <link href="css/slick.min.css" rel="stylesheet">
    <link href="css/slick-custom.css" rel="stylesheet">

    <link href="css/footer.css" rel="stylesheet">

    <!-- icon ปุ๋ม -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icon ปุ๋ม -->

    <!-- button -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- button -->

    <!-- slide card -->
    <!-- ---------------------JAVASCRIPT------------------------ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <!-- --------------------------CSS------------------------------------- -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/css/tom-select.css" rel="stylesheet">
    <!-- slide card -->

    <!------ link icon วงกลม ---------->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ link icon วงกลม ---------->

    <!------ link box hongkong ---------->
    <link hrel="stylesheet" type="text/css" href="main.css">
    <!------ link box hongkong ---------->


</head>


<body>

    <?php include("header.php"); ?>

    <main>


        <section id="travel-tour-add2" class="bg-parallax" style="background:url(images/tl4.png) no-repeat center center; background-size:cover;">

            <div data-aos="fade-down-right">
                <div class="text-travel-tour-article-h">
                    <p>
                        Fix Disney & The City 3 วัน 2 คืน ในเมืองและดิสนีย์ พร้อมบัตรสวนสนุก 1 วัน
                    </p>
                </div>
                <div class="text-travel-tour-article-d">
                    <p><i class="fas fa-plane"></i> โดยสายการบินฮ่องกงแอร์ไลน์</p>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <section id="step-pack" class="container">
            <div class="step-packet">
                <ul id="progressbar">
                    <li class="this">
                        <label class="a">1</label>
                        <label class="b"><i class="fas fa-check"></i></label>
                        วันเดินทาง
                    </li>
                    <li><label class="a">2</label>
                        <label class="b"><i class="fas fa-check"></i></label>
                        ระบุเที่ยวบิน
                    </li>
                    <li><label class="a">3</label>
                        <label class="b"><i class="fas fa-check"></i></label>
                        สำรองห้องพัก
                    </li>
                    <li><label class="a">4</label>
                        <label class="b"><i class="fas fa-check"></i></label>
                        ข้อมูลติดต่อ
                    </li>
                </ul>
            </div>

            <div class="flight-detail">
                <div class="text-h-flight">
                    <p>รายละเอียดเที่ยวบิน</p>
                </div>
                <div class="form-tic">
                    <div class="select-tic" id="myDIV">
                        <button class="button button2 active"> Round-trip </button>
                        <button class="button button2"> มีตั๋วแล้ว </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>จำนวนผู้เดินทาง <span>(จำนวนรวมทุกท่าน ผู้ใหญ่ เด็ก และเด็กทารก)</span></label>
                            <input type="text" class="form-control" style="width: 50%;">
                        </div>
                    </div>
                    <p>เที่ยวบินขาไป</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>เส้นทาง</label>
                            <input type="text" class="form-control" placeholder="กรุงเทพฯ - สหรัฐอเมริกา">
                        </div>
                        <div class="col-sm-4">
                            <label>สายการบิน</label>
                            <input type="text" class="form-control" placeholder="เอมิเรตส์แอร์ไลน์ (EK)">
                        </div>
                        <div class="col-sm-4">
                            <label>ไฟล์การเดินทาง</label>
                            <input type="text" class="form-control" placeholder="CX617">
                        </div>
                        <div class="col-sm-4">
                                <label>วันเดินทาง <span>(เที่ยวบินขาไป)</span></label>
                                <input type="date" class="form-control" placeholder="">
                            </div>
                    </div>
                    <hr>
                    <p>เที่ยวบินขากลับ</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>เส้นทาง</label>
                            <input type="text" class="form-control" placeholder="กรุงเทพฯ - สหรัฐอเมริกา">
                        </div>
                        <div class="col-sm-4">
                            <label>สายการบิน</label>
                            <input type="text" class="form-control" placeholder="เอมิเรตส์แอร์ไลน์ (EK)">
                        </div>
                        <div class="col-sm-4">
                            <label>ไฟล์การเดินทาง</label>
                            <input type="text" class="form-control" placeholder="CX617">
                        </div>
                        <div class="col-sm-4">
                                <label>วันเดินทาง <span>(เที่ยวบินขากลับ)</span></label>
                                <input type="date" class="form-control" placeholder="">
                            </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href=""><button class="button1">ย้อนกลับ</button></a>
                        <a href="tour-packetStep2.php"><button class="button3">ต่อไป</button></a>
                    </div>
                </div>
            </div>
        </section>


        <section id="sec-time-price" class="bg-parallax" style="background:url(images/t1.jpg) no-repeat center center; background-size:cover;">
            <div class="container">
                <div class="text-tt-time-price">
                    <p>
                        ประหยัดเวลา และประหยัดเงิน!
                    </p>
                </div>
                <div class="text-tt-time-price2">
                    <p>
                        เพียงซื้อแพ็กเกจทัวร์กับ Mileageair
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="w3-container w3-center">
                        <div class="but-contact-us">
                            <button class="button button25"> ติดต่อสอบถาม </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="sec-foot-footer">
            <div class="container">
                <div class="row">
                    <div data-aos="zoom-in">
                        <div class="col-lg-4">
                            <div class="w3-container w3-center">
                                <div class="icon-footer1">
                                    <i class='fas fa-map-marker-alt' style="font-size:30px ;"></i>
                                </div>
                            </div>
                            <br>
                            <div class="text-footer-h">
                                <p>
                                    บริษัท ไมล์เลจแอร์ แอนด์ ทราเวล จำกัด
                                </p>
                            </div>
                            <div class="text-footer-detail">
                                <p>
                                    1338/943 โครงการศุภาลัย พรีมา ธิวา ถนน พระรามมที่ 3 แขวงช่องนนทรี เขตยานนาวา
                                    กรุงเทพมหานคร 10120
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="w3-container w3-center">
                                <div class="icon-footer2">
                                    <i class='fas fa-phone-alt'></i>
                                </div>
                            </div>
                            <br>
                            <div class="text-footer-h2">
                                <p>
                                    ติดต่อเรา
                                </p>
                            </div>
                            <div class="text-footer-detail2">
                                <p>
                                    Facebook : <font style="color: #4c4d4f;"> Mileageair </font>
                                </p>
                                <p>
                                    LINE : <font style="color: #4c4d4f;"> @mileageair </font>
                                </p>
                                <p>
                                    TEL : <font style="color: #4c4d4f;"> +662-294-5594 </font>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="w3-container w3-center">
                                <div class="icon-footer3">
                                    <i class='far fa-clock' style="font-size:30px ;"></i>
                                </div>
                            </div>
                            <br>
                            <div class="text-footer-h3">
                                <p>
                                    เวลาและวันทำการ
                                </p>
                            </div>
                            <div class="text-footer-detail3">
                                <p>
                                    09.00 -18.30 น. วันจันทร์ - วันศุกร์
                                </p>
                                <p>
                                    09.00 -14.00 น. วันเสาร์
                                </p>
                                <p>
                                    ปิดทำหาร วันอาทิคย์
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="message"></div>

        <div class="chat-widget" id="chatWidget">

            <!-- chat toggle -->
            <input id="chat-widget-toggle" class="chat-widget-toggle" type="checkbox">

            <!-- chat close button -->
            <label title="close chat" for="chat-widget-toggle" class="chat-widget-button chat-close-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" version="1.1" height="64" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
                    <g>
                        <path fill="#1D1D1B" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z" />
                    </g>
                </svg>
            </label>

            <div class="chat-box">
                <div class="chat-message-box">
                    <!--  chat header -->

                    <h1 class="chat-title">
                        <span class="chat-title-primary">แชทกับ เที่ยวฮ่องกง ไปกับไมล์เลจ</span>
                        <span class="chat-title-sub"> แพ็คเกจทัวร์ ถูกและคุ้มที่สุด</span>
                        <span class="chat-title-sub2"> ติดต่อผ่านเพจ Facebook</span>
                    </h1>
                    <button class="button button30"> ติดต่อผ่านเพจ Facebook </button>
                    <span class="chat-title-sub3"> ติดต่อทาง LINE </span>
                    <button class="button button31"> ติดต่อผ่านเพจ Facebook </button>

                </div>
            </div>

            <!-- chat open button -->
            <label title="open chat" for="chat-widget-toggle" class="chat-widget-button chat-open-button">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <g>
                        <path d="M54.072,2.535L19.93,2.465c-3.27,0-5.93,2.66-5.93,5.93v3.124l26.065-0.054c4.377,0,7.935,3.557,7.935,7.929v21.142   c0,0.634-0.083,1.248-0.224,1.84l3.484,3.833c0.193,0.213,0.464,0.327,0.74,0.327c0.121,0,0.243-0.021,0.36-0.067   c0.386-0.148,0.64-0.52,0.64-0.933v-10h1.07c3.27,0,5.93-2.66,5.93-5.93V8.465C60,5.195,57.34,2.535,54.072,2.535z" />
                        <path d="M40.069,13.465L5.93,13.535c-3.27,0-5.93,2.66-5.93,5.93v21.141c0,3.27,2.66,5.93,5.929,5.93H12v10   c0,0.413,0.254,0.784,0.639,0.933c0.118,0.046,0.24,0.067,0.361,0.067c0.276,0,0.547-0.114,0.74-0.327l9.704-10.675l16.626-0.068   c3.27,0,5.93-2.66,5.93-5.93V19.394C46,16.124,43.34,13.465,40.069,13.465z M12,34.449c-2.206,0-4-1.794-4-4s1.794-4,4-4   s4,1.794,4,4S14.206,34.449,12,34.449z M23,34.449c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S25.206,34.449,23,34.449z    M34,34.449c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S36.206,34.449,34,34.449z" />
                    </g>
                </svg>
            </label>
        </div>





    </main>


    <?php include("footer.php"); ?>


    <!-- Swiper JS -->
    <script src="../package/js/swiper.min.js"></script>


    <!-- JS accordion -->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            }
        }
    </script>


    <script>
        function openflight(evt, flightName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(flightName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <!-- JS chat -->
    <script>
        const chatMessages = document.querySelector('.chat-messages');
        const chatMessagesContent = document.querySelector('.chat-messages-content');
        const chatForm = document.querySelector('.chat-form');

        function init() {
            const lastEl = chatMessagesContent.lastElementChild;
            chatMessages.scrollTo(0, lastEl.offsetTop);
        }

        function onChatSubmit(evt) {
            evt.preventDefault();
        }

        init();

        chatForm.addEventListener('submit', onChatSubmit);
    </script>



    <!-- JS tabs -->
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>




    <!-- JS slide card -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: true,
            loop: true,
            centeredSlides: true,
            slideToClickedSlide: true,
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: true,
            loop: true,
            centeredSlides: true,
            slideToClickedSlide: true,
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>


    <!-- js slide ใน block -->
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



    <!-- จำเป็นต้องมีสำคัญ -->

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="js/jquery.js"></script>


    <!--scriptmenu-->
    <script>
        $(document).ready(function() {
            $('.hassub > a').click(function(event) {
                if ($(this).siblings(".submenu").is(":hidden")) {
                    $(".submenu").hide();
                    $(this).siblings(".submenu").fadeIn();
                    $(this).parent('.hassub').removeClass('active');
                    $(this).addClass('active');
                } else {
                    $(".submenu").hide();
                    $('.hassub').removeClass('active');
                }
                event.stopPropagation();
            });
            $('.wrap-btn-close').click(function(event) {
                $(".submenu").hide();
                $('.hassub').removeClass('active');
            });
        });
    </script>


    <!-- ใช้คุมเมนู -->

    <script src="js/coreNavigation-1.1.3.min.js"></script>
    <script>
        $('nav').coreNavigation({
            menuPosition: "right",
            container: false,
            responsideSlide: true, // true or false
            mode: 'sticky',
            onStartSticky: function() {
                console.log('Start Sticky');
            },
            onEndSticky: function() {
                console.log('End Sticky');
            }
        });
    </script>



    <!-- ทำปุ่มกลับขึ้นข้างบนเว็บ -->


    <script type="text/javascript">
        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function() {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function() {
                backToTop();
            });
            $('#back-to-top').on('click', function(e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 2800);
            });
        }
    </script>




    <!-- สไลต์โปรโมชั่น -->
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script>
        $('.carousel-view').slick({
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <!-- button active -->
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("button");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    <!-- ทำทัสกลีนให้สไลด์หลัก -->

    <script src="js/jquery.touchSwipe.min.js"></script>


    <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
    <script type="text/javascript">
        $(document).ready(function() {


            $(".carousel .carousel-inner").swipe({
                swipeLeft: function(event, direction, distance, duration, fingerCount) {
                    this.parent().carousel('next');
                },
                swipeRight: function() {
                    this.parent().carousel('prev');
                },
                threshold: 0,
                // tap: function(event, target) {
                // get the location: in my case the target is my link
                // window.location = $(this).find('.carousel-item.active a').attr('href');
                // },
                //เอา  a ออกถ้าต้องการให้ slide ที่เป็น tag a สามารถคลิกได้
                excludedElements: "label, button, input, select, textarea, .noSwipe"
            });

            $('.carousel .carousel-inner').on('dragstart', 'a', function() {
                return false;
            });

        });
    </script>


    <!-- แบล็คกาว img ของ contact -->
    <script src="js/parallax.min.js"></script>
    <!-- <script src="js/SmoothScroll.min.js"></script> -->



    <!-- ทำ animation (best service)  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- ทำ animation (best service)  -->


    <!-- img -->
    <script src="js/jquery.chocolat.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.view-seventh a').Chocolat();
            $('.view-seventh2 a').Chocolat();
            $('.view-seventh3 a').Chocolat();
        });
    </script>




    <!-- คุมสไลด์ย่อยของเว็บ -->

    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>




    <!-- คุมเเบล็คกาวของเว็บ -->

    <script src="js/parallax.min.js"></script>
    <!-- <script src="js/SmoothScroll.min.js"></script> -->



    <!-- เม้าส์ โหลดไฟล์ด้วยน้ะจ้ะ -->
    <!-- จะแสดงแค่หน้าจอคอม โทรสับมือถือจะไม่รองรับ -->
    <!--<script src="js/functions.js"></script>-->





</body>

</html>