<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="theme-color" content="#2b2b2b" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{url('/css/style.css')}}" />

        <title>khozam</title>
    </head>

    <body>
        <div id="page" class="hfeed site">
            <!--           start content-->
            <div class="main-container">
                <main class="main wrapper">



                    <div class="hearder-section">
                        
                    </div>

                    <!-- contactUs-section -->
                    <div class="contactUs-section padding-0" id="contect-section">
                        <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                                <div class="Video col-lg-12 col-md-12" style="padding: 0;">
                                    <div style="height: 100%;" class="video-box">
                                        <video width="100%" height="100%" controls loop>
                                            <source src="{{asset('/img/WhatsApp Video 2021-02-13 at 12.33.11 AM.mp4')}}" type="video/mp4" />
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="justify-content: center;">
                                <div class="col-lg-6 col-md-12">
                                    <div class="contactUs-box">
                                        <h2 class="contactUs-title">
                                            Submit your data
                                        </h2>
                                        <form action="{{route("users.store")}}" method="post" class="contactUs-form">
                                        @csrf
                                            <div class="form-group">
                                                <input type="text" name="your-Name" id="your-Name" class="form-control" placeholder="Name" aria-describedby="helpId" value="{{old('your-Name')}}" />
                                            </div>
                                            <label class="text-danger"> {{$errors->first("your-Name")}}</label>
                                            <div class="form-group">
                                                <input type="text" name="your-Phone" id="your-Phone" class="form-control" placeholder="Mobile Number" aria-describedby="helpId" value="{{old('your-phone')}}" />
                                            </div>
                                            <label class="text-danger"> {{$errors->first("your-Phone")}}</label>

                                            <div class="form-group">
                                                <input type="text" name="your-email" id="your-email " class="form-control" placeholder="Email" aria-describedby="helpId" value="{{old('your-email')}}" />
                                            </div>
                                            <label class="text-danger"> {{$errors->first("your-email")}}</label>

                                            <div class="form-group">
                                                <select name="select-project" class="select-style" id="select-project" value="{{old('select-project')}}">
                                                    <option value="" selected disabled>-- Select the unit type --</option>
                                                    <option value="1Bedroom">Standalone</option>
                                                    <option value="2Bedroom">Twinhouse</option>
                                                    <option value="3Bedroom">Townhouse</option>
                                                    <option value="3Bedroom">apartment</option>
                                                    <option value="3Bedroom">Duplex</option>
                                                    <option value="3Bedroom">Penthouse</option>
                                                </select>
                                            </div>
                                            <label class="text-danger"> {{$errors->first("select-project")}}</label>

                                            <div class="link-box">
                                                <button type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- contactUs-section -->
                </main>
            </div>
            <!--           end content-->

            <!--           start footer-->
            <div class="footer-container">
                <footer class="wrapper">
                    <!-- footer-section -->
                    <div class="footer-section">
                        <div class="container">
                            <div class="row" style="justify-content: space-between;">
                                
                          
                                <div class="col-lg-8 col-md-12">
                                    <div class="footer-box">
                                        <!-- <h3 class="footer-title">
                                            Contact Us
                                        </h3> -->
                                    </div>
                                    <div class="footer-ul-box">
                                        <a href="#" class="hot-line" data-call="19791">
                                            19791
                                        </a>
                                        <div class="sochile-box">
                                            <a href="https://instagram.com/khozam_developments?r=nametag">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="https://www.facebook.com/khozamdevelopment/">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="logo-box">
                                        <a href="./index.html" class="logo-link">
                                            <img src="{{asset('/img/logo2.png')}}" alt="" class="img-fluid" />
                                            <p>Part Of KHOZAM group since 1960</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-section -->
                </footer>
            </div>
            <!--           end footer-->
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="{{asset('/js/script.js')}}"></script>


    </body>
</html>
