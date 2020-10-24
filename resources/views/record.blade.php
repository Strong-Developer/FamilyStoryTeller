
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Record</title>

    <link rel="shortcut icon" href="{{asset('assets/images/fav.jpg')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/all.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        button {
            background-color: rgb(97,97,97);
            border-color:rgb(97,97,97);
        }
        button:focus {
            background-color: rgb(0,171,160);
            border-color:rgb(0,171,160);
        }
    </style>
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
                                    <a href="invite"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164); color:white">INVITE</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="question"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164); color:white">SEND A QUESTION</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="record"><button type="button"  class="btn  col-md-12" style="background-color: rgb(0,171,160);border-color:rgb(0,171,160); color:white">RECORD A MEMORY</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-layer d-flex col-md-12" style="margin-top: 10px">
                    
                    <div class="container">
                        <div class="row">
                             <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">RECORD A MEMORY</h3></div>
                        </div>
                    </div> 
                </div>
                
                <div class="bg-layer d-flex col-md-12" style="text-align: center; margin-bottom: 50px" >
                    <div class="container myshadow" >
                        <div class="container" style="margin-top: 30px">
                            <p>Record additional memories yourself so you can add to the story, or sit with your storyteller and answer the question with them.<span style="color: #ff5e12"> This question will be sent to your own phone number.</span></p>
                        </div>
                        <hr style="height:1px;border-width:0;color:gray;background-color:grey; margin-top:20px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Choose a Subject<h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn main_style col-md-10" id="root1" style="color:white" onClick="onFamily()">Family</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn main_style col-md-10" id="root2" style="color:white" onClick="onChild()">Childhood</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn main_style col-md-10" id="root3" style="color:white" onClick="onWork()">Work</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn main_style col-md-10" id="root4" style="color:white" onClick="onTravel()">Travel</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn main_style col-md-10" id="root5" style="color:white" onClick="onWisdom()">Wisdom</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn main_style col-md-10" id="root6" style="color:white" onClick="onRelation()">Relationship</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row" style="margin-top:30px; margin-bottom:30px">
                            <div class="col-md-6" style="text-align:right">
                                <button type="button"  class="btn btn-default col-md-4" style="background-color: rgb(97,97,97);border-color:rgb(97,97,97); color:white" >BACK</button>
                            </div>
                            <div class="col-md-6" style="text-align:left">
                                <button type="button"  class="btn  col-md-4" style="background-color: rgb(0,171,160);border-color:rgb(0,171,160); color:white" id="btn_choose">CHOOSE</button>                            
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- The Modal -->
                <div class="modal" id="modalBox" style="background-color: rgba(0,0,0,0.4);">
                    <div class="modal-dialog" style="max-width:600px">
                        <div class="modal-content" style="margin-top: 200px" >
                                <div class="bg-layer d-flex col-md-12" style="margin-top: 10px">                    
                                    <div class="container-fluid" style="margin-top: -10px">
                                        <div class="row">
                                            <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">RECORD A MEMORY</h3></div>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="container">
                                    <div class="row" style="text-align: center">
                                        <p id="invited" style="font-size:20px; margin-top: 20px">INVITE</p>
                                        <p style="font-size:15px; margin-top: 20px">Type in your own question here or choose from the options below.</p>
                                        <textarea id='txtArea' style="width: 70%; margin-left:auto; margin-right:auto; height:80px; margin-top:10px"></textarea>
                                    </div>
                                    <div class="container" style="text-align:left; margin-top:30px; margin-left:20px">
                                         <div id="quetions">
                                            <!-- <p style="margin-top:20px"><input type="radio" name="sel"> &nbsp;&nbsp; Tell me about your siblings.</p>
                                            <p style="margin-top:20px"><input type="radio" name="sel"> &nbsp;&nbsp; Tell me about something you like to do with family.</p>
                                            <p style="margin-top:20px"><input type="radio" name="sel"> &nbsp;&nbsp; Tell me about a time when your family surprised you in some way.</p>
                                            <p style="margin-top:20px"><input type="radio" name="sel"> &nbsp;&nbsp; What important things did you learn from your parents.</p>
                                            <p style="margin-top:20px"><input type="radio" name="sel"> &nbsp;&nbsp; Where & when your parents born?</p>
                                            <p style="margin-top:20px"><input type="radio" name="sel"> &nbsp;&nbsp; Where did your parents grow up & what was it like?</p>
                                            <p style="margin-top:20px"><input type="radio" name="sel"> &nbsp;&nbsp; Tell me about family gatherings.</p>                                             -->
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:30px; margin-bottom:30px; text-align:center ">
                                        <div class="col-md-6" style="text-align:right">
                                            <button type="button"  class="btn col-md-4" onClick="onBack()"  >Back</button>
                                        </div>
                                        <div class="col-md-6" style="text-align:left">
                                            <button type="button"  class="btn col-md-4" id="btn_send" style="background-color: rgb(0,171,160); border-color:rgb(0,171,160);"  >Send</button>                            
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
    var selCategory = "";
    var selTeller = "";
    var selQuery = "";

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#btn_send").click(function(){      

            var tempText = document.getElementById('txtArea').value;
            if(selQuery!="") { tempText = "" }
            if(tempText == "" && selQuery == "") { alert("Please select Query or input text!"); return;}   

           
            $.ajax({
                url: "record/sendmail",
                type: "POST",
                dataType: 'json',
                data:{
                    'selQuery':selQuery,
                    'selTeller':selTeller,     
                    'tempText':tempText         
                },
                success: function (data) {                   
                    if(data.status == "success"){
                        alert("Send Question Success!");                      
                        selQuery = 0;
                        document.getElementById('txtArea').value = "";
                        document.getElementById("modalBox").style.display = "none"; 
                        return;
                    } else {
                        alert("Sorry, There is already pending question for " + data.status)
                    }
                }
            });
        });

        $("#btn_choose").click(function(){
            
            if(selCategory === "") {
                alert("Please choose one option!");
                return;
            }
            document.getElementById("invited").innerHTML = selCategory;            
            $.ajax({
                url: "record/getquery",
                type: "POST",
                dataType: 'json',
                data:{
                    'category':selCategory                
                },
                success: function (data) {                                      
                    var queries = "";                   
                    for(i = 0; i < data.length; i ++){                        
                        queries += '<p style="margin-top:20px"><input type="radio" name="sel" onclick="onSelquery('+ data[i].id +')"> &nbsp;&nbsp; ' + data[i].title + '</p>'
                    }                   
                    document.getElementById("quetions").innerHTML = queries;
                    document.getElementById("modalBox").style.display = "block"; 
                }
            });
        });


    });    
   
    function onSelquery (tmpID) {
        selQuery = tmpID;
    }

    function onFamily () {
        selCategory = "Family";
    }

    function onChild () {
        selCategory = "Childhood";
    }

    function onWork () {
        selCategory = "Work";
    }

    function onTravel () {
        selCategory = "Travel";
    }

    function onWisdom () {
        selCategory = "Wisdom";
    }

    function onRelation () {
        selCategory = "Relationship";
    }  

    function onBack() {
        selCategory = "";
        selQuery = "";
        document.getElementById("modalBox").style.display = "none";        
    }



</script>


</html>