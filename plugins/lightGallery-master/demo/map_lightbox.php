
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
            .lg-outer .lg-thumb-outer {
              background-color: rgba(0, 0, 0, 0.45);
            }
            .lg-outer .lg-toogle-thumb{
              top: -56px;
            }
            .lg-sub-html{
              bottom: 15px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script src="plugins/lightGallery-master/demo/map_f1.js"></script>
        <script src="plugins/lightGallery-master/demo/map_f2.js"></script>
        <script src="plugins/lightGallery-master/demo/map_f3.js"></script>
        <script src="plugins/lightGallery-master/demo/map_f4.js"></script>
        <script src="plugins/lightGallery-master/demo/map_f5.js"></script>
        <script src="plugins/lightGallery-master/demo/map_f6.js"></script>
        <script src="plugins/lightGallery-master/demo/map_b1.js"></script>


      
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
  