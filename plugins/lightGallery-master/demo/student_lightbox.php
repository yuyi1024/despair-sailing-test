
        <link href="plugins/lightGallery-master/dist/css/lightgallery.css" rel="stylesheet">
        <style type="text/css">
            
            .demo-gallery > ul {
              margin-bottom: 0;
            }
            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                width: 200px;
            }
            .demo-gallery > ul > li a {
              border: 3px solid #FFF;
              border-radius: 3px;
              display: block;
              overflow: hidden;
              position: relative;
              float: left;
            }
            .demo-gallery > ul > li a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }
            .demo-gallery > ul > li a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery > ul > li a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery > ul > li a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
              height: 48px;
              margin-left: -24px;
              margin-top: -24px;
              opacity: 0.8;
              width: 48px;
            }
            .demo-gallery.dark > ul > li a {
              border: 3px solid #04070a;
            }
            .home .demo-gallery {
              padding-bottom: 80px;
            }
            .lg-toolbar {
              background-color: rgba(0, 0, 0, 0);
            }
            .lg-thumb-outer{
              background: rgba(0, 0, 0, 0) !important;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>

$('#student1').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/立花 綾/立花 綾-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/立花 綾/立花 綾-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/立花 綾/立花 綾-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/立花 綾/立花 綾-IDcard2.png'
        }]
    })
});
$('#student2').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/相宮 春久/相宮 春久-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/相宮 春久/相宮 春久-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/相宮 春久/相宮 春久-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/相宮 春久/相宮 春久-IDcard2.png'
        }]
    })
});
$('#student3').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/若月 暁音/若月 暁音-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/若月 暁音/若月 暁音-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/若月 暁音/若月 暁音-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/若月 暁音/若月 暁音-IDcard2.png'
        }]
    })
});
$('#student4').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/花島 紗里/花島 紗里-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/花島 紗里/花島 紗里-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/花島 紗里/花島 紗里-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/花島 紗里/花島 紗里-IDcard2.png'
        }]
    })
});
$('#student5').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/速水 星蓮/速水 星蓮-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/速水 星蓮/速水 星蓮-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/速水 星蓮/速水 星蓮-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/速水 星蓮/速水 星蓮-IDcard2.jpg'
        }]
    })
});
$('#student6').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/俞墨辰/俞墨辰-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/俞墨辰/俞墨辰-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/俞墨辰/俞墨辰-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/俞墨辰/俞墨辰-IDcard2.jpg'
        }]
    })
});
$('#student7').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/室伏 左十留/室伏 左十留-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/室伏 左十留/室伏 左十留-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/室伏 左十留/室伏 左十留-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/室伏 左十留/室伏 左十留-IDcard2.png'
        }]
    })
});
$('#student8').on('click', function() {
    $(this).lightGallery({
        dynamic: true, 
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/橘屋 冬狐/橘屋 冬狐-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/橘屋 冬狐/橘屋 冬狐-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/橘屋 冬狐/橘屋 冬狐-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/橘屋 冬狐/橘屋 冬狐-IDcard2.png'
        }]
    })
});
$('#student9').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/緒坂 凜/緒坂 凜-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/緒坂 凜/緒坂 凜-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/緒坂 凜/緒坂 凜-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/緒坂 凜/緒坂 凜-IDcard2.png'
        }]
    })
});
$('#student10').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/眠目 影心/眠目 影心-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/眠目 影心/眠目 影心-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/眠目 影心/眠目 影心-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/眠目 影心/眠目 影心-IDcard2.jpg'
        }]
    })
});
$('#student11').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/系屋 拓麻/系屋 拓麻-IDcard1-改.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/系屋 拓麻/系屋 拓麻-IDcard1-改.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/系屋 拓麻/系屋 拓麻-IDcard2-改.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/系屋 拓麻/系屋 拓麻-IDcard2-改.jpg'
        }]
    })
});
$('#student12').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/七五三木 桃/七五三木 桃-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/七五三木 桃/七五三木 桃-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/七五三木 桃/七五三木 桃-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/七五三木 桃/七五三木 桃-IDcard2.png'
        }]
    })
});
$('#student13').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/伊地知 覚/伊地知 覚-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/伊地知 覚/伊地知 覚-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/伊地知 覚/伊地知 覚-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/伊地知 覚/伊地知 覚-IDcard2.jpg'
        }]
    })
});
$('#student14').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/五月七日 悠咲/五月七日 悠咲-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/五月七日 悠咲/五月七日 悠咲-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/五月七日 悠咲/五月七日 悠咲-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/五月七日 悠咲/五月七日 悠咲-IDcard2.png'
        }]
    })
});
$('#student15').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/勘解由小路 露央紗/勘解由小路 露央紗-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/勘解由小路 露央紗/勘解由小路 露央紗-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/勘解由小路 露央紗/勘解由小路 露央紗-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/勘解由小路 露央紗/勘解由小路 露央紗-IDcard2.png'
        }]
    })
});
$('#student16').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/大久保 小夜子/大久保 小夜子-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/大久保 小夜子/大久保 小夜子-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/大久保 小夜子/大久保 小夜子-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/大久保 小夜子/大久保 小夜子-IDcard2.jpg'
        }]
    })
});
$('#student17').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐久間 誠/佐久間 誠-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐久間 誠/佐久間 誠-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐久間 誠/佐久間 誠-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐久間 誠/佐久間 誠-IDcard2.jpg'
        }]
    })
});
$('#student18').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/平丸 早由美/平丸 早由美-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/平丸 早由美/平丸 早由美-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/平丸 早由美/平丸 早由美-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/平丸 早由美/平丸 早由美-IDcard2.jpg'
        }]
    })
});
$('#student19').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/九十九 累/九十九 累-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/九十九 累/九十九 累-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/九十九 累/九十九 累-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/九十九 累/九十九 累-IDcard2.png'
        }]
    })
});
$('#student20').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/熊吉 庫瑪/熊吉 庫瑪-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/熊吉 庫瑪/熊吉 庫瑪-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/熊吉 庫瑪/熊吉 庫瑪-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/熊吉 庫瑪/熊吉 庫瑪-IDcard2.png'
        }]
    })
});
$('#student21').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/泉 綾/泉 綾-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/泉 綾/泉 綾-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/泉 綾/泉 綾-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/泉 綾/泉 綾-IDcard2.png'
        }]
    })
});
$('#student22').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/高田 夏野/高田 夏野-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/高田 夏野/高田 夏野-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/高田 夏野/高田 夏野-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/高田 夏野/高田 夏野-IDcard2.png'
        }]
    })
});
$('#student23').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/宇佐見 颯太/宇佐見 颯太-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/宇佐見 颯太/宇佐見 颯太-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/宇佐見 颯太/宇佐見 颯太-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/宇佐見 颯太/宇佐見 颯太-IDcard2.png'
        }]
    })
});
$('#student24').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/七海 秋/七海 秋-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/七海 秋/七海 秋-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/七海 秋/七海 秋-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/七海 秋/七海 秋-IDcard2.jpg'
        }]
    })
});
$('#student25').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/天之川 時央/天之川 時央-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/天之川 時央/天之川 時央-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/天之川 時央/天之川 時央-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/天之川 時央/天之川 時央-IDcard2.png'
        }]
    })
});
$('#student26').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/魚住 桃果/魚住 桃果-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/魚住 桃果/魚住 桃果-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/魚住 桃果/魚住 桃果-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/魚住 桃果/魚住 桃果-IDcard2.png'
        }]
    })
});
$('#student27').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/藤田 芽天緒/藤田 芽天緒-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/藤田 芽天緒/藤田 芽天緒-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/藤田 芽天緒/藤田 芽天緒-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/藤田 芽天緒/藤田 芽天緒-IDcard2.png'
        }]
    })
});
$('#student28').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/安間 昼/安間 昼-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/安間 昼/安間 昼-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/安間 昼/安間 昼-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/安間 昼/安間 昼-IDcard2.png'
        }]
    })
});
$('#student29').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/月見 葵/月見 葵-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月見 葵/月見 葵-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/月見 葵/月見 葵-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月見 葵/月見 葵-IDcard2.jpg'
        }]
    })
});
$('#student30').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/月見 鬼灯/月見 鬼灯-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月見 鬼灯/月見 鬼灯-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/月見 鬼灯/月見 鬼灯-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月見 鬼灯/月見 鬼灯-IDcard2.jpg'
        }]
    })
});
$('#student31').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/金澤 琉璃子/金澤 琉璃子-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/金澤 琉璃子/金澤 琉璃子-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/金澤 琉璃子/金澤 琉璃子-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/金澤 琉璃子/金澤 琉璃子-IDcard2.jpg'
        }]
    })
});
$('#student32').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/喬牧柼/喬牧柼-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/喬牧柼/喬牧柼-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/喬牧柼/喬牧柼-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/喬牧柼/喬牧柼-IDcard2.png'
        }]
    })
});
$('#student33').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/穂戸田 清衣/穂戸田 清衣-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/穂戸田 清衣/穂戸田 清衣-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/穂戸田 清衣/穂戸田 清衣-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/穂戸田 清衣/穂戸田 清衣-IDcard2.png'
        }]
    })
});
$('#student34').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/座津 世世/座津 世世-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/座津 世世/座津 世世-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/座津 世世/座津 世世-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/座津 世世/座津 世世-IDcard2.jpg'
        }]
    })
});
$('#student35').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/神田 葵/神田 葵-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/神田 葵/神田 葵-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/神田 葵/神田 葵-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/神田 葵/神田 葵-IDcard2.jpg'
        }]
    })
});
$('#student36').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/月島 瞳/月島 瞳-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月島 瞳/月島 瞳-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/月島 瞳/月島 瞳-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月島 瞳/月島 瞳-IDcard2.png'
        }]
    })
});
$('#student37').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐藤 七夜/佐藤 七夜-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐藤 七夜/佐藤 七夜-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐藤 七夜/佐藤 七夜-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐藤 七夜/佐藤 七夜-IDcard2.png'
        }]
    })
});
$('#student38').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/零次 修一/零次 修一-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/零次 修一/零次 修一-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/零次 修一/零次 修一-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/零次 修一/零次 修一-IDcard2.png'
        }]
    })
});
$('#student39').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/伊藤 数彦/伊藤 数彦-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/伊藤 数彦/伊藤 数彦-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/伊藤 数彦/伊藤 数彦-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/伊藤 数彦/伊藤 数彦-IDcard2.png'
        }]
    })
});
$('#student40').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/富上 建志/富上 建志-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/富上 建志/富上 建志-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/富上 建志/富上 建志-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/富上 建志/富上 建志-IDcard2.png'
        }]
    })
});
/*
$('#student28').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/姓氏 名字/姓氏 名字-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/姓氏 名字/姓氏 名字-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/姓氏 名字/姓氏 名字-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/姓氏 名字/姓氏 名字-IDcard2.png'
        }]
    })
});
*/

