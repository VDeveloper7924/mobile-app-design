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
    <link rel="stylesheet" href="./css/message-2.css">
</head>
<body>

    <!-- Start of home page -->
    <div data-role="page" id="profilepage" class="page page-message-2">
        
        <div data-role="header" class="header d-jc-b d-a-c">
            <div class="back-arrow">
                <p><a href="homepage.php" data-direction="reverse" class="ui-btn">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.16294 1.28033C9.45583 0.987437 9.45583 0.512563 9.16294 0.21967C8.87005 -0.0732233 8.39517 -0.0732233 8.10228 0.21967L0.292893 8.02906C-0.0976311 8.41958 -0.0976311 9.05275 0.292893 9.44327L8.10228 17.2527C8.39517 17.5455 8.87005 17.5455 9.16294 17.2527C9.45583 16.9598 9.45583 16.4849 9.16294 16.192L1.70711 8.73616L9.16294 1.28033Z" fill="#F9F9F9"/>
                    </svg>
                </a></p>
                
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
                <p><a href="message-1-1.php" data-direction="reverse" class="ui-btn">
                    <svg width="3" height="13" viewBox="0 0 3 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1.5" cy="1.5" r="1.5" fill="white"/>
                        <circle cx="1.5" cy="6.23364" r="1.5" fill="white"/>
                        <circle cx="1.5" cy="10.9673" r="1.5" fill="white"/>
                    </svg>
                </a></p>
                
            </div>
        </div><!-- /header -->
        <div class="messages">
            <div class="message you">
                <div class="time">
                    <span>12:36</span>
                </div>
                
                <div class="message-content">Hello! Finally found the time to write. I need your help with creating interactive animations for my mobile application.
                </div>
            </div>
            <div class="message you">
                <div class="time">
                    <span>12:36</span>
                </div>
                
                <div class="message-content">Hello! Finally found the time to write. I need your help with creating interactive animations for my mobile application.
                </div>
            </div>
            <div class="message my">
                <div class="time">
                    <span>14:03</span>
                </div>
                <div class="message-content">Hey! Okay, send out.</div>
            </div>
            <div class="message you">
                <div class="time">
                    <span>12:36</span>
                </div>
                
                <div class="message-content">Hello! Finally found the time to write. I need your help with creating interactive animations for my mobile application.
                </div>
            </div>
            <div class="message my">
                <div class="time">
                    <span>14:03</span>
                </div>
                <div class="message-content">Hey! Okay, send out.</div>
            </div>
            <div class="message you">
                <div class="time">
                    <span>12:36</span>
                </div>
                
                <div class="message-content">Hello! Finally found the time to write. I need your help with creating interactive animations for my mobile application.
                </div>
            </div>
            <div class="message my">
                <div class="time">
                    <span>14:03</span>
                </div>
                <div class="message-content">Hey! Okay, send out.</div>
            </div>
            <div class="message-end">
                <img src="./svg/message-end.svg" alt="" srcset="">
            </div>
        </div>
        <div class="message-input">
            <div class="me-in-wrap d-flex  d-a-s">
                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0576 0C12.3394 0 12.608 0.118853 12.7976 0.327327L14.8512 2.58634C14.946 2.69057 15.0803 2.75 15.2212 2.75H16.7C18.5225 2.75 20 4.22746 20 6.05V14.7C20 16.5225 18.5225 18 16.7 18H3.3C1.47746 18 0 16.5225 0 14.7V6.05C0 4.22746 1.47746 2.75 3.3 2.75H4.77882C4.91969 2.75 5.05402 2.69057 5.14879 2.58634L7.20243 0.327327C7.39195 0.118853 7.66062 0 7.94237 0H12.0576ZM10 4.5C6.96243 4.5 4.5 6.96243 4.5 10C4.5 13.0376 6.96243 15.5 10 15.5C13.0376 15.5 15.5 13.0376 15.5 10C15.5 6.96243 13.0376 4.5 10 4.5ZM10 6.5C11.933 6.5 13.5 8.067 13.5 10C13.5 11.933 11.933 13.5 10 13.5C8.067 13.5 6.5 11.933 6.5 10C6.5 8.067 8.067 6.5 10 6.5Z" fill="#F2F2F2"/>
                </svg>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="9" cy="9" r="7.75" stroke="#F2F2F2" stroke-width="2.5"/>
                    <path d="M5.72729 10.2273C6.34239 11.4428 7.5771 12.2727 9.00002 12.2727C10.4229 12.2727 11.6577 11.4428 12.2727 10.2273" stroke="#F2F2F2" stroke-width="2.5" stroke-linecap="round"/>
                    <circle cx="6.54548" cy="6.54548" r="0.818182" fill="#F2F2F2"/>
                    <circle cx="11.4547" cy="6.54548" r="0.818182" fill="#F2F2F2"/>
                </svg>
                <input type="text" name="" id="" placeholder="Type a message here">
                    
            </div>
            <div class="message-send d-jc-c  d-a-c">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 1.18274L11.4 17.1827L8.2 9.98274L1 6.78274L17 1.18274Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        
    </div>
    
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/menu.js"></script>
<script src="./js/swipe.js"></script>
</html>