<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css' /> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js'></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js'></script> -->

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css' />
    <link rel='stylesheet' href='css/buttons.css' />
    <link rel='stylesheet' href='css/style.css' />
    <link rel='stylesheet' href='css/style2.css' />
    <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
    <style>
        body {
            /* font-family: 'Shadows Into Light', cursive, "標楷體"; */
            font-family: 'Ma Shan Zheng', cursive, '標楷體';

        }
    </style>

   <!--  <script>
        $(function() {
            console.log("page load completed");

            //檢查瀏覽器是否支援 WebStorage
            if (typeof(Storage) == "undefined")
                console.log('無支援');
            else {
                console.log('支援');
                console.log(typeof Storage);
                if (typeof(localStorage.getItem('cbflag')) == 'undefined') {
                    console.log('set cbflag');
                    localStorage.setItem('cbflag', '000000');
                    $('#cb1').attr("checked"); //設定 Checkbox 不打勾
                    $('#cb2').attr("checked");
                    $('#cb3').attr("checked");
                    $('#cb4').attr("checked");
                    $('#cb5').attr("checked");
                    $('#cb6').attr("checked");
                } else {
                    console.log('get cbflag');
                    console.log(localStorage.getItem('cbflag'));
                    for (var i = 0; i < localStorage.getItem('cbflag').length; i++) {
                        console.log(i);
                        var cb = document.getElementById("cb" + (i + 1));
                        console.log(cb);
                        if (localStorage.getItem('cbflag').substr(i, 1) == "1")
                            //$(cb).prop("checked",true);
                            cb.checked = true;
                        else
                            //$(cb).prop("checked",false);\
                            cb.checked = false;
                    }
                }
            }
        });
    </script>

 -->
</head>

<body>
    <nav id="tf-menu" class="navbar navbar-default  navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">My Website Sample</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="tf-ee">
        <div class="container">
            <div class="row section-title-black center">
                <h1 style="color:#000000; text-align:center;"><strong>Control Panel</strong></h1>
                <div class="line">
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: -60px; margin-bottom: 60px">
        <section class="main">
            <div class="row">
                <div class="col-md-4">
                <h2>The step Attribute</h2>
                <p>The step attribute specifies the legal number intervals for an input element.</p>

                <form action="/action_page.php">
                  <input type="number" name="points" step="3">
                  <input type="submit">
                </form>

                <p><strong>Note:</strong> The step attribute of the input tag is not supported in Internet Explorer 9, and earlier versions.</p>
                </div>
                <div class="col-md-4">
                    <h2>The pattern Attribute</h2>
                    <p>The pattern attribute specifies a regular expression that the input element's value is checked against.</p>

                    <form action="/action_page.php">
                      Country code: <input type="text" name="country_code" pattern="[A-Za-z]{3}" title="Three letter country code">
                      <input type="submit">
                    </form>

                    <p><strong>Note:</strong> The pattern attribute of the input tag is not supported in Internet Explorer 9 and earlier versions, or in Safari 10 and earler versions.</p>
                </div>
                <div class="col-md-4">
                    <h2>The multiple Attributes</h2>
                    <p>The multiple attribute specifies that the user is allowed to enter more than one value in the input element.</p>
                    <form action="/action_page.php">
                     <input type="file" name="img" multiple>
                      <input type="submit">
                    </form>
                    <p><strong>Note:</strong> The multiple attribute of the input tag is not supported in Internet Explorer 9 and earlier versions.</p>
                </div>
                <div class="col-md-4">
                        <h2>The min and max Attributes</h2>
                        <p>The min and max attributes specify the minimum and maximum values for an input element.</p>

                        <form action="/action_page.php">

                          Enter a date before 1980-01-01:
                          <input type="date" name="bday" max="1979-12-31"><br>

                          Enter a date after 2000-01-01:
                          <input type="date" name="bday" min="2000-01-02"><br>

                          Quantity (between 1 and 5):
                          <input type="number" name="quantity" min="1" max="5"><br>

                          <input type="submit">
                          
                        </form>

                        <p><strong>Note:</strong> The max and min attributes of the input tag is not supported in Internet Explorer 9 and earlier versions.</p>
                </div>
                <div class="col-md-4">
                  <h2>按一下<button  align =center type="button" onclick="alert('訂閱我的youtube頻道!')" size =5>Click Me!
                    </button></h2>
                    
                                <embed width="360" height="225"
                          src="https://www.youtube.com/v/CuhOmWUzAoY">
                </div>
                
                <!-- <div class="col-md-4">
                    <video width="320" height="240" autoplay>
                      <source src="[Splatoon animation shorts] Christmas of Agent 3.mp4" type="video/mp4">
                       <source src="movie.ogg" type="video/ogg"> -->
                      <!-- Your browser does not support the video tag. -->
                    <!-- </video> -->

                <!-- </div> --> 
                <div class="col-md-4">
                          <div style="text-align:center"> 
                          <button onclick="playPause()">Play/Pause</button> 
                          <button onclick="makeBig()">Big</button>
                          <button onclick="makeSmall()">Small</button>
                          <button onclick="makeNormal()">Normal</button>
                          <br><br>
                          <video id="video1" width="360">
                            <source src="mov_bbb.ogg.mp4" type="video/mp4">
                            <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                            Your browser does not support HTML5 video.
                          </video>
                        </div> 

                        <script> 
                        var myVideo = document.getElementById("video1"); 

                        function playPause() { 
                          if (myVideo.paused) 
                            myVideo.play(); 
                          else 
                            myVideo.pause(); 
                        } 

                        function makeBig() { 
                            myVideo.width = 480; 
                        } 

                        function makeSmall() { 
                            myVideo.width = 250; 
                        } 

                        function makeNormal() { 
                            myVideo.width = 360; 
                        } 
                        </script> 
                </div>
                <!-- <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">預留二</h2>
                    <div class="switch demo3">
                        <input id="cb6" type="checkbox">
                        <label><i></i></label>
                    </div>
                </div> -->
                <!-- <div class="row">
                 <div class="col-md-4">
                    <video width="320" height="240" autoplay>
                      <source src="[Splatoon animation shorts] Christmas of Agent 3.mp4" type="video/mp4">
                       <source src="movie.ogg" type="video/ogg"> 
                       Your browser does not support the video tag. 
                     </video> 

                </div>  
               </div> -->
                <!-- <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">預留二</h2>
                    <div class="switch demo3">
                        <input id="cb6" type="checkbox">
                        <label><i></i></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">預留二</h2>
                    <div class="switch demo3">
                        <input id="cb6" type="checkbox">
                        <label><i></i></label>
                    </div>
                </div> -->
                <div class="col-md-12">
                   <!--  <div class="text-center"> -->
                        <!-- <!<form id="add" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                            <input id="cmd" style="display:none" type="text" name="a">
                            <input type="button" class="button button-action" onclick="sub()" value="啟動">
                        </form> -->
                        <h2 class="text-center">提交</h2>
                    <div class="switch demo3">
                        <input id="cb6" type="checkbox">
                        <label><i></i></label>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <nav id="footer">
        <div class="container">
            <div class="fnav">
                <p>Copyright &copy; 2019. <a href=mailto:allen@example.com>Tommy</a> All rights reserved.</p>
            </div>
        </div>
    </nav>
</body>

</html>
