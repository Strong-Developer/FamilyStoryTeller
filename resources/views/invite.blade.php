
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Invite</title>

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
                                    <a href="invite"><button type="button"  class="btn  col-md-12" style="background-color: rgb(0,171,160);border-color:rgb(0,171,160); color:white">INVITE</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="question"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164); color:white">SEND A QUESTION</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="record"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164); color:white">RECOED A MEMORY</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-layer d-flex col-md-12" style="margin-top: 10px">
                    
                    <div class="container">
                        <div class="row">
                             <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">INVITE</h3></div>
                        </div>
                    </div> 
                </div>
                
                <div class="bg-layer d-flex col-md-12" style="text-align: center; margin-bottom: 50px" >
                    <div class="container myshadow" >
                        <div class="row">
                            <div class="col-md-12" style="text-align: center;">
                                <a style="color: #ff5e12;font-size:20px">Invite a collaborator</a> who will be able to log in and work with</br> you to help ask questions.
                                They will also receive copies<br> of any emails received from your storyteller.
                                </br></br>
                                <a style="color:#ff5e12;font-size:20px">Invite a storyteller</a> who will tell you stories of their life.</br>
                                Your book will be based on their answers and any <br> additional memories you add.
                            </div>
                        </div>
                        <div class="row" style="margin-top:30px; margin-bottom:30px">
                            <div class="col-md-6">
                                <button type="button"  class="btn col-md-6" onClick="onInvCol()" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164); color:white">Invite a Collaborator</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button"  class="btn col-md-6" onClick="onInvTel()" style="background-color: rgb(0,171,160); border-color:rgb(0,171,160); color:white" >Invite a Stroyteller </button>                            
                            </div>
                        </div>
                        <div class="row" style="margin-top:30px; margin-bottom:30px">
                            <div class="col-md-6" style="text-align:right">
                                <button type="button"  class="btn col-md-4" style=" background-color: rgb(97,97,97); border-color:rgb(97,97,97); color:white">BACK</button>
                            </div>
                            <div class="col-md-6" style="text-align:left">
                                <button type="button"  class="btn col-md-4" onClick="onChoose()" style="background-color: rgb(0,171,160); border-color:rgb(0,171,160); color:white" >CHOOSE</button>                            
                            </div>
                        </div>
                    </div>                     
                </div>
                 <!-- The Modal -->
                <div class="modal" id="modalBox" style="background-color: rgba(0,0,0,0.4);">
                    <div class="modal-dialog" style="max-width:700px">
                        <div class="modal-content" style="margin-top: 25%" >
                                <div class="bg-layer d-flex col-md-12" style="margin-top: 10px">                    
                                    <div class="container-fluid" style="margin-top: -10px">
                                        <div class="row">
                                            <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">INVITE</h3></div>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="container">
                                    <div class="row" style="text-align: center">
                                        <p id="invited" style="font-size:20px; margin-top: 20px">Invite a Storyteller</p>
                                        <div class="container" style="margin-top: 15px">
                                            <div class="row">
                                                <div class="col-md-6" style="text-align:left; ">
                                                    <div class="container">
                                                        <p >First Name: </p>
                                                        <input type="text" id="txtFName" style="width:inherit">
                                                        <p style="margin-top:15px; ">Phone: </p>
                                                        <input type="text" id="txtPhone" style="width:inherit">
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="text-align:left; ">
                                                <div class="container">
                                                    <p >Last Name: </p>
                                                    <input type="text" id="txtLName" style="width:inherit">
                                                    <p style="margin-top:15px; ">Email: </p>
                                                    <input type="text" id="txtEmail" style="width:inherit">
                                                </div>
                                                </div>
                                            </div>
                                            <hr style="height:1px;border-width:0;color:gray;background-color:rgb(0,171,160); margin-top:30px;">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:30px; margin-bottom:30px; text-align:center ">
                                        <div class="col-md-6">
                                            <button type="button"  class="btn col-md-6" onClick="onBack()" style=" background-color: rgb(97,97,97); border-color:rgb(97,97,97); color:white" >Back</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" id="btn_send"  class="btn col-md-6" style="background-color: rgb(0,171,160); border-color:rgb(0,171,160);"  >Send</button>                            
                                        </div>
                                    </div>
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
    var sel_type = 0;
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#btn_send").click(function(){
            
            var first_name = document.getElementById("txtFName").value;
            var last_name = document.getElementById("txtLName").value;
            var email = document.getElementById("txtEmail").value;
            var phone = document.getElementById("txtPhone").value;      
            $.ajax({
                url: "invite/sendmail",
                type: "POST",
                dataType: 'json',
                data:{
                    'first_name':first_name,
                    'last_name':last_name,
                    'email':email,
                    'phone':phone,
                    'type':sel_type
                },
                success: function (data) {                   
                    if(data.status == "success"){
                        alert("Send E-Mail Success!");
                        document.getElementById("modalBox").style.display = "none";
                        document.getElementById("txtFName").value="";
                        document.getElementById("txtLName").value="";
                        document.getElementById("txtEmail").value="";
                        document.getElementById("txtPhone").value="";
                        return;
                    } else if(data.status == "exist"){
                        alert("Email already exists!");                        
                    }
                }
            });
        });
    });
    
    function onInvCol() { 
        document.getElementById("invited").innerHTML = "Invite a Collaborator";
        sel_type = 0;
    }

    function onInvTel() {
        document.getElementById("invited").innerHTML = "Invite a Storyteller";
        sel_type = 1;
    }

    function onChoose() {
        document.getElementById("modalBox").style.display = "block";   
    }   

    function onBack() {
        document.getElementById("modalBox").style.display = "none";
        document.getElementById("txtFName").value="";
        document.getElementById("txtLName").value="";
        document.getElementById("txtEmail").value="";
        document.getElementById("txtPhone").value="";
    }

   

</script>

</html>