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
    <link rel="stylesheet" href="./css/message.css">
</head>
<body>

    <!-- Start of home page -->
    <div data-role="page" id="profilepage" class="page page-message">
        
        <div data-role="header" class="header d-jc-b d-a-c">
            <div class="back-arrow">
                <p><a href="homepage.php" data-direction="reverse" class="ui-btn">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.16294 1.28033C9.45583 0.987437 9.45583 0.512563 9.16294 0.21967C8.87005 -0.0732233 8.39517 -0.0732233 8.10228 0.21967L0.292893 8.02906C-0.0976311 8.41958 -0.0976311 9.05275 0.292893 9.44327L8.10228 17.2527C8.39517 17.5455 8.87005 17.5455 9.16294 17.2527C9.45583 16.9598 9.45583 16.4849 9.16294 16.192L1.70711 8.73616L9.16294 1.28033Z" fill="#F9F9F9"/>
                    </svg>
                </a>
                </p>
                
            </div>
            <div class="title d-flex d-a-c">
                <span class="text">Anniee L &nbsp;</span>
                <svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0985 0L5.59853 4.5L1.09853 0L0.25 0.848528L5.59853 6.19706L10.9471 0.848528L10.0985 0Z" fill="#F9F9F9"/>
                </svg>
            </div>
            <div class="plus">
                <p><a href="message-1-2.php" data-direction="reverse" class="ui-btn">
                    <img src="./svg/plus-white.svg" alt="" srcset="">
                </a>
                </p>
                
            </div>

        </div><!-- /header -->
        
        <div data-role="search" class="search d-jc-b d-a-c">
            <div class="input-bar d-flex d-a-c">
                <div class="search-mark d-jc-c d-a-c">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29395 7.129C2.29395 4.26474 4.61588 1.94281 7.48013 1.94281C10.3444 1.94281 12.6663 4.26474 12.6663 7.129C12.6663 9.99325 10.3444 12.3152 7.48013 12.3152C4.61588 12.3152 2.29395 9.99325 2.29395 7.129ZM7.48013 0.44281C3.78745 0.44281 0.793945 3.43632 0.793945 7.129C0.793945 10.8217 3.78745 13.8152 7.48013 13.8152C9.05627 13.8152 10.505 13.2698 11.648 12.3575L13.628 14.3375C13.9209 14.6304 14.3958 14.6304 14.6887 14.3375C14.9816 14.0446 14.9816 13.5698 14.6887 13.2769L12.7087 11.2968C13.621 10.1539 14.1663 8.70512 14.1663 7.129C14.1663 3.43632 11.1728 0.44281 7.48013 0.44281Z" fill="#8E8E93"/>
                    </svg>
                </div>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <div class="cancel-button">
                <button type="button">Cancel</button>
            </div>
        </div><!-- /content -->

        <div data-role="peoples">
            <div class="friend">
                <a href="http://" class="man-wrap active">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-1.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap ">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-2.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap ">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-3.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap active">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-4.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap active">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-5.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap active">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-6.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap active">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-7.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap ">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-8.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
            <div class="friend">
                <a href="http://" class="man-wrap ">
                    <div class="avatar">
                        <div class="photo-wrap">
                            <img src="./svg/message/avatar-9.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="text">
                        <div class="title">
                            <span>joshua_l</span>
                        </div>
                        <div class="content">
                            <span>Have a nice day, bro!</span>
                            <span>· now</span>
                        </div>
                    </div>
                </a><!-- /.swipey-box -->
                <div class="mark">
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2808 0.915938C15.9125 0.344954 15.2795 0 14.6001 0H8.90167C8.22264 0 7.58999 0.344534 7.2216 0.914949L6.17045 2.54253C5.98626 2.82773 5.66993 3 5.33041 3H4.5C2.01472 3 0 5.01472 0 7.5V17.5C0 19.9853 2.01472 22 4.5 22H19C21.4853 22 23.5 19.9853 23.5 17.5V7.5C23.5 5.01472 21.4853 3 19 3H18.17L18.0439 2.99203C17.7532 2.95511 17.4907 2.79184 17.3296 2.54203L16.2808 0.915938ZM8.90167 1.5H14.6001C14.7699 1.5 14.9282 1.58624 15.0202 1.72898L16.0691 3.35508C16.4698 3.97643 17.1242 4.38728 17.8549 4.48008L18.0754 4.49701L19 4.5C20.6569 4.5 22 5.84315 22 7.5V17.5C22 19.1569 20.6569 20.5 19 20.5H4.5C2.84315 20.5 1.5 19.1569 1.5 17.5V7.5C1.5 5.84315 2.84315 4.5 4.5 4.5H5.33041C6.17921 4.5 6.97002 4.06933 7.43051 3.35631L8.48166 1.72874C8.57375 1.58613 8.73192 1.5 8.90167 1.5ZM11.75 6.5C14.9256 6.5 17.5 9.07436 17.5 12.25C17.5 15.4256 14.9256 18 11.75 18C8.57436 18 6 15.4256 6 12.25C6 9.07436 8.57436 6.5 11.75 6.5ZM7.5 12.25C7.5 9.90279 9.40279 8 11.75 8C14.0972 8 16 9.90279 16 12.25C16 14.5972 14.0972 16.5 11.75 16.5C9.40279 16.5 7.5 14.5972 7.5 12.25Z" fill="white" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
        </div><!-- /footer -->
        
    </div>
      
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/menu.js"></script>
<script src="./js/swipe.js"></script>
</html>