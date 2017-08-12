<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>希望的航行者&絕望的渡輪</title>
    <link rel="icon" href="images/anchor.png" type="image/x-icon" />  
    <script src="plugins/typed-js-master/js/typed.js" type="text/javascript"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function(){

        Typed.new("#typed", {
            stringsElement: document.getElementById('typed-strings'),
            typeSpeed: 100,
            backDelay: 900,
            backSpeed: -20,
            loop: false,
            contentType: 'html', // or text
            // defaults to null for infinite loop
            loopCount: null,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        var resetElement = document.querySelector('.reset');
        if(resetElement) {
            resetElement.addEventListener('click', function() {
                document.getElementById('typed')._typed.reset();
            });
        }

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <link href="main.css" rel="stylesheet"/>
    <style>
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
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
        }
    </style>

    <!--BGM-->
    <script type='text/javascript' src='js/jquery.js'></script>
    <link rel='stylesheet' id='jquery-ui-css'  href='plugins/soundy-background-music/css/jquery-ui.css' type='text/css' media='all' />
    <link rel='stylesheet' id='soundy_front_end-css'  href='' type='text/css' media='all' />
    <script type='text/javascript' src='plugins/soundy-background-music/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='plugins/soundy-background-music/js/front-end.js'></script>
    <script>
      var war_soundy_front_end = new war_SoundyFrontEnd(
      {
          pp_code:                    '<img class="war_soundy_audio_control war_soundy_pp_corner" style="position: fixed; right: 35px; top: 35px;">',
          audio_code:                 '<div style="display: none;">  <audio id="war_soundy_audio_player" preload="auto" autoplay loop>     <source id="war_soundy_audio_player_source" src="plugins/soundy-background-music/music/index_bgm_2.mp3" type="audio/mpeg">  </audio></div>',
          audio_volume:               0.3,
          preview:                    'false',
          button_url_play_normal:     'images/play-square-grey.png',
          button_url_pause_normal:    'images/pause-square-grey.png',
          button_url_play_hover:      'images/play-square-blue.png',
          button_url_pause_hover:     'images/pause-square-blue.png',
          user_agent_is_IOS:          false  } );

      var war_soundy_responsive_mode = 'none';
      var war_soundy_button_corner = 'upper_right';
    </script>
    <!--BGM-->

</head>
<body>
  <div style="display:none;">
    　<p>私立希望之峰學園，集合各領域的超一流高校生，以培育精英為目的，並獲得政府公認的超特權學校。有人說，若能從這所學校畢業，人生幾乎等於是成功了。而你作為第８７屆新生，在踏入校門的一剎那昏了過去，醒來後發現……</p>
  </div>

  <div class="container">
    <div id="typed-strings">
        <!--
        <p><strong style="color:red;">私立希望之峰學園，</strong>^100<br/>集合各領域的超一流高校生，^100<br/>以培育精英為目的，^100並獲得政府公認的超特權學校。^600<br/><br/>有人說，若能從這所學校畢業，^100<br/>人生幾乎等於是成功了。</p>
        <p>這天對我來說，不單純只是 365 天當中的一天，^200<br/><strong>私立希望之峰學園</strong>，^300<br/>我現在就站在這樣一所學校前面，^500<br/><span style="line-height: 70px; font-size: 35px;">「差不多該進去了吧 . . .」</span>^300<br/>這是嶄新的校園生活，^200充滿<strong style="color:red;">希望</strong>的第一步 . . .^600<br/>. . . . . . 應該是這樣才對。^500<br/>咦 . . . ^300奇怪 . . .^500<br/>我怎麼 . . . . . .^1200/&>?+*!@<img src="plugins/typed-js-master/img/blood1.png" class="blood1"><img src="plugins/typed-js-master/img/blood2.png" class="blood2"></p>
        -->
        <p><br/>我討厭 <strong style="color:red;">太陽</strong>，^1200<br/><br/>那日出就如同侵略者一般，^1000<br/><br/>將海平面染上絕對的純白。^1200</p>
        <p>在這<b>超高校級</b>閃耀的每一天，^800<br/><br/>以<strong style="color:red;">希望</strong>照亮世界的每一天，^800<br/><br/>從沒有人懷疑過，^800在炙熱的光芒下，^800<br/><br/>那<b style="color:#000; text-shadow:1px 1px 1px #aaaaaa;">陰影</b>究竟有多深‧‧‧‧‧‧‧</p>


    </div>
    <span id="typed" style="white-space:pre;"></span>

  </div>     
  <a class="skip" href="home.php">SKIP</a>

  <div class="cover"></div>
</body>
</html>


<style type="text/css">
span, a{
  font-family: Microsoft JhengHei !important; 
}
.blood1{
  bottom: 20px;
  left: 50%;
  width: 15%;
  position: fixed;
}
.blood2{
  bottom: 150px;
  left: 60%;
  width: 15%;
  position: fixed;
}
.skip{
  position: absolute;
  bottom: 50px;
  left: 50%;
  font-size: 25px;
  background: none;
  border: 0;
  color: #fff;
  cursor: pointer;
  margin: 0 0 0 -30px;
  width: 60px;
  text-decoration: none;
  letter-spacing:3px;
  opacity: 0.5;
}
.skip:hover{
  opacity: 1;
}
.a{
  width: 100%;
  height: 600px;
}
body{
  background: #000;
  background-image: url(plugins/typed-js-master/img/bg.png);
  background-size: 600px auto;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: 50% 30%;
}
span{
  font-size: 30px;
  color: #fff;
}
#typed{
  vertical-align: middle;
}
.container{
  width: 60%;
  margin: 5% auto;
  display: block;
  text-align: center;
  line-height: 50px;
}
.cover{
  width: 250px;
  height: 50px;
  position: fixed;
  bottom: 0;
  right: 0;
  background-color: #000;
  z-index: 99999999;
}


@media only screen and (max-width: 1000px) {
  .container{
    margin: 25% auto;
    line-height: 80px;
  }
  .blood1{
    bottom: 60px;
    width: 35%;
  }
  .blood2{
    bottom: 300px;
    width: 35%;
  }
  .btn{
    bottom: 150px;
    font-size: 30px;
  }
  body{
    background-size: 700px auto;
    background-position: 50% 600%;
  }
  span{
    font-size: 26px;
  }
}

@media only screen and (min-width: 1500px) {
  .container{
    margin: 220px auto;
    line-height: 60px;
  }
  body{
    background-size: 850px auto;
    background-position: 50% 40%;
  }
  span{
    font-size: 32px;
  }
}


</style>