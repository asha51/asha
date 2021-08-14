<?php include 'header.php';?>
<body>

<header>
    <?php include 'navbar.php';?>
</header>

        <!-- top_section Start -->
<section class="top_section">
    <div class="container">
        <div class="row building">
            <div class="col-md-6 col-sm-12 col_img_1" >
                <img src="img/men_logo.png">
            </div>
            <div class="col-md-6 col-sm-12 col_content" >
               <div class="in_content">
                   <h1>Virtually <br><span>Build your </span> <br>House</h1>
                   <button>Build Now</button>
               </div>
            </div>
        </div>
    </div>
</section>
         <!-- top_section End -->

        <!-- services_page Start -->
<section class="services_page" id="services">
    <div class="container">
        <div class="row services">
            <div class="head_service">
                <div class="y"></div>
                <h1><span>We are contact in</span> <br>services </h1>
            </div>
        </div>

        <div class="row row_columns">
            <div class="col-md-4 col-sm-12">
                <div class="in_div">
                    <img src="img/cement.jpeg">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card card1">
                    <i class="fas fa-building"></i>
                    <h3>building</h3>
                    <p>Reference site about Lorem Ipsum, giving information on its origins.</p>
                </div>

                <div class="card card1">
                    <i class="fas fa-swimmer"></i>
                    <h3>Dogging</h3>
                    <p>Reference site about Lorem Ipsum, giving information on its origins.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card card1">
                    <i class="fas fa-star-half-alt"></i>
                    <h3>renovation</h3>
                    <p>Reference site about Lorem Ipsum, giving information on its origins.</p>
                </div>

                <div class="card card1">
                    <i class="fab fa-intercom"></i>
                    <h3>interior</h3>
                    <p>Reference site about Lorem Ipsum, giving information on its origins.</p>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- services_page End -->

        <!-- few_step  Start -->
<section class="few_step">
    <div class="container">
        <div class="row row_step">
            <div class="col-md-6 col-sm-12 col_few">
                <img src="img/cc.png">
            </div>

            <div class="col-md-6 col-sm-12 col_few1">
                <div class="in_content">
                    <div class="flex1">
                        <div class="y">

                        </div>
                    <h1>virtually build your <br> house <span>in few steps</span></h1>
                    </div>
                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>

                    <button class="btn1">build Now</button><button class="btn2">Read more</button>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- few_step  End -->

        <!-- portfolio Start  -->
<section class="portfolio">
    <div class="container">
        <div class="row row_portfolio">
            <div class="col-md-4 col_portfolio">
                <div class="head_service">
                    <div class="y"></div>
                    <h1><span>We are contact in</span> <br>portfolio </h1>
                </div>
                <div class="images_slider">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/2.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control prev" aria-hidden="true"><i class="fas fa-backward"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control next" aria-hidden="true"><i class="fas fa-forward"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col_portfolio1">
                <div class="tab_content">
                    <ul class="tab">
                        <li class="tab-button tablinks active"  onclick="openCity(event, 'all')">
                            All
                        </li>
                        <li class="tablinks" onclick="openCity(event, 'Interior')">Interior</li>
                        <li class="tablinks" onclick="openCity(event, 'Dogging')">Dogging</li>
                        <li class="tablinks" onclick="openCity(event, 'Renovation')">Renovation</li>
                        <li class="tablinks" onclick="openCity(event, 'Building')">Building</li>

                    </ul>

                </div>
                <div id="all" class="tabcontent active">
                <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                    </div>
                </div>



                <div id="Interior" class="tabcontent" style="display: none">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                    </div>


                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                    </div>
                </div>


                <div id="Dogging" class="tabcontent" style="display: none">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                    </div>


                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                    </div>
                </div>



                <div id="Renovation" class="tabcontent" style="display: none">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                    </div>


                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>
                    </div>
                </div>

                <div id="Building" class="tabcontent" style="display: none">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="img/2.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/3.jpg" width="100%">
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img src="img/1.jpg" width="100%">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
        <!-- portfolio End  -->

        <!-- mr_devid Start -->
