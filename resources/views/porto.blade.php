<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link href="/css/style.css" rel="stylesheet" />
    <title>Detail Portfolio</title>
</head>
<body>
    <header class="mastheadporto ">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
           <div class="d-flex justify-content-center">
              <div class="text-center">
                {{-- <p style="color:white">{{$id}}</p> --}}
                <h1 class="mx-auto my-0 text-uppercase">{{$detail[$id-1]['name']}}</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">{{$detail[$id-1]['desc']}}</h2>

                 <a class="btn btn-dark" href="/#portfolio">Back</a>
              </div>
              {{-- buat navbar --}}
              <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">
                 <nav id="navbar" class="navbar">
                    <ul>
                       <li><a class="nav-link scrollto" href="/">Home</a></li>
                       <li><a class="nav-link scrollto " href="/#about">About</a></li>
                       <li><a class="nav-link scrollto" href="/#education">Education</a></li>
                       <li><a class="nav-link scrollto" href="/#work-experience">Work Experience</a></li>
                       <li><a class="nav-link scrollto active" href="/#portfolio">Portfolio</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                 </nav>
              </header>
           </div>
        </div>
     </header>
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
</body>
</html>
