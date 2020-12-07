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
    <link rel="stylesheet" href="./css/month-sut.css">
    <link rel="stylesheet" href="./css/create-post.css">
</head>
<body>

    <!-- Start of home page -->
    <div data-role="page" id="profilepage" class="page page-create-post">
        
        <div data-role="header" class="header d-flex d-a-c">
            <div class="back-arrow">
                <a href="profilepage.php" data-direction="reverse" class="ui-btn">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.16294 1.28033C9.45583 0.987437 9.45583 0.512563 9.16294 0.21967C8.87005 -0.0732233 8.39517 -0.0732233 8.10228 0.21967L0.292893 8.02906C-0.0976311 8.41958 -0.0976311 9.05275 0.292893 9.44327L8.10228 17.2527C8.39517 17.5455 8.87005 17.5455 9.16294 17.2527C9.45583 16.9598 9.45583 16.4849 9.16294 16.192L1.70711 8.73616L9.16294 1.28033Z" fill="#F9F9F9"/>
                    </svg>
                </a>
                
            </div>
            <div class="mark">
                <span>&nbsp;&nbsp;New Post</span>
            </div>
        </div><!-- /header -->
        <div data-role="content" class="content">
            <div class="caption">
                <span class="text">Write a captions</span>
                <img src="./svg/image/post-image.svg" alt="" srcset="">
            </div>
            <div class="people small">
                <span>Tag People</span>
            </div>
            <div class="place small">
                <span>Tag Place</span>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.90601 7.30113C4.90601 5.31109 5.58756 3.88309 6.552 2.95172C7.52549 2.01161 8.83352 1.53259 10.156 1.53259C11.4785 1.5326 12.7865 2.01162 13.76 2.95173C14.7245 3.88311 15.406 5.3111 15.406 7.30113C15.406 10.3505 13.3746 12.9463 11.6705 14.5721C10.8039 15.3988 9.50844 15.3988 8.64183 14.5721C6.93754 12.9463 4.90601 10.3506 4.90601 7.30113ZM16.906 7.30113C16.906 4.94548 16.0876 3.11421 14.802 1.87274C13.5255 0.639999 11.8335 0.0325971 10.156 0.0325928C8.4785 0.0325881 6.78652 0.639982 5.51001 1.87272C4.22445 3.11419 3.40601 4.94546 3.40601 7.30113C3.40601 10.9916 5.82955 13.9624 7.60645 15.6575C9.05262 17.0371 11.2597 17.037 12.7059 15.6574C14.4827 13.9623 16.906 10.9915 16.906 7.30113ZM10.156 5.53259C9.46565 5.53259 8.90601 6.09224 8.90601 6.78259C8.90601 7.47295 9.46565 8.03259 10.156 8.03259C10.8464 8.03259 11.406 7.47295 11.406 6.78259C11.406 6.09224 10.8464 5.53259 10.156 5.53259ZM7.40601 6.78259C7.40601 5.26381 8.63722 4.03259 10.156 4.03259C11.6748 4.03259 12.906 5.26381 12.906 6.78259C12.906 8.30138 11.6748 9.53259 10.156 9.53259C8.63722 9.53259 7.40601 8.30138 7.40601 6.78259ZM3.84388 14.3301C4.00895 14.71 3.83479 15.1518 3.45489 15.3168C2.87723 15.5678 2.46609 15.8325 2.21061 16.0817C1.95718 16.3288 1.90601 16.5087 1.90601 16.6181C1.90601 16.7438 1.9766 16.9688 2.34271 17.2731C2.70436 17.5738 3.27263 17.8781 4.04082 18.1482C5.57036 18.686 7.73236 19.0326 10.156 19.0326C12.5796 19.0326 14.7417 18.686 16.2712 18.1482C17.0394 17.8781 17.6077 17.5738 17.9693 17.2731C18.3354 16.9688 18.406 16.7438 18.406 16.6181C18.406 16.5087 18.3548 16.3288 18.1014 16.0817C17.8459 15.8325 17.4348 15.5678 16.8571 15.3168C16.4772 15.1518 16.3031 14.71 16.4681 14.3301C16.6332 13.9502 17.075 13.776 17.4549 13.9411C18.128 14.2336 18.7169 14.5867 19.1487 15.0078C19.5826 15.431 19.906 15.974 19.906 16.6181C19.906 17.3663 19.4729 17.9738 18.9282 18.4266C18.379 18.8832 17.6292 19.2607 16.7687 19.5633C15.0409 20.1708 12.7029 20.5326 10.156 20.5326C7.60909 20.5326 5.27109 20.1708 3.54327 19.5633C2.68278 19.2607 1.93303 18.8832 1.38383 18.4266C0.839087 17.9738 0.406006 17.3663 0.406006 16.6181C0.406006 15.974 0.729429 15.431 1.1633 15.0078C1.59513 14.5867 2.18398 14.2336 2.85712 13.9411C3.23702 13.776 3.6788 13.9502 3.84388 14.3301Z" fill="#636F7E"/>
                </svg>
                    
            </div>
        </div>
        <div class="button d-flex d-jc-c">
            <button type="button">POST NOW</button>
        </div>
    </div>
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/menu.js"></script>
<script src="./js/swipe.js"></script>
</html>