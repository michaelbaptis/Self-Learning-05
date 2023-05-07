<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link href="css/style.css" rel="stylesheet" />
   <title>Profile - Michael Baptista</title>
</head>
<body>
   <section id="home">
      <header class="masthead ">
         <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
               <div class="text-center">
                  <h1 class="mx-auto my-0 text-uppercase">Michael Baptista Gozal</h1>
                  <h2 class="text-white-50 mx-auto mt-2 mb-5">I'm a Student, Videographer, Photographer, Designer, and Editor</h2>
                  <a class="btn btn-outline-light" href="#about">Want to know about me?</a>
               </div>
               {{-- buat navbar --}}
               <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">
                  <nav id="navbar" class="navbar">
                     <ul>
                        <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                        <li><a class="nav-link scrollto " href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#education">Education</a></li>
                        <li><a class="nav-link scrollto" href="#work-experience">Work Experience</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                     </ul>
                     <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav>
               </header>
            </div>
         </div>
      </header>
   </section>
   {{-- about --}}
   <section id="about">
      <div id="about" class="paddsection">
         <div class="container">
         <div class="row justify-content-between">

            <div class="col-lg-4 ">
               <div class="div-img-bg">
               <div class="about-img">
                  <img src="assets/me.jpg" class="img-responsive" alt="me">
               </div>
               </div>
            </div>

            <div class="col-lg-7">
               <div class="about-descr">

               <p class="p-heading">Hi everyone!
                  I'm Michael Baptista Gozal.<br>
                  Do you want to know more about me?<br>
                  You've come to the right place! </p>
               <p class="separator">I am a creative college student passionate about videography, photography, and editing. I enjoy collaborating with others on creative projects and believe everyone has something unique to offer. As a flexible and open-minded person, I'm always willing to try new things and take on new challenges. I'm excited to see where my creativity takes me and am eager to keep learning and growing both personally and professionally.</p>

               </div>

            </div>
         </div>
         </div>
         <section class="section services">
            <div class="container">
              <div class="row justify-content-center text-center mb-2">
                <div class="col-5">
                  <h3 class="h3 heading">Fav Things?</h3>
                  <p>This is a few things what i like.</p>
                </div>
              </div>
              <div class="row">
      
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                  <i class="bi bi-card-checklist"></i>
                  <h4 class="h4 mb-2">Read Book</h4>
                  <p>People say that books are the windows to the world, and that's not wrong. <br>
                     By reading a lot of books, we will gain new knowledge and new perspectives.<br>
                     The reason why I love reading books is because books can make me think much more creatively and make me grow. </p>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                  <i class="bi bi-binoculars"></i>
                  <h4 class="h4 mb-2">Watching Movie</h4>
                  <p>Watching is an activity that wastes time.
                     I think this is wrong. <br>
                     It is not entirely to blame, but by watching movies we can learn and think creatively. <br>
                     By watching movies I can also learn videography and editing techniques.</p>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                  <i class="bi bi-brightness-high"></i>
                  <h4 class="h4 mb-2">Enjoy Nature</h4>
                  <p>Enjoying nature is a way for me to be grateful. With so many thoughts and the chaos of the world, 
                     I can calm myself by enjoying nature.<br>
                     Nature is a gift from God given with a myriad of benefits that we may not yet know.</p>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                  <i class="bi bi-calendar4-week"></i>
                  <h4 class="h4 mb-2">Sport</h4>
                  <p>In addition to self-development and serenity, personal health is also very important.
                     I love sports because by exercising, our bodies become stronger and healthier.<br>
                     With exercise, our body and mind will be trained and make us more productive.</p>

                </div>
              </div>
            </div>
          </section>
         </section>
         {{-- education --}}
         <section id="education" class="education">
            <div class="container">
                <div class="section-title">
                    <h2>Education</h2>
                    <p>Want to know about my education? Let's see..</p>
                    <BR>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <h4 class="title"><u>ELEMENTARY SCHOOL</u></h4>
                            <p class="description">Advent Elementery School, Bogor<br><i>2009 - 2015</i></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <h4 class="title"><u>JUNIOR HIGH SCHOOL</u></h4>
                            <p class="description">Junior High School 18, Bogor<br><i>2015-2018</i></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <h4 class="title"><u>HIGH SCHOOL</u></h4>
                            <p class="description">Taruna Terpadu 1 Vocational High School, Bogor<br><i>2018-2021</i></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <h4 class="title"><u>UNIVERSITY</u></h4>
                            <p class="description">Bina Nusantara University, Bachelor Degree<br><i>2021 - NOW</i></p>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         {{-- experience --}}
            <section id="work-experience" class="testimonials">
               <div class="container position-relative">
                       <div class="swiper-wrapper">
                        <div id="exp" class="jumbotron text-center">
                           <h2>Work Experience</h2><br>
                         </div>
                           <div class="swiper-slide">
                               <div class="testimonial-item">
                                   <h3>CV. DPrint Solution</h3>
                                   <h4>Oct 2019 - Jan 2020</h4>
                                   <p>
                                       <i class="bx bxs-quote-alt-left quote-icon-left"></i>Internship at a digital printing company for 4 moth. I work as a printing operator and also design operator.
                                       <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                   </p>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="testimonial-item">
                                   <h3>Taruna Terpadu 1 Vocational High School</h3>
                                   <h4>Jan 2020 - Feb 2020</h4>
                                   <p>
                                       <i class="bx bxs-quote-alt-left quote-icon-left"></i> I interned at my school as an administrative administrator and helped with student data collection and grade allocation for 1 month.
                                       <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                   </p>
                               </div>
                           <div class="swiper-slide">
                               <div class="testimonial-item">
                                   <h3>Concept Art Coffee</h3>
                                   <h4>Jan 2021 - Jun 2021</h4>
                                   <p>
                                       <i class="bx bxs-quote-alt-left quote-icon-left"></i> I did part-time work and full-time work during holidays at this cafe for 6 months. I worked as an admin, drink maker, waiter, and cashier.
                                       <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                   </p>
                               </div>
                           </div>
                       </div>
                       <div class="swiper-pagination"></div>
                   </div>
   
               </div>
            </section>

         {{-- portofolio --}}
         <section id ="portfolio" class="section site-portfolio">
            <div id="portfolio" class="container">
              <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                  <h2>Looking for my portfolio?</h2>
                  <p class="mb-0">Some of the things I've done.</p>
                </div>
              </div>
              <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Chruch</h3>
                      <span>Photography</span>
                    </div>
                    <img id="foto" class="img-fluid" src="assets/Group 2.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Presentation Video</h3>
                      <span>Videography & Editing</span>
                    </div>
                    <img id="foto" class="img-fluid" src="assets/Group 3.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Drophin UI</h3>
                      <span>UI Design</span>
                    </div>
                    <img id="foto" class="img-fluid" src="assets/Group 5.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>My Self</h3>
                      <span>Photography</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 4.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Pocari Sweat Ads</h3>
                      <span>Videography & Editing</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 8.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>BLI Easy Access UI</h3>
                      <span>UI Design</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 7.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Short Movie Project</h3>
                      <span>Videography & Editing</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 11.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Fugemy UI</h3>
                      <span>UI Design</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 6.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Cinematic Project</h3>
                      <span>Videography</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 14.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Self Studio</h3>
                      <span>Photography</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 15.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Street Photography</h3>
                      <span>Photography</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 13.png">
                  </a>
                </div>
                <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#portfolio" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Short Movie Series Project</h3>
                      <span>Videography & Editing</span>
                    </div>
                    <img class="img-fluid" src="assets/Group 12.png">
                  </a>
                </div>
              </div>
            </div>
          </section>
      
          <section id="footer" class="contact-section bg-black">
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.instagram.com/@mike_bptist"><i class="fa-brands fa-instagram"></i></a>
                    <a class="mx-2" href="https://www.youtube.com/@michaelbaptistag4372/featured"><i class="fa-brands fa-youtube"></i></a>
                    {{-- <a class="mx-2" href="https://line.me/michaelbaptis"><i class="fa-brands fa-line"></i></a> --}}
                    <a class="mx-2" href="https://github.com/michaelbaptis"><i class="fab fa-github"></i></a>

                    {{-- <a class="mx-2" href="https://www.gmail.com/@m.b.gozal@gmail.com"><i class="fa-solid fa-inbox"></i></a> --}}
                </div>
          </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Michael Baptista Gozal 2023</div></footer>
       
   <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script>
         $('.navbar a').on('click', function() {
         console.log('test')
         $('.navbar').find('.active').removeClass('active');
         $(this).addClass('active');
      })
      $(document).ready(function(){
         $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > 300) {
               $("#header").addClass("bg-dark bg-opacity-50");
            }
            else{
               $("#header").removeClass("bg-dark bg-opacity-50");  	
            }
         })
         })
   </script>
</body>
</html>