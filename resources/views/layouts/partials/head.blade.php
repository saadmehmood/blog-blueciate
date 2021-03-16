<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

<!-- Title -->
<title>Blueciate {{ isset($title) ? ' | ' . $title : '' }}</title>

<!-- Favicon -->
<link rel="icon" href="/img/core-img/favicon.ico">

<!-- Stylesheet -->
<link rel="stylesheet" href="/style.css">
@stack('styles')
<style>
    #footer a {
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    #footer h3 {
        font-weight: 500;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    a{
        text-decoration: none;
    }

    a:hover{
        text-decoration: none;
    }

    p{
        color: #434343;
        font-size: 15px;
    }


    #footer
    {
        background: url(img/bg-img/footer-bg.jpg) center top no-repeat fixed;
        background-size: cover;
        padding-top: 70px;
        padding-bottom: 30px;
        position: relative;
    }
    #footer::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.92);
    }

    #footer .upper-footer
    {
        /*background-color: #03a9f4;*/
        font-family: 'Open Sans', sans-serif;
        padding-bottom: 60px;
    }

    #footer .upper-para{

        font-family: 'Roboto', sans-serif;
        color: #000;
    }

    #footer .item-footer li {
        padding-bottom: 20px;
        font-family: 'Roboto', sans-serif;
        color:#939393;
        padding-left: 5px;
    }
    #footer .item-footer li a {
        color:#939393;
    }
    #footer .item-footer li a:hover {
        color:#212529;
    }

    .icon-fafa
    {
        font-size: 24px;
        color: #03a9f4;
        height: 50px;
        float: left;
    }

    .icon-title
    {
        /*background-color: #939393;*/

    }

    .icon-title li{

        font-family: 'Roboto', sans-serif;
        padding-bottom: 12px;
    }
</style>
