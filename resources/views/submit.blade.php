
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Submit</title>

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
                             <div class="col-md-12 " style="text-align: center;height: 50px;background-color: #9c9c9c!important;"><h3 style="margin-top: 5px">SUBMIT FOR PRINTING</h3></div>
                        </div>
                    </div> 
                </div>
                
                <div class="bg-layer d-flex col-md-12" style="text-align: center; margin-bottom: 50px" >
                    <div class="container myshadow" >
                        
                        <div class="content">
                            <div class="row" style="margin-top: 50px; ">
                                <div class="col-md-4"><p style="font-size: 20px">Final Book Title:</p></div>
                                <div class="col-md-7"><input type="text" id = "accname" class="form-control" id="name" name="name" value=""/></div>
                        
                                <div class="col-md-4"><p style="font-size: 20px">Front Cover Photo:</p></div>
                                <div class="col-md-7">
                                   <a href="#" style="font-size: 22px"><i class="fa fa-camera"></i> Upload</a>                                   
                                </div> 
                                               
                                <div class="col-md-6, col-xm-12" style="margin-top:20px; margin-left:50px" ><p style="font-size: 20px; " >Back cover text: (optional, up to 250 words)</p></div>   
                                <div class="col-md-12"><textarea style="width:90%; height:200px"></textarea></div>
                                <div class="col-md-12 col-xm-12" style="margin-top:20px; margin-left:50px" ><p style="font-size: 17px; text-align:left " >Final transcript: </p></div>                                                                    
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-xm-4" style="margin-top:20px; margin-left:50px" >
                                    <p style="font-size: 17px; text-align:left" >Cover Color: </p>
                                </div>    
                                <div class="col-md-8 col-xm-8" style="margin-top:20px; text-align:center" >
                                    <input id="covercolor" type="color" value="#a3e2f9" style="height:30px" />
                                    <input id="covercolor" type="color" value="#576db2" style="height:30px" />
                                    <input id="covercolor" type="color" value="#43b6b3" style="height:30px" />
                                    <input id="covercolor" type="color" value="#9acb58" style="height:30px" />
                                    <input id="covercolor" type="color" value="#ffe04c" style="height:30px" />
                                    <input id="covercolor" type="color" value="#fcaf17" style="height:30px" />
                                    <input id="covercolor" type="color" value="#f47961" style="height:30px" />
                                    <input id="covercolor" type="color" value="#ef3f72" style="height:30px" />
                                    <input id="covercolor" type="color" value="#c42638" style="height:30px" />
                                    <input id="covercolor" type="color" value="#6c6d6d" style="height:30px" />
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px">
                            <div class="col-md-1"></div>                            
                        </div>                       

                        <div class="row" style="margin-top:30px; margin-bottom:30px">
                            <div class="col-md-6" style="text-align:right">
                                <a href="story"><button type="button"  class="btn btn-default col-md-4" style="background-color: rgb(97,97,97);border-color:rgb(97,97,97);color:white">BACK</button></a>
                            </div>
                            <div class="col-md-6" style="text-align:left">
                                <button type="button"  class="btn  col-md-4" id="btnprofile" style="background-color: rgb(0,171,160);border-color:rgb(0,171,160);color:white">SEND</button>
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


</html>