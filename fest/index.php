<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Festember</title>
    <link rel="icon" href="images/logo.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zerogrid.css" >
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/validate.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider_wrapper')._TMS({
                show:0,
                pauseOnHover:false,
                prevBu:'.prev',
                nextBu:'.next',
                playBu:false,
                duration:600,
                preset:'fade',
                pagination:true,//'.pagination',true,'<ul></ul>'
                pagNums:false,
                slideshow:8000,
                numStatus:false,
                banners: 'fade',
                waitBannerAnimation:false,
                progressBar:false
            });
        });
        $(document).ready(function(){
            !function(){
                var map=[]
                    ,names=[]
                    ,win=$(window)
                    ,header=$('header')
                    ,currClass
                $('.content').each(function(n){
                    map[n]=this.offsetTop
                    names[n]=$(this).attr('id')
                })
                win
                    .on('scroll',function(){
                        var i=0
                        while(map[i++]<=win.scrollTop());
                        if(currClass!==names[i-2])
                            currClass=names[i-2]
                        header.removeAttr("class").addClass(names[i-2])
                    })
            }(); });
        function goToByScroll(id){
            $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
        }
        $(document).ready(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
        });

        $(function(){
            $("#typed").typed({
                strings: ["Make a fine design", "Put it online" , "Shine"],
                typeSpeed: 120,
                backDelay: 1000,
                loop: true,
                contentType: 'html', // or text
                loopCount: false,
                showCursor: true,
                cursorChar: "|"
            });
        });
    </script>


    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->

    <style>
        .fa-circle{
            font-size:10px;
            padding: 3px;

        }
        .dates{
            color:#00FFD9;
            font-style: monospace;
            /*font-size: 20px;*/
        }
        #typed{
            font-weight: 700;
            color:white;

        }
        .typed-cursor{
            opacity: 1;
            font-weight: 500;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
            color:blue;
        }
        @-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }




        @keyframes spin {
            0% {
                stroke: #00aeef
            }
            37.5% {
                stroke: #ed1c24;
            }
            67.5% {
                stroke: #f69f37;
            }
            100% {
                stroke-dashoffset: -240;
                stroke: #00aeef;
            }
        }
        @-webkit-keyframes spin {
            0% {
                stroke: #00aeef
            }
            37.5% {
                stroke: #ed1c24;
            }
            67.5% {
                stroke: #f69f37;
            }
            100% {
                stroke-dashoffset: -240;
                stroke: #00aeef;
            }
        }

        svg {
            width: 100%;
            height: 100%;
        }

        polygon {
            stroke: black;
            stroke-linecap: round;
            stroke-width: 2;
            stroke-dasharray: 0, 0, 50, 190;
            stroke-dashoffset: 0;
            stroke-linejoin: round;

            -webkit-animation: spin 6.5s infinite linear;
            -webkit-animation-delay:0.5s;
            -webkit-animation-duration:3s;
            animation: spin 6.5s infinite linear;
            animation-delay:0.5s;
            animation-duration:3s;
        }

    </style>

</head>
<body >

<header class="page1" style="background:transparent;" >
    <!-- Modal -->
    <div class="zerogrid">
        <div class="col-full">
            <div class="wrap-col">
                <div class="menu_block">
                    <nav class="">
                        <ul class="sf-menu">
                            <li class="current men"><a onClick="goToByScroll('page1'); return false;" href="#">Home </a> <strong class="hover"></strong></li>
                            <li class="men1"><a onClick="goToByScroll('page2'); return false;" href="#">Introduction</a><strong class="hover"></strong></li>
                            <li class=" men2"><a onClick="goToByScroll('page3'); return false;" href="#">Event Format</a> <strong class="hover"></strong></li>
                            <li class=" men3"><a onClick="goToByScroll('page4'); return false;" href="#">Prizes</a> <strong class="hover"></strong></li>
                            <li class=" men4"><a onClick="goToByScroll('page5'); return false;" href="#">Rules</a> <strong class="hover"></strong></li>
                            <li class=" men5"><a onClick="goToByScroll('page6'); return false;" href="#">Contacts</a> <strong class="hover"></strong></li>


                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <h1 >
                    <a href="#"  onClick="goToByScroll('page1'); return false;">
                        <img src="images/logo.png" />

                    </a>
                </h1>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</header>
<!--=======content================================-->

<div id="page1" class="content" style="background-image:url('images/img8.jpg');background-size:cover;">
    <div class="zerogrid">
        <div class="col-full">
            <div class="wrap-col">
                <h3><span id="typed"></span></h3>
            </div>
            <div style="text-align:center;margin-top:14%;">
                <button  style="margin-right:10px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#upload">Upload design</button>
                <a href="register.php" style="margin-left:10px;"  class="btn btn-info btn-lg" >Register</a>
            </div>
            <div class="socials" style="position:relative;top:-5px;">
                <a href="https://www.facebook.com/festember" style="width:40px;"><i style="color:white;" class="fa fa-3x fa-facebook"></i></a>
                <a href="https://twitter.com/festember" style="width:40px;" ><i style="color:white;" class="fa fa-3x fa-twitter"></i></a>

            </div>
        </div>
    </div>
