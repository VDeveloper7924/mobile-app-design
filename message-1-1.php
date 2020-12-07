<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/swipe.css">
   
    <link rel="stylesheet" href="./css/homepage-top.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/profilepage.css">
    <link rel="stylesheet" href="./css/tabnav.css">
    <link rel="stylesheet" href="./css/following.css">
    <link rel="stylesheet" href="./css/message-1.css">
</head>
<body>

    <!-- Start of home page -->
    <div data-role="page" id="profilepage" class="page page-message-1">
        
        <div data-role="header" class="header d-jc-b d-a-c">
            <div class="back-arrow">
                <p><a href="message-1-2.php" data-direction="reverse" class="ui-btn">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.16294 1.28033C9.45583 0.987437 9.45583 0.512563 9.16294 0.21967C8.87005 -0.0732233 8.39517 -0.0732233 8.10228 0.21967L0.292893 8.02906C-0.0976311 8.41958 -0.0976311 9.05275 0.292893 9.44327L8.10228 17.2527C8.39517 17.5455 8.87005 17.5455 9.16294 17.2527C9.45583 16.9598 9.45583 16.4849 9.16294 16.192L1.70711 8.73616L9.16294 1.28033Z" fill="#F9F9F9"/>
                    </svg>
                </a>
                </p>
                
            </div>
            <a href="http://" class="man-wrap d-flex"> 
                <div class="avatar">                 
                    <div class="photo-wrap">
                        <img src="./svg/following/avatar-2.svg" alt="" srcset="">
                    </div>
                </div>
                <div class="text d-flex-c d-jc-c">
                    <div class="title">
                        <span>karennne</span>
                    </div>
                    <div class="content">
                        <span>Active</span>
                    </div>
                </div>
            </a><!-- /.swipey-box -->
            <div class="mark">
                <div class="text-wrap">
                    <span>UNFOLLOW</span>
                </div>
            </div>
        </div><!-- /header -->
        <div class="main">
            <div class="mute-messsage d-jc-b d-a-c">
                <span>Mute Messages</span>
                <div class="mute">
                    <input type="checkbox" />
                </div>
            </div>
            <div class="restrict d-jc-b d-a-c">
                <span>Restrict</span>
                <div class="restrict">
                    <input type="checkbox" />
                </div>
            </div>
            <div class="report">
                <span>Report</span>
            </div>
            <div class="block">
                <p><a href="block-report.php" data-direction="reverse" class="ui-btn">
                    <span>Block</span>
                </a></p>
                
            </div>
        </div>
        
        
    </div>
      
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/menu.js"></script>
<script src="./js/swipe.js"></script>
</html>