$('#student_out_1').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/八森 數馬/八森 數馬-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/八森 數馬/八森 數馬-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/八森 數馬/八森 數馬-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/八森 數馬/八森 數馬-IDcard2.png'
        }]
    })
});
$('#student_out_2').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/古座 水季/古座 水季-IDcard1.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/古座 水季/古座 水季-IDcard1.png'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/古座 水季/古座 水季-IDcard2.png',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/古座 水季/古座 水季-IDcard2.png'
        }]
    })
});
$('#student_out_3').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/月澄 末/月澄 末-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月澄 末/月澄 末-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/月澄 末/月澄 末-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/月澄 末/月澄 末-IDcard2.jpg'
        }]
    })
});
$('#student_out_4').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐藤 陽介/佐藤 陽介-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐藤 陽介/佐藤 陽介-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐藤 陽介/佐藤 陽介-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐藤 陽介/佐藤 陽介-IDcard2.jpg'
        }]
    })
});
$('#student_out_5').on('click', function() {
    $(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐倉 和里/佐倉 和里-IDcard1.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐倉 和里/佐倉 和里-IDcard1.jpg'
        },
        {
            "src": 'plugins/lightGallery-master/demo/img/student_file/佐倉 和里/佐倉 和里-IDcard2.jpg',
            'thumb': 'plugins/lightGallery-master/demo/img/student_file/佐倉 和里/佐倉 和里-IDcard2.jpg'
        }]
    })
});















</script>

   
        <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="" data-src="" data-sub-html="">
                    <a id="lightbox_a" href="">
                        <img class="img-responsive" src="">
                    </a>
                </li>
            </ul>
        </div>
     



        <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lightgallery.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lg-fullscreen.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lg-thumbnail.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lg-video.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lg-autoplay.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lg-zoom.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lg-hash.js"></script>
        <script src="plugins/lightGallery-master/demo/js/lg-pager.js"></script>
        <script src="plugins/lightGallery-master/lib/jquery.mousewheel.min.js"></script>
  