</div>
</div>
<div id="page2" class="content" style="background-image:url('images/img4.jpg');background-size:cover;" >
    <div class="zerogrid">
        <div class="col-full">
            <div class="wrap-col">
                <div class="slogan" style=" background-color:rgba(147, 183, 162, 0.69);width:100%;height:300px; ">
                    <h3 data-sr="enter left, hustle 20px,mobile true,reset true" >
                        <span>Festember �15</span>
                    </h3>
                    <div class="text1" style="padding:10px;">
                        <h4  style="font-size:24px; line-height:27px;"><span>Festember brings to you a competition assured to test your designing skills over four fiercely fought rounds.
								With their varied goals and quirky restrictions, it�s sure to unleash the creativity within you.
								Clear the first three online rounds, and there�s just one on-site round between you and the coveted designer�s prize.
								Come and be a part of our grand design!</span></h4>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<div id="page3" class="content" style="background:url('images/img2.jpg');background-size:cover;">
    <div data-sr="move 16px scale up 20%, over 0.8s,mobile true,reset true "  style="background-color:rgba(27, 22, 13, 0.52); width:60%;height:80%; margin-left:20%;" class="col-1-4">
        <div class="text1" style="text-align:center;">
            <p style="font-size:24px;padding:10px;">3 online rounds + 1 on-site round during Festember.</p>
            <p>
                The first three rounds will be online and the final round will take place at <a href="http://www.nitt.edu/">NIT Trichy</a>
                during Festember where you shall enthrall the judges with your splendid designs on the spot.
            </p>
        </div>
        <div style="margin-bottom:10%;">
            <p>
                IMPORTANT DATES THAT YOU NEED TO KEEP TRACK OF
            </p>
            <ol style="font-size:20px;line-space:10px;">
                <li><span class="dates">13th August</span> � Round 1 of the event</li>
                <li><span class="dates">15th August</span>  � Round 1 deadline</li>
                <li><span class="dates">20th August</span>  � Round 1 results</li>
                <li><span class="dates">23rd August</span>  � Round 2 of the event</li>
                <li><span class="dates">30th August</span>  � Round 2 deadline</li>
                <li><span class="dates">5th September</span>  � Round 2 results</li>
                <li><span class="dates">8th September</span>  � Round 3 of the event</li>
                <li><span class="dates">13th September</span>  � Round 3 deadline</li>
                <li><span class="dates">16th September</span>  � Round 3 results</li>
                <li>Finals shall be held during Festember <span class="dates">24-27 September</span></li>

            </ol>
            <p style="color:#F0B3B3;padding-top:2%;font-size:20px;">IMPORTANT : Any change in above dates will be intimated on the Festember facebook page.</p>

        </div>

    </div>



</div>
<div id="page4" class="content" style="background:url('images/img10.jpg');background-size:cover;" >
    <div class="zerogrid" id="timeline" style=" background-color:rgba(55, 68, 10, 0.34); width:60%;height:80%; margin-left:20%;" >
        <h3>Prizes</h3>
        <p style="font-size:20px;">
            Cash Prizes worth 8000 &#8377; will be awarded for the top 3 designers along with exciting goodies. <br/>The design with the maximum likes in each round will receive a special prize.
        </p>
    </div>
