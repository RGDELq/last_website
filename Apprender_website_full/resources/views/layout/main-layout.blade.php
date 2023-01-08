
<html>
    <head>
        <meta charset="utf-8">
        <title>Apprender</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/Home.css') }}" rel="stylesheet">


    </head>
    <body>
        <div class="open">
            <div class="layer"></div>
            <div class="layer"></div>
        </div>
        <section>
            <div class="header">
                <ul>
                 <li>
                        <a href="#" class="active">Home</a>
                    </li>
                    <li> 
                        <a href="{{ route('userLogin') }}">Sign in</a>
                    </li>
                    <li> 
                        <a href="{{ route('studentRegister') }}">Sign up</a>
                    </li>
                    <li> 
                        <a href="{{ route('About') }}">About</a>
                    </li>
                     <li> 
               
                </ul> 
            </div>
            <div class="bannerText">
                <h3>Apprender</h3><br>
                <h4>Take your first step to improve your English!</h4>
                <p>
                 Test your English language using modern and  
                 fun techniques proved by specialised techers.
                 Apprender will give you an approximate
                 indication of your English proficiency level. 
                 You can use the result to help you find online 
                 courses or learning content on our website that
                 is appropriate for your English language ability. 
                 </p>
                
            </div>
            <img src="{{ asset('img/Books.png') }}" class="books" style="width:300px; height: 400px;">

            <ul class="sci">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div class="element1"></div>
            <div class="element2"></div>
            <div class="container mt-5">

            
                
            </div>
        </section>
    </body>
</html>
