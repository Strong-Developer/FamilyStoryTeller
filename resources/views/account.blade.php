
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Account</title>

    <link rel="shortcut icon" href="{{asset('assets/images/fav.jpg')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/all.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <img src="{{asset('assets/image/logo.png')}}">
    </div>
    <div class="container-fluid full-bg ">
        <div class="container">            
            <div class="row no-margin" >
                <div class="col-md-12"  style="margin-top: 30px">
                    <a href="/account"><button type="button" class="btn btn-danger col-md-3" style="float: right;">Account</button></a>
                </div> 
                <div class="bg-layer d-flex col-md-12" style="text-align:center center; margin-bottom: 20px;margin-top:50px;" >
                    <div class="container">
                        <div class="row">
                                <div class="col-md-3">
                                    <a href="story"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164); color:white">STORY</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="invite"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164);color:white">INVITE</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="question"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164);color:white">SEND A QUESTION</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="record"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164);color:white">RECOED A MEMORY</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-layer d-flex col-md-12" style="margin-top: 10px">                    
                    <div class="container">
                        <div class="row">
                             <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">Profile</h3></div>
                        </div>
                    </div> 
                </div>
                
                <div class="bg-layer d-flex col-md-12" style="text-align: center; margin-bottom: 50px" >
                    <div class="container myshadow" >
                        
                        <div class="content">
                            <div class="row" style="margin-top: 50px; ">
                                <div class="col-md-4"><p style="font-size: 20px">Name:</p></div>
                                <div class="col-md-7"><input type="text" id = "accname" class="form-control" id="name" name="name" value="{{$user->name}}"/></div>
                        
                                <div class="col-md-4"><p style="font-size: 20px">Phone Number:</p></div>
                                <div class="col-md-7"><input type="text" id = "accphone" class="form-control" id="name" name="name" value="{{$user->phone}}"/></div>
                        
                                <div class="col-md-4"><p style="font-size: 20px">Email address:</p></div>
                                <div class="col-md-7"><input type="text" id = "accmail" class="form-control" id="name" name="name" value="{{$user->email}}"/></div>
                        
                                <div class="col-md-4"><p style="font-size: 20px">Password:</p></div>
                                <div class="col-md-7"><input type="text" id = "accpass" class="form-control" id="name" name="name" value=""/></div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px">
                            <div class="col-md-1"></div>
                            <div class="col-md-5" style="text-align:left"><p style="font-size: 25px">Current Project:</p></div>
                        </div>
                        <div class="row" style="margin-top: 30px">
                            <div class="col-md-4">Working book Title:</div>
                            <div class="col-md-7"><input type="text"  id = "booktitle" class="form-control" id="name" name="name"/></div>
                       
                            <div class="col-md-4">StoryTellers:</div>
                            <div class="col-md-7"><input type="text" id = "storytellers" class="form-control" id="name" name="name"/></div>
                       
                            <div class="col-md-4">Contributors:</div>
                            <div class="col-md-7"><input type="text" id = "contributors" class="form-control" id="name" name="name"/></div>
                        
                            <div class="col-md-4">Status:</div>
                            <div class="col-md-7"><input type="text" id = "status" class="form-control" id="name" name="name"/></div>
                        </div>

                        <div class="row" style="margin-top:30px; margin-bottom:30px">
                            <div class="col-md-6" style="text-align:right">
                                <button type="button"  class="btn btn-default col-md-4" style="background-color: rgb(97,97,97);border-color:rgb(97,97,97);color:white">BACK</button>
                            </div>
                            <div class="col-md-6" style="text-align:left">
                                <button type="button"  class="btn  col-md-4" id="btnprofile" style="background-color: rgb(0,171,160);border-color:rgb(0,171,160);color:white">UPDATE</button>
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="bg-layer d-flex col-md-12" style="margin-top: 10px">
                    
                    <div class="container">
                        <div class="row">
                             <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">ACCOUNT INFO</h3></div>
                        </div>
                    </div> 
                </div>
                <div class="bg-layer d-flex col-md-12" style="text-align: center; margin-bottom: 50px" >
                    <div class="container myshadow" >                       
                        
                        <div class="row" style="margin-top: 50px">                            
                            <div class="col-md-2"></div>
                            <div class="col-md-4"><p style="font-size: 20px">Next Payment:</p></div>
                            <div class="col-md-4"><input type="date" class="form-control" id="name" name="name"/></div>
                            <div class="col-md-2"></div>                            
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-2"></div>
                            <div class="col-md-4"><p style="font-size: 20px">Next Payment:</p></div>
                            <div class="col-md-4"><input type="date" class="form-control" id="name" name="name"/></div>
                            <div class="col-md-2"></div>     
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-1"></div>
                            <div class="col-md-6" style="text-align:left">
                                <a style="font-size: 20px; color:aqua; cursor:pointer">Cancel my subscription:&#62;</a>
                            </div>                            
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-12">
                                <p align="left" style="font-size: 15px; width:80%; margin-left:auto; margin-right:auto">Please be sure you have downloaded all audio files and transcripts before you cancel your account</p>
                            </div>                           
                        </div>                       

                        <div class="row" style="margin-top:30px; margin-bottom:30px">
                            <div class="col-md-6" style="text-align:right">
                                <button type="button"  class="btn btn-default col-md-4" style="background-color: rgb(97,97,97);border-color:rgb(97,97,97);color:white">BACK</button>
                            </div>
                            <div class="col-md-6"style="text-align:left">
                                <button type="button"  class="btn  col-md-4" style="background-color: rgb(0,171,160);border-color:rgb(0,171,160);color:white">UPDATE</button>
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
    
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script href="{{asset('assets/js/popper.min.js')}}"></script>
<script href="{{asset('assets/js/script.js')}}"></script>

<script>
     $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "account/getdata",
            type: "POST",
            dataType: 'json',
            data:{                   
            },
            success: function (data) {  
                $("#booktitle").val(data[0].title);                   
                $("#contributors").val(data[0].contributors);
                $("#status").val(data[0].status);
            }
        });  
        
        $.ajax({
            url: "account/getteller",
            type: "POST",
            dataType: 'json',
            data:{                   
            },
            success: function (data) {                   
                var storytellers = "";
                for (i = 0; i < data.length; i ++) {
                    storytellers += data[i].first_name + ", ";
                }    
                $("#storytellers").val(storytellers);
            }
        });

        $("#btnprofile").click(function(){
            
            var accname = document.getElementById("accname").value;
            var accphone = document.getElementById("accphone").value;
            var accmail = document.getElementById("accmail").value;
            var accpass = document.getElementById("accpass").value;      
            $.ajax({
                url: "account/update",
                type: "POST",
                dataType: 'json',
                data:{
                    'accname':accname,
                    'accphone':accphone,
                    'accmail':accmail,
                    'accpass':accpass,                    
                },
                success: function (data) {                   
                    if(data.status == "success"){
                        alert("Profile Update Success!");
                    } else {
                        alert("Profile Update Failure!");
                    }
                }
            });
        });           
            
    });
</script>


</html>