
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SignIn</title>

    <link rel="shortcut icon" href="{{asset('assets/images/fav.jpg')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/all.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="h-100">
    <div class="container-fluid full-bg h-100">
        <div class="container h-100">
            <div class="row no-margin h-100">
                <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                        
                        <div class="tab-content w-100" id="myTabContent">
                            <div class="tab-pane   fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
                                <div class="login-tab">
                                    <h3>User login</h3>
                                    <form action="/signin" method="post"> 
                                        <div class="form-row">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input placeholder="Enter Username" class="form-control form-control-sm" name="email" type="email" required="true">
                                        </div>
                                       
                                        <div class="form-row">
                                          
                                           <input placeholder="Enter Password" class="form-control form-control-sm" name="password" type="password" required="true">
                                        </div>
                                       
                                        <div class=" forget">
                                          
                                            <p> <a href="/signup">SignUp</a></p>
                                            <button class="btn btn-success btn-sm" type="submit">Login</button>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="social-login">
                                    <button class="btn btn-danger">
                                        <i class="fab fa-google"></i> Login Using Google
                                    </button>
                                    <button class="btn btn-primary">
                                        <i class="fab fa-facebook-f"></i> Login Using Facebook
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>

    </div>
</body>

<script href="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script href="{{asset('assets/js/popper.min.js')}}"></script>
<script href="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script href="{{asset('assets/js/script.js')}}"></script>


</html>