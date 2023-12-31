<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>cla</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ URL::asset('css/responsive.css'); }}">
      <!-- fevicon -->
      <link rel="icon" type="image/gif" href="{{ URL::asset('images/fevicon.png'); }}"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ URL::asset('css/jquery.mCustomScrollbar.min.css'); }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong">
      <!-- loader  -->

      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="../images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                        
                              @if (Session::has('userName'))
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="{{ URL('infomation/' . Session::get('userName'))}}">Welcome: {{Session::get('userName')}}</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="{{ URL::asset('/logout'); }}">Logout</a>
                              </li>
                              @else
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="{{url('user-view-login')}}">Login</a>
                              </li>
                              @endif
                           </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->
      <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage col-md-12">
                        <h1 class = "font-weight-bold">Infomation of "{{$data->userName}}"</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                  
                     <div class="row">
                     <form class ="info" method="post" action="{{route('update-infomation')}}">
                        @csrf
                        <div class="md -3">
                            <label class="form-lebel">User ID</label>
                            <input type="text" class="form-control" name="userid" value="{{$data->userID}}" readonly>
                        </div>
                        <div class="md -3">
                            <label class="form-lebel">User Name</label>
                            <input type="text" class="form-control" value="{{$data->userName}}" readonly>
                        </div>
                        <div class="md -3">
                            <label class="form-lebel">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{$data->userFullname}}">
                        </div> 
                        @error('name')
                            <div class = "alert alert-danger" role = "alert"> 
                                {{$message}}
                            </div>
                        @enderror                              
                        <div class="md -3">
                            <label class="form-lebel">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{$data->userAddress}}">
                        </div>
                        @error('address')
                            <div class = "alert alert-danger" role = "alert"> 
                                {{$message}}
                            </div>
                        @enderror                    
                        <div class="md -3">
                            <label class="form-lebel">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{$data->userPhoneNumber}}">
                        </div> 
                        @error('phone')
                            <div class = "alert alert-danger" role = "alert"> 
                                {{$message}}
                            </div>
                        @enderror
                        <div class="col-md-12 margin_bottom1">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('user-view-homepage')}}" class="btn btn-danger" >Back </a>
                        </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="images/logo1.png" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad <br>minim veniam, <br> quisdotempor incididunt r</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li>facebook<br><br>magna aliqua.<br> quisdotempor <br>incididunt ut e </li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