</div>
<div id="page5" class="content spcl" style="background:url('images/img5.jpg');background-size:cover;" >
    <div class="zerogrid" style="background-color:rgba(128, 128, 128, 0.7); width:90%;height:100%;">
        <div class="col-full">
            <div class="wrap-col"  >


                <div   data-sr="move 16px scale up 20%, over 0.5s,mobile true,reset true" >
                    <div data-sr="wait 0.7s, ease-in-out 100px" class="text1" ><h3>Rules</h3></div><hr/>
                    <br/>
                    <ol style="font-size:20px;list-style:none;align:left;line-height: initial;">
                        <li> <i class="fa  fa-1x fa-circle"></i>&nbsp;This is an INDIVIDUAL event and is open for college students ONLY.</li>
                        <li> <i class="fa fa-1x  fa-circle"></i>&nbsp;The designs submitted must be a genuine, original work of the participant. </li>
                        <li> <i class="fa fa-1x  fa-circle"></i>&nbsp;The stock images that are provided by us are only to be used, failing which will lead to disqualification.</li>
                        <li> <i class="fa fa-1x fa-circle"></i>&nbsp;Designs which contain any obscene or inappropriate content will be disqualified.</li>
                        <li> <i class="fa  fa-1x fa-circle"></i>&nbsp;The copyrights of the designs will stay with the designer. However, Festember has the right to use the designs for publicity or other &nbsp;&nbsp;&nbsp;activities.</li>
                        <li><i class="fa fa-1x  fa-circle"></i>&nbsp;Under any circumstance, entries once submitted cannot be taken back for modifications.</li>
                        <li> <i class="fa  fa-1x fa-circle"></i>&nbsp;Requests for extending the deadline will not be entertained at any cost.</li>
                        <li> <i class="fa  fa-1x fa-circle"></i>&nbsp;The judges� and organizers� decision will be final and binding. No discussion or correspondence will be entertained regarding the&nbsp; &nbsp;&nbsp;same.</li>
                        <li> <i class="fa  fa-1x fa-circle"></i>&nbsp;All submissions have to be made�here.</li>
                        <li> <i class="fa fa-1x  fa-circle"></i>&nbsp;Please read the design specifications very carefully. Failing to adhere with the format will lead to disqualification.</li>
                        <li> <i class="fa fa-1x  fa-circle"></i>&nbsp;The submitted designs should not be posted in any social media platforms till the�competition is over.</li>
                        <li> <i class="fa  fa-1x fa-circle"></i>&nbsp;Participants are however allowed to share the images when they are uploaded to Facebook by the organizers.</li>
                        <li> <i class="fa  fa-1x fa-circle"></i>&nbsp;Anyone not adhering to the above rules will be disqualified without any prior notice.</li>
                        <li><i class="fa  fa-1x fa-circle"></i> &nbsp;All ENTRIES SUBMITTED MUST BE IN JPEG FORMAT ONLY AND THE FILE SIZE SHOULD NOT EXCEED <b >15 MB</b></li>
                    </ol>

                    <div class="round">
                        <h3>Round 1</h3>
                        <hr/>
                        <p style="font-size:20px;list-style:none;align:justify;line-height: initial;" >
                            Participants should design a minimal poster for any social cause of their choice. Example: Smoking kills etc.
                        </p>
                        <h3>Design Specifications:</h3><hr/>
                        <ol style="font-size:20px;list-style:none;align:justify;line-height: initial;">
                            <li>Size: A4</li>
                            <li>Resolution: 300 dpi</li>
                            <li>Color-format: RGB ( Max 4 colors ) </li>
                            <li>Only one entry is allowed per participant.</li>
                        </ol>

                    </div>


                </div>



            </div>
        </div>


    </div>
</div>
<div id="page6" class="content" style="background:url('images/img12.jpg');background-size:cover;color:black;">
    <div class="zerogrid">
        <div class="col-full">
            <div class="wrap-col">
                <div class="slogan">
                    <h3 data-sr="move 16px scale up 20%, over 0.8s,mobile true,reset true " style="color:black;" >Have anything to ask?</h3>
                    <div class="text1">
                        Adithya <br/><i class="fa fa-mobile" style="color:green;"></i>&nbsp;+91-9841823695<br/>
                        <hr/>
                        Kaushal <br/><i class="fa fa-mobile" style="color:green;"></i>&nbsp;+91-9952204638
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="map">
            <div class="col-2-4">
                <div class="wrap-col">
                    <div data-sr="move 16px scale up 20%, over 0.8s,mobile true,reset true " style="font-size:20px;color:black;" class="text1">Address</div>
                    <address style="font-size:18px;" data-sr="move 16px scale up 20%, over 0.8s,mobile true,reset true " >
                        <dl>
                            <dt><b>Festember</b><br>
                                <br>
                                National Institute of Technology<br/>
                                Tiruchirappalli - 620015<br/>
                                Tamil Nadu, INDIA
                            </dt>
                        </dl>
                    </address>
                </div>
            </div>
            <div class="col-2-4">
                <div class="wrap-col">
                    <figure class="" style="position:relative;top:-2%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.658862988368!2d78.81473701547132!3d10.760752714661784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa8d47758e1ae1%3A0xb3e16389eeab05a!2sNational+Institute+Of+Technology!5e0!3m2!1sen!2s!4v1427016824468" width="400" height="300" frameborder="0" style="border:0"></iframe>
                    </figure>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <footer>
        <div class="zerogrid" >
            <div class="col-full">
                <div class="wrap-col">

                    <div class="copy" style="text-align:center;">

                        &copy;Festember
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="js/scrollReveal.js"></script>
<script>

    window.sr = new scrollReveal();
</script>

<div id="upload" class="modal fade" role="dialog">
    <div class="modal-dialog" style="color:#2E4363;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color: #2E4363;" class="modal-title">Upload Design</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" class="form-horizontal" action="login.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="unique_id">Unique ID:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="unique_id" pattern=".{3,}" required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="password">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" pattern=".{5,10}" title="5 to 10 characters" required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="description">Description:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="description" maxlength="10000" required="required"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="image">Design Upload:</label>
                        <div class="col-sm-8">
                            <input type="file" name="image" class="form-control file" id="file"
                                   onclick="document.getElementById('error_file').style.display = 'none';"
                                   onchange="checkFile(this, 5);" required="required" />
                            <div id="error_file"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input type="submit" value="Submit" class="form-control btn btn-success"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>

