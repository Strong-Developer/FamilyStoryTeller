
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> SignUp</title>

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
                    <div class="login-box row" style="width: 500px">
                        
                        <div class="tab-content w-100" id="myTabContent">
                            <div class="login-tab">
                                @if ($alarm == 1)
                                <div class="alert alert-danger fade in alert-dismissible show">
                                
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                  </button>
                                  <strong>Already Email exists</strong>
                                </div>
                                @endif
                                <h3>User SignUp</h3>
                                <form action="/signup" method="POST"> 
                                  @csrf
                                    <div class="form-row">
                                        
                                        <input placeholder="Enter Username" class="form-control form-control-sm" name="name" type="text" required="true">
                                    </div>
                                   <div class="form-row">
                                      
                                        <input placeholder="Enter E-Mail" class="form-control form-control-sm" name="email" type="email" required="true">
                                    </div>
                                    <div class="form-row">
                                       <input placeholder="Enter Phone" class="form-control form-control-sm" name="phone" type="text" required="true">
                                    </div>

                                    <div class="form-row">
                                       <input placeholder="Enter Password" class="form-control form-control-sm" name="password" type="password" required="true">
                                    </div>
                                    
                                    <div class=" forget">
                                      
                                        <p> <a href="/signin">Login</a></p>
                                        <button class="btn btn-success btn-sm" type="submit">SignUp</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>>
</body>

<script href="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script href="{{asset('assets/js/popper.min.js')}}"></script>
<script href="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script href="{{asset('assets/js/script.js')}}"></script>


</html>