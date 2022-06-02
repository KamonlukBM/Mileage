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
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



    <link rel="stylesheet" href="css/coreNavigation-1.1.3.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/custom.css" />


    <link href="css/product.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">


    <link href="css/header.css" rel="stylesheet">

    <link href="css/main-custom.css" rel="stylesheet">



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

<!------ slide ใน block ---------->
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
</style>
<!------ slide ใน block ---------->

<body>

    <?php include("header.php");?>

    <main>

        <?php include("slide.php");?>


        <div class="container">
            <div class="div1">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="text-tt-box-time">
                            <p>
                                ระยะเวลาการเดินทาง
                            </p>
                            <button class="button button2"> 2 วัน 1 คืน </button>
                            <button class="button button3"> 3 วัน 2 คืน </button>
                            <button class="button button4"> 4 วัน 3 คืน </button>
                            <button class="button button5"> 5 วัน 4 คืน </button>
                            <button class="button button6"> 6 วัน 5 คืน </button>
                            <button class="button button7"> มากกว่า 7 วัน </button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-tt-box-country">
                            <p>
                                เลือกประเทศที่ต้องการ
                            </p>
                        </div>
                        <div class="b-but-country" style="margin-left: -3px;">
                            <img src="https://img.icons8.com/fluency/48/000000/hongkong-circular.png" />

                            <img src="https://img.icons8.com/color/48/000000/singapore-circular.png" />

                            <img src="https://img.icons8.com/fluency/48/000000/china-circular.png" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-tt-package">
                            <p>
                                แพ็กเกจทัวร์
                            </p>
                        </div>
                        <input class="form-control" type="text" placeholder="เลือกแพ็กเกจที่ต้องการ"
                            aria-label="default input example"
                            style="font-size: 13px;font-family: 'Prompt', sans-serif;">
                    </div>
                    <div class="col-lg-3">
                        <div class="text-tt-time-travel">
                            <p>
                                วันเดินทาง
                            </p>
                        </div>
                        <input class="form-control" type="date" aria-label="default input example"
                            style="font-size: 13px;font-family: 'Prompt', sans-serif;">
                    </div>
                    <div class="col-lg-3">
                        <div class="text-tt-time-travel2">
                            <p>
                                วันเดินทาง
                            </p>
                        </div>
                        <input class="form-control" type="date" aria-label="default input example"
                            style="font-size: 13px;font-family: 'Prompt', sans-serif;">
                    </div>
                    <div class="col-lg-3">
                        <button class="button button8"> ค้นหาแพ็กเกจทัวร์ </button>
                    </div>
                </div>
            </div>
        </div>


        <section id="box-slide">
            <div class="container">
                <div class="w3-container w3-center">
                    <div class="back-head">
                        <img src="images/back-h.png" alt="..." style="width: 45%;margin-top: -70px;">
                    </div>
                </div>
                <br><br>
                <div data-aos="zoom-in">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="images/c1.jpg" alt="Card image cap"
                                        style="border-radius: 10px 10px 0px 0px;">
                                    <div class="card-body">
                                        <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                        </p>
                                        <div class="b-but-ton" style="margin-left: -40px;">
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-clipboard-list"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-plane"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hotel"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-bus"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-utensils"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hospital-alt"></i></button>
                                        </div>
                                        <p class="card-time-text mt-lg-2">
                                            <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                            &nbsp;
                                            1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                        </p>
                                        <p class="card-fie-text">
                                            <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                            &nbsp;
                                            สายการบินเจ็ตสตาร์แอร์เวย์
                                        </p>
                                        <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                            มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                        <p class="card-price">
                                            ราคาเริ่มต้นที่ <font
                                                style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                                9,999฿
                                            </font>
                                        </p>
                                        <div class="but-box-slide">
                                            <a href="#">
                                                <button class="button button9"> จองเลย </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="images/c2.jpg" alt="Card image cap"
                                        style="border-radius: 10px 10px 0px 0px;">
                                    <div class="card-body">
                                        <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                        </p>
                                        <div class="b-but-ton" style="margin-left: -40px;">
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-clipboard-list"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-plane"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hotel"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-bus"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-utensils"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hospital-alt"></i></button>
                                        </div>
                                        <p class="card-time-text mt-lg-2">
                                            <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                            &nbsp;
                                            1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                        </p>
                                        <p class="card-fie-text">
                                            <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                            &nbsp;
                                            สายการบินเจ็ตสตาร์แอร์เวย์
                                        </p>
                                        <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                            มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                        <p class="card-price">
                                            ราคาเริ่มต้นที่ <font
                                                style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                                9,999฿
                                            </font>
                                        </p>
                                        <div class="but-box-slide">
                                            <a href="#">
                                                <button class="button button9"> จองเลย </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="images/c3.jpg" alt="Card image cap"
                                        style="border-radius: 10px 10px 0px 0px;">
                                    <div class="card-body">
                                        <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                        </p>
                                        <div class="b-but-ton" style="margin-left: -40px;">
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-clipboard-list"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-plane"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hotel"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-bus"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-utensils"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hospital-alt"></i></button>
                                        </div>
                                        <p class="card-time-text mt-lg-2">
                                            <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                            &nbsp;
                                            1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                        </p>
                                        <p class="card-fie-text">
                                            <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                            &nbsp;
                                            สายการบินเจ็ตสตาร์แอร์เวย์
                                        </p>
                                        <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                            มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                        <p class="card-price">
                                            ราคาเริ่มต้นที่ <font
                                                style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                                9,999฿
                                            </font>
                                        </p>
                                        <div class="but-box-slide">
                                            <a href="#">
                                                <button class="button button9"> จองเลย </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="images/c4.jpg" alt="Card image cap"
                                        style="border-radius: 10px 10px 0px 0px;">
                                    <div class="card-body">
                                        <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                        </p>
                                        <div class="b-but-ton" style="margin-left: -40px;">
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-clipboard-list"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-plane"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hotel"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-bus"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-utensils"></i></button>
                                            <button type="button" class="btn btn-circle btn-lg"><i
                                                    class="fas fa-hospital-alt"></i></button>
                                        </div>
                                        <p class="card-time-text mt-lg-2">
                                            <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                            &nbsp;
                                            1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                        </p>
                                        <p class="card-fie-text">
                                            <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                            &nbsp;
                                            สายการบินเจ็ตสตาร์แอร์เวย์
                                        </p>
                                        <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                            มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                        <p class="card-price">
                                            ราคาเริ่มต้นที่ <font
                                                style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                                9,999฿
                                            </font>
                                        </p>
                                        <div class="but-box-slide">
                                            <a href="#">
                                                <button class="button button9"> จองเลย </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end swiper wrapper-->
                        <br><br><br>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>


        <section id="back-tip" class="bg-parallax"
            style="background:url(images/back-tip.jpg) no-repeat center center; background-size:cover;">
            <div class="container">
                <div data-aos="zoom-out-right">
                    <div class="text-back-tip">
                        <p>
                            ทริปส่วนตัว
                        </p>
                    </div>
                    <div class="text-back-tip2">
                        <p>
                            ให้ไมล์เลจแอร์ช่วยจัด
                        </p>
                    </div>
                    <div class="text-back-tip3">
                        <p>
                            ทริปเฉพาะตัว
                        </p>
                    </div>
                    <div class="text-back-tip4">
                        <p>
                            ให้คุณ
                        </p>
                    </div>
                </div>
                <div class="but-back-tip">
                    <button class="button button10"> จัดทริปส่วนตัวของคุณ </button>
                </div>
            </div>
        </section>


        <section id="sec-box-hongkong">
            <div class="container">
                <div class="w3-container w3-center">
                    <div class="back-head">
                        <img src="images/back-h2.png" alt="..." style="width: 45%;margin-top: 5px;">
                    </div>
                </div>
                <br><br>
                <div class="block-1">

                    <div class="w3-content w3-display-container" style="max-width:800px">
                        <img class="mySlides" src="img_nature_wide.jpg" style="width:100%">
                        <img class="mySlides" src="img_snow_wide.jpg" style="width:100%">
                        <img class="mySlides" src="img_mountains_wide.jpg" style="width:100%">
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
                            style="width:100%">
                            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white"
                                onclick="currentDiv(1)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white"
                                onclick="currentDiv(2)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white"
                                onclick="currentDiv(3)"></span>
                        </div>
                    </div>
                    
                </div>
                <div class="block-2" style="background-image: url('upload/h5.jpg');">
                    <div class="text-block-head2">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail2">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
                <div class="block-3" style="background-image: url('upload/h1.jpg');">
                    <div class="text-block-head3">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail3">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
                <div class="block-4" style="background-image: url('upload/h4.jpg');">
                    <div class="text-block-head4">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail4">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
                <div class="block-5" style="background-image: url('upload/h3.jpg');">
                    <div class="text-block-head5">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail5">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
                <div class="block-6" style="background-image: url('upload/h2.jpg');">
                    <div class="text-block-head6">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail6">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section id="sec-hongkong">
            <div class="container">
                <div class="pak-holiday-text">
                    <p>
                        SVP HOLIDAY
                    </p>
                </div>
                <div class="pak-holiday-text2">
                    <p>
                        แพ็คเกจทัวร์วันหยุด
                    </p>
                </div>

                <br>
                <div data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c1.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-hongkong">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c2.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-hongkong">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c3.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-hongkong">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c4.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-hongkong">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="w3-container w3-center">
                        <div class="but-sec-hongkong2">
                            <a href="#">
                                <button class="button button11"> ดูเพิ่มเติม </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="sec-box-singapore">
            <div class="container">
                <div class="w3-container w3-center">
                    <div class="back-head">
                        <img src="images/back-h3.png" alt="..." style="width: 45%;margin-top: 5px;">
                    </div>
                </div>
                <br><br>
                <div class="block-1"></div>
                <div class="block-2" style="background-image: url('upload/s1.jpg');">
                    <div class="text-block-head2">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail2">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
                <div class="block-3" style="background-image: url('upload/s4.jpg');">
                    <div class="text-block-head3">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail3">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>


            </div>
        </section>



        <section id="sec-singapore">
            <div class="container">
                <div class="sign-pakeage-text">
                    <p>
                        SINGAPORE PACKAGE
                    </p>
                </div>
                <div class="sign-pakeage-text2">
                    <p>
                        เที่ยวสิงคโปร์
                    </p>
                </div>
                <br>
                <div data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c1.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-singapore">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c2.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-singapore">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c3.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-singapore">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c4.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-singapore">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="w3-container w3-center">
                        <div class="but-sec-hongkong2">
                            <a href="#">
                                <button class="button button11"> ดูเพิ่มเติม </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="sec-box-orther">
            <div class="container">
                <div class="w3-container w3-center">
                    <div class="back-head">
                        <img src="images/back-h4.png" alt="..." style="width: 45%;margin-top: 5px;">
                    </div>
                </div>
                <br><br>
                <div class="block-1"></div>
                <div class="block-2" style="background-image: url('upload/o2.jpg');">
                    <div class="text-block-head2">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail2">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
                <div class="block-3" style="background-image: url('upload/o3.jpg');">
                    <div class="text-block-head3">
                        <p>
                            เที่ยวและพักที่ดิสนีย์แลนด์
                        </p>
                    </div>
                    <div class="text-block-detail3">
                        <p>
                            DISNEY PACKAGE
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section id="sec-orther">
            <div class="container">
                <br>
                <div data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c1.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-orther">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c2.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-orther">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c3.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-orther">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="images/c4.jpg" alt="Card image cap"
                                    style="border-radius: 10px 10px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-title"> April Chillout 3 วัน 2 คืน (โปรโมชั่น ประจำเดือนเมษายน)
                                    </p>
                                    <div class="b-but-ton" style="margin-left: -3px;">
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-clipboard-list"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-plane"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hotel"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-bus"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-utensils"></i></button>
                                        <button type="button" class="btn btn-circle btn-lg"><i
                                                class="fas fa-hospital-alt"></i></button>
                                    </div>
                                    <p class="card-time-text mt-lg-2">
                                        <i class='fas fa-calendar' style="color: #6f94dc;"></i>
                                        &nbsp;
                                        1-30 เม.ย. 64 3 วัน 2 คืน (5 ช่วงเดินทาง)
                                    </p>
                                    <p class="card-fie-text">
                                        <i class="fas fa-plane" style="color: #6f94dc;"></i>
                                        &nbsp;
                                        สายการบินเจ็ตสตาร์แอร์เวย์
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน
                                        มาพร้อมกับประสบการณ์อัน ยอดเยี่ยม ได้พักในเมือง 1คืน และพักใน...</p>

                                    <p class="card-price">
                                        ราคาเริ่มต้นที่ <font style="font-size: 20px;font-weight: 600;color: #1940c7;">
                                            9,999฿
                                        </font>
                                    </p>
                                    <div class="but-sec-orther">
                                        <a href="#">
                                            <button class="button button9"> จองเลย </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="w3-container w3-center">
                        <div class="but-sec-orther">
                            <a href="#">
                                <button class="button button12"> ดูเพิ่มเติม </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>




        <section id="sec-partherships">
            <div class="container">
                <div class="img-text-partherships">
                    <img src="upload/p1.jpg" alt="..." style="width:100%;border-radius: 30px 30px 30px 30px;">
                </div>
            </div>
        </section>



        <section id="sec-guidbook">
            <div class="container">
                <div class="w3-container w3-center">
                    <div class="back-head">
                        <img src="images/back-h5.png" alt="..." style="width: 45%;margin-top: 5px;">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div data-aos="fade-right">
                        <div class="col-lg-6">
                            <div class="img-guidbook">
                                <img src="upload/g1.jfif" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="but-sec-guidbook">
                                <a href="#">
                                    <button class="button button13"> highlight </button>
                                </a>
                                <a href="#">
                                    <button class="button button14"> Hong Kong </button>
                                </a>
                                <a href="#">
                                    <button class="button button15"> sightseeing </button>
                                </a>
                            </div>
                            <div class="text-tt-guidbook">
                                <p>
                                    เจาะลึก วัดหวังต้าเซียน (Wong Tai Sin Temple)
                                </p>
                            </div>
                            <div class="text-date-guidbook">
                                <p>
                                    โพสต์เมื่อ 6 กุมภาพันธ์ 2021
                                    &nbsp; |
                                    &nbsp;
                                    <i class="fa fa-eye"></i>
                                    &nbsp;
                                    1400
                                </p>
                            </div>
                            <div class="text-detail-guidbook">
                                <p>
                                    กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน มาพร้อมกับประสบการณ์อันยอดเยี่ยม
                                    ได้พักในเมือง 1 คืน และพักในดิสนีย์ 1 คืน สามารถเลือกโรงแรมได้เองทั้งหมดกิน เที่ยว
                                    ช้อป
                                    ตะลุยสวนสนุก ครบสูตร ใน3วัน 2คืน มาพร้อมกับประสบการณ์อันยอดเยี่ยม ได้พักในเมือง 1
                                    คืน
                                    และพักในดิสนีย์ 1 คืน สามารถเลือกโรงแรมได้เองทั้งหมดกิน เที่ยว ช้อป ตะลุยสวนสนุก
                                    ครบสูตร
                                    ใน3วัน 2คืน มาพร้อมกับประสบการณ์อันยอดเยี่ยม ได้พักในเมือง 1 คืน และพักในดิสนีย์ 1
                                    คืน
                                    สามารถเลือกโรงแรมได้เองทั้งหมด
                                </p>
                            </div>
                            <br>
                            <div class="detail-detail-guidbook">
                                <a href="#">
                                    <p>
                                        อ่านเพิ่มเติม
                                        <i class='fas fa-angle-right'></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div data-aos="fade-left">
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="upload/g1.jpg" alt="Card image cap">
                                <div class="but-sec-guidbook">
                                    <a href="#">
                                        <button class="button button16"> Hong Kong </button>
                                    </a>
                                    <a href="#">
                                        <button class="button button17"> sightseeing </button>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-title"> เจาะลึก วัดหวังต้าเซียน (Wong Tai Sin Temple)
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน 3 วัน 2 คืน
                                        มาพร้อมกับประสบการณ์อันยอดเยี่ยม ได้พักในเมือง 1 คืนและพักในดิสนีย์ 1 คืน
                                        สามารถเลือกโรงแรมได้เองทั้งหมด...</p>

                                    <p class="card-price">
                                        โพสต์เมื่อ 6 กุมภาพันธ์ 2021
                                        <font style="font-size:10px;color: #70778b;float:right;">
                                            <i class="fa fa-eye"></i>
                                            &nbsp;
                                            1400
                                        </font>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="upload/g2.jpg" alt="Card image cap">
                                <div class="but-sec-guidbook">
                                    <a href="#">
                                        <button class="button button18"> Hong Kong </button>
                                    </a>
                                    <a href="#">
                                        <button class="button button19"> sightseeing </button>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-title"> เจาะลึก วัดหวังต้าเซียน (Wong Tai Sin Temple)
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน 3 วัน 2 คืน
                                        มาพร้อมกับประสบการณ์อันยอดเยี่ยม ได้พักในเมือง 1 คืนและพักในดิสนีย์ 1 คืน
                                        สามารถเลือกโรงแรมได้เองทั้งหมด...</p>

                                    <p class="card-price">
                                        โพสต์เมื่อ 6 กุมภาพันธ์ 2021
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="upload/g3.jpg" alt="Card image cap">
                                <div class="but-sec-guidbook">
                                    <a href="#">
                                        <button class="button button20"> Hong Kong </button>
                                    </a>
                                    <a href="#">
                                        <button class="button button21"> sightseeing </button>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-title"> เจาะลึก วัดหวังต้าเซียน (Wong Tai Sin Temple)
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน 3 วัน 2 คืน
                                        มาพร้อมกับประสบการณ์อันยอดเยี่ยม ได้พักในเมือง 1 คืนและพักในดิสนีย์ 1 คืน
                                        สามารถเลือกโรงแรมได้เองทั้งหมด...</p>

                                    <p class="card-price">
                                        โพสต์เมื่อ 6 กุมภาพันธ์ 2021
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="upload/g4.jpg" alt="Card image cap">
                                <div class="but-sec-guidbook">
                                    <a href="#">
                                        <button class="button button22"> Hong Kong </button>
                                    </a>
                                    <a href="#">
                                        <button class="button button23"> sightseeing </button>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-title"> เจาะลึก วัดหวังต้าเซียน (Wong Tai Sin Temple)
                                    </p>
                                    <p class="card-text">กิน เที่ยว ช้อป ตะลุยสวนสนุก ครบสูตร ใน 3 วัน 2 คืน
                                        มาพร้อมกับประสบการณ์อันยอดเยี่ยม ได้พักในเมือง 1 คืนและพักในดิสนีย์ 1 คืน
                                        สามารถเลือกโรงแรมได้เองทั้งหมด...</p>

                                    <p class="card-price">
                                        โพสต์เมื่อ 6 กุมภาพันธ์ 2021
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="w3-container w3-center">
                    <div class="but-sec-guidbook">
                        <a href="#">
                            <button class="button button24"> ดูเพิ่มเติม </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section id="sec-time-price" class="bg-parallax"
            style="background:url(images/t1.jpg) no-repeat center center; background-size:cover;">
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
                                    <i class='fas fa-map-marker-alt'></i>
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
                                    <i class='far fa-clock'></i>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="64" version="1.1" height="64" viewBox="0 0 64 64"
                    enable-background="new 0 0 64 64">
                    <g>
                        <path fill="#1D1D1B"
                            d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z" />
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
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 60 60"
                    style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <g>
                        <path
                            d="M54.072,2.535L19.93,2.465c-3.27,0-5.93,2.66-5.93,5.93v3.124l26.065-0.054c4.377,0,7.935,3.557,7.935,7.929v21.142   c0,0.634-0.083,1.248-0.224,1.84l3.484,3.833c0.193,0.213,0.464,0.327,0.74,0.327c0.121,0,0.243-0.021,0.36-0.067   c0.386-0.148,0.64-0.52,0.64-0.933v-10h1.07c3.27,0,5.93-2.66,5.93-5.93V8.465C60,5.195,57.34,2.535,54.072,2.535z" />
                        <path
                            d="M40.069,13.465L5.93,13.535c-3.27,0-5.93,2.66-5.93,5.93v21.141c0,3.27,2.66,5.93,5.929,5.93H12v10   c0,0.413,0.254,0.784,0.639,0.933c0.118,0.046,0.24,0.067,0.361,0.067c0.276,0,0.547-0.114,0.74-0.327l9.704-10.675l16.626-0.068   c3.27,0,5.93-2.66,5.93-5.93V19.394C46,16.124,43.34,13.465,40.069,13.465z M12,34.449c-2.206,0-4-1.794-4-4s1.794-4,4-4   s4,1.794,4,4S14.206,34.449,12,34.449z M23,34.449c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S25.206,34.449,23,34.449z    M34,34.449c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S36.206,34.449,34,34.449z" />
                    </g>
                </svg>
            </label>
        </div>




    </main>


    <?php include("footer.php");?>



    <!-- Swiper JS -->

    <script src="../package/js/swiper.min.js"></script>



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




    <!-- JS slide card -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
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

    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
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