<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href= "{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

   
    <!-- Main css -->
    <link rel="stylesheet" href="{{ mix('css/contactus.css') }}">

</head>
<body>

    <div class="main">
        
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Contact Us</h2>
                        <form method="POST" action="/contactus/contact" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name"  placeholder="Your Name"/>
                                <div>{{ $errors->first('name') }}</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                                <div>{{ $errors->first('email') }}</div>

                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="phone" id="phone" placeholder="Your Phone"/>
                                <div>{{ $errors->first('phone') }}</div>

                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <textarea  name="message" id="txtarea" cols="35" rows="7" placeholder="Your message"></textarea>
                                <div>{{ $errors->first('message') }}</div>

                            </div>
                         
                         @csrf
                            <div class="form-group form-button">
                                <input type="submit"  class="form-submit" value="Send"/>
                                <a class="btn btn-info" href="{{url('/')}}">Back</a>
                            </div>
                       
                        </form>
           

                    </div>
                    <div class="signup-image">
                      
                        <figure><img src="{{ asset('images/signup-image.jpg') }}" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

  

    </div>

    <!-- JS -->
   
    <script src= "{{ asset('js/jquery.min.js') }}"></script>

</body>
</html>