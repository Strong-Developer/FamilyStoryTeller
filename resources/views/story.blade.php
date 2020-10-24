
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Story</title>

    <link rel="shortcut icon" href="{{asset('assets/images/fav.jpg')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/all.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .flip {
            transform: rotate(90deg);
            }
        .divtoggle {            
        },       
        .trans{                 
        },        
        .transtoggle{   
            background-color:black;         
        }
    </style>
    <style>
        .dropbtn { 
        }

        .dropdown {
            width: 60px;
            position: absolute;
            z-index:3;
            display: inline-block;           
            text-align:right;
            right:6px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 110px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            text-align:center
        }

        .dropdown-content a {
            color: black;            
            text-decoration: none;
            display: block;
            position: relative;
            z-index: 3;
        }    

        .deletebutton{

        }
        .dropdown:hover .dropdown-content {display: block; cursor:pointer}      
        .dropdown-content a:hover{background-color:gray;}       
        .fa {cursor:pointer}
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
                                    <a href="story"><button type="button"  class="btn  col-md-12" style="background-color:  rgb(0,171,160);border-color:rgb(0,171,160); color:white">STORY</button></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="invite"><button type="button"  class="btn  col-md-12" style="background-color: rgb(72,83,164);border-color:rgb(72,83,164); color:white">INVITE</button></a>
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
                             <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">Story</h3></div>
                        </div>
                    </div> 
                </div>
                
                <div class="bg-layer d-flex col-md-12" style="text-align: center; margin-bottom: 50px" >
                    <div class="container myshadow" >
                    @if (count($stories)  > 0)
                        @include('layout.story')
                    @else
                         @include('layout.empty')
                    @endif
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/wavesurfer.js"></script>
<script> 
    var wavesurfer=[];
    var btnState=[]; 
    var orders=[];
    var ids=[];
    var record=[];

    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function cleanstorycontainer() {
            document.getElementById("storycontainer").innerHTML = "";
        }

        function setstorycontainer(data) {            
            var tmpHtml = "";              
            for(i=0; i < data.length; i ++){
                orders[i] = data[i].Orders;
                ids[i] = data[i].id;
                record[i] = data[i].Record;
                
                tmpHtml += '<div class="card content" style="margin-top: 10px; text-align:left; padding:10px; margin-bottom:10px"><div class="row"><div class="col-md-1 col-sm-1"><i class="fa fa-angle-right" id="'+ data[i].id +'" style="margin-top: 12px; margin-left:10px; font-size:36px"></i></div><div class="col-md-10 col-sm-10"><p style="color:rgb(72,100,200) ; font-size:20px; ">&#60;'+ data[i].category +'&#62; | <span style="font-size:15px">&#60;'+ data[i].title +'&#62;</span></p><p style="color:gray ; font-size:20px; ">&#60;'+ data[i].storyteller_name +'&#62;</p><p style="color:gray ; font-size:10px; ">time: '+ data[i].timecreated +'</p></div><div class="col-md-1 col-sm-1"><i class="fa fa-caret-up" id="'+ data[i].Orders +'" style="margin-top: 12px; margin-left:5px; font-size:20px"></i><i class="fa fa-caret-down" id="'+ data[i].Orders +'" style="margin-bottom: 12px; margin-left:5px; font-size:20px"></i></div></div><div id="'+ data[i].id +'div" class="divtoggle" ><div class="row" style="margin-top:20px"><div class="col-md-1"><i class="fa fa-pause-circle" id="'+ data[i].id +'0" style="position:relative; z-index:3; margin-left:20px; margin-top:10px; font-size:36px; align-self: flex-start;"></i></div><div class="col-md-11" style="text-align:right; right: 30px"><div id="waveform'+ data[i].id +'" style="width:100% ; height:60px; margin-left:20px; "></div><p class="trans" id="tgTranscript'+ data[i].id +'" style="cursor:pointer; position:absolute; color:#1e1; font-size:17px; margin-top:-10px;">Show Transcript</p><div class="dropdown" style="margin-top: -10px;"><p  class="dropbtn" style="cursor:pointer; position:absolute; color:#1e1; font-size:17px; margin-top:-60px;">options</p><div class="dropdown-content"; style="margin-top:-35px"><a download href="./recording/'+ data[i].Record +'" target="_blank" style="font-size:12px">Download audio</a><a download href="./transcript/'+ data[i].Transcript +'" target="_blank" style="font-size:12px">Download transcript</a><a href="##" class="deletebutton" id="delete'+ data[i].id +'" style="font-size:12px">Delete</a></div></div></div><div class="divtoggle col-md-12" id="tgTranscript'+ data[i].id +'div" style="text-align:center; margin-top:10px"><textarea id="txtarea'+ data[i].id +'" style="width:100%; height:150px; display:block" ></textarea><div style="text-align:right"><button type="button" id="btnsave'+ data[i].id +'" class="btn btn-success " style="height:30px; font-size:15px; vertical-align: middle">Save</button></div></div></div></div></div>'
            }; 
            cleanstorycontainer();
            document.getElementById("storycontainer").innerHTML = tmpHtml;
            $(".divtoggle").hide();
            $(".fa-angle-right").click(function(){
                var temp;            
                temp = $(this).attr("id");                
                $("#"+temp).toggleClass("flip");
                $("#"+ temp + "div").slideToggle();
                if (!document.getElementById("waveform" + temp).hasChildNodes()){   
                    $("#"+temp+"0").removeClass("fa-play-circle");
                    $("#"+temp+"0").addClass("fa-spinner fa-spin");            
                    wavesurfer[temp] = WaveSurfer.create({
                        container: '#waveform' + temp,
                        height: 60,
                        waveColor: 'darkgray',
                        progressColor: 'gray'
                    });

                    var recordid = 0;

                    
                    for(i = 0; i < ids.length; i ++) {
                        if (temp == ids[i]){
                            recordid = i;
                            break;
                        }
                    }

                                        
                    wavesurfer[temp].load("./recording/" + record[recordid] ); 
                    wavesurfer[temp].on('ready', function () {
                        wavesurfer[temp].pause();                         
                        $("#"+temp+"0").removeClass("fa-spinner fa-spin"); 
                        $("#"+temp+"0").addClass("fa-play-circle");                    
                    }); 
                };  
                $("#"+temp+"0").removeClass("fa-pause-circle");
                $("#"+temp+"0").addClass("fa-play-circle");
                wavesurfer[temp].pause();
            });            
            $(".fa-pause-circle").click(function(){                
                var temp;
                temp = $(this).attr("id"); 
                  
                if($(this).hasClass("fa-play-circle")){
                    $(this).removeClass("fa-play-circle");
                    $(this).addClass("fa-pause-circle");
                    wavesurfer[temp/10].play();
                } else {
                    $(this).removeClass("fa-pause-circle");
                    $(this).addClass("fa-play-circle");
                    wavesurfer[temp/10].pause();
                }             
            });    
            $(".trans").click(function(){           
                var temp;            
                temp = $(this).attr("id");   
                if($(this).text() == "Show Transcript") {        
                var tmpid = temp.substring(12);                  
                $.ajax({
                    url: "story/findtext",
                    type: "POST",
                    dataType: 'json',
                    data:{
                        'tmpid': tmpid
                    },
                    success: function (data) { 
                        $("#txtarea" + tmpid).val(data);
                    }
                });
                    $(this).text("Hide Transcript");
                } else {
                    $(this).text("Show Transcript");
                }
                $("#"+ temp + "div").slideToggle();            
            });  
            $(".btn-success").click(function(){
                var temp;            
                var tmpText;
                temp = $(this).attr("id");                
                temp = temp.substring(7, temp.length);
                tmpText = $("#txtarea" + temp).val();               
                setchangedtext(temp, tmpText);
            });
            $(".deletebutton").click(function(){
                var temp;            
                var tmpText;
                temp = $(this).attr("id");                
                temp = temp.substring(6);                                   
                deleterecord(temp);
            });

            $(".fa-caret-up").click(function(){               
                var tempid1, tempid2;           
                tempid1 = $(this).attr("id");  
                
                for(i = 0; i < data.length; i ++ ) {
                    if(typeof (wavesurfer[ids[i]]) !== "undefined"){                       
                        wavesurfer[ids[i]].pause(); 
                    }      
                }

                for(i = 0; i < data.length; i ++ ) {     
                            
                    if(orders[i] == tempid1 && i == 0) {                        
                        return ;
                    } else if(orders[i] == tempid1 && i != 0) {
                        tempid2 = orders[i-1];                        
                        setchangedorder(tempid1, tempid2);
                        break;
                    }
                }                
            });
            $(".fa-caret-down").click(function(){
                var tempid1, tempid2;           
                tempid1 = $(this).attr("id");

                for(i = 0; i < data.length; i ++ ) {
                    if(typeof (wavesurfer[ids[i]]) !== "undefined"){                       
                        wavesurfer[ids[i]].pause(); 
                    }      
                }
                    
                for(i = 0; i < data.length; i ++ ) {                                 
                    if(orders[i] == tempid1 && i == (data.length - 1)) {
                        return;
                    } else if(orders[i]== tempid1 && i != (data.length - 1)) {
                        tempid2 = orders[i + 1];
                        setchangedorder(tempid1, tempid2);
                        break;
                    }
                }                
            });
        }

        function setchangedorder(id1, id2) {
            
            $.ajax({
                url: "story/setchangedorder",
                type: "POST",
                dataType: "json",
                data:{       
                    "id1"  :  id1,
                    "id2": id2            
                },
                success: function (data) {   
                    setstorycontainer(data);
                }
            });      
        }

        function deleterecord(id) {
            $.ajax({
                url: "story/deleterecord",
                type: "POST",
                dataType: "json",
                data:{       
                    "id"  :  id                      
                },
                success: function (data) {   
                    setstorycontainer(data);
                }
            });      
        }

        function setchangedtext(id, text){
            $.ajax({
                url: "story/setchangedtext",
                type: "POST",
                dataType: "json",
                data:{       
                    "id"  :  id,
                    "text": text            
                },
                success: function (data) {   
                    setstorycontainer(data);
                }
            });      
        }        

        $("#backuptext").click(function(){
            
            $.ajax({
                url: "story/downloadtext",
                type: "POST",
                dataType: "json",
                data:{ 
                },
                success: function (data) {                     
                    window.location = data;
                }
            });  
        });

        $("#backupaudio").click(function(){            
            $.ajax({
                url: "story/downloadaudio",
                type: "POST",
                dataType: "json",
                data:{ 
                },
                success: function (data) {                     
                    window.location = data;
                }
            });  
        });    


        $.ajax({
                url: "story/getstory",
                type: "POST",
                dataType: 'json',
                data:{                     
                },
                success: function (data) {   
                    setstorycontainer(data);
                }
            });      
    }); 

   
</script>
</html>