<section class="mr_devid">
    <div class="container">
        <div class="row row_devid">
            <div class="col-md-6 col-sm-12 col_devid">
                <div class="devid_img">
                    <img src="img/remove_ss.png">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col_devid">
                <div class="in_content">
                   <i class="fa fa-quote-right"></i>
                    <div class="head_service">
                        <div class="y"></div>
                        <h1><span>We are contact in</span> <br>MR. DAVID <span STYLE="font-size: 40px; color: #F2D313">& FAMILY</span> </h1>

                    </div>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown</p>
                </div>
            </div>
        </div>
    </div>
</section>
         <!-- mr_devid End -->

        <!-- blog Start -->
<section class="blog">
    <div class="container">
        <div class="row head_row">
            <div class="col-md-12 col-sm-12">
                <div class="head_service">
                    <div class="y"></div>
                    <h1><span>Follow our</span> <br>Latest blog </h1>

                </div>
            </div>
        </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                        <div class="col-md-6 col-sm-12 col_cor">
                            <div class="blog_in_div">
                                <img src="img/S.jpg">
                                <div class="in_img_div">
                                    <h3>Blog title here</h3>
                                    <p>By Admin / In May</p>
                                    <p>Reference site about Lorem Ipsum, giving information on it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col_cor">
                            <div class="blog_in_div">
                                <img src="img/A.jpg">
                                <div class="in_img_div">
                                    <h3>Blog title here</h3>
                                    <p>By Admin / In May</p>
                                    <p>Reference site about Lorem Ipsum, giving information on it.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col_cor">
                                <div class="blog_in_div">

                                    <img src="img/SS.jpg">
                                    <div class="in_img_div">
                                        <h3>Blog title here</h3>
                                        <p>By Admin / In May</p>
                                        <p>Reference site about Lorem Ipsum, giving information on it.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col_cor">
                                <div class="blog_in_div">
                                    <img src="img/AA.jpg">
                                    <div class="in_img_div">
                                        <h3>Blog title here</h3>
                                        <p>By Admin / In May</p>
                                        <p>Reference site about Lorem Ipsum, giving information on it.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col_cor">
                                <div class="blog_in_div">
                                    <img src="img/SSS.jpg">
                                    <div class="in_img_div">
                                        <h3>Blog title here</h3>
                                        <p>By Admin / In May</p>
                                        <p>Reference site about Lorem Ipsum, giving information on it.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col_cor">
                                <div class="blog_in_div">
                                    <img src="img/AAA.jpg">
                                    <div class="in_img_div">
                                        <h3>Blog title here</h3>
                                        <p>By Admin / In May</p>
                                        <p>Reference site about Lorem Ipsum, giving information on it.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control prev" aria-hidden="true"><i class="fas fa-backward"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control next" aria-hidden="true"><i class="fas fa-forward"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </div>
</section>
        <!-- blog End -->

        <!-- footer Start -->
<footer>
    <div class="container">
        <div class="row row_footer" id="about">
            <div class="col-md-6 col-sm-12 col_footer">
                <div class="flex_about">
                    <div class="y"></div>
                    <h4>About Us</h4>
                </div>
                <div class="img">
                    <img src="img/ultra.png">
                </div>
                <div class="content">
                    <p>Reference site about Lorem Ipsum, giving inform on its origins</p>
                </div>
                <div class="media_icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fas fa-wifi"></i>
                    <i class="fab fa-wikipedia-w"></i>
                    <i class="fab fa-chrome"></i>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col_footer" >
                <div class="flex_about">
                    <div class="y"></div>
                    <h4>get in touch</h4>

                </div>

                <div class="add">
                    <div class="address">
                        <p>Address</p>
                    </div>
                    <div class="address_p">
                        <p>: 127, Swastick char Rasta, Navarangpura, Ahemdabad
                             01234578945 </p>
                    </div>
                </div>


                <div class="add">
                    <div class="address">
                        <p>Mobile </p>
                    </div>
                    <div class="address_p">
                        <p>: +159-357-555, 123456789, 789456123 </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
        <!-- footer End -->

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
</body>
