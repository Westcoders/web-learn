# web-learn
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>程晓杰的网页</title>
    <link href="./css/网页学习项目格式文件.css" rel="stylesheet" />
    <script>
        var scoll = 0;
        var m = document.getElementById("du");
        //var v = m.getElementsByTagName("span");//
        function f1() {
            x =scoll;
            n =scoll;
            if (x<4) {
                x = x + 1;
                y = -440 * x;
                document.getElementById("home").style.left = y+ "px";
                document.getElementById("title").style.left = y+ "px";
                scoll = x;
            }
            else {
                y = 0;
                x = 0;
                document.getElementById("home").style.left = y+ "px";
                document.getElementById("title").style.left = y+ "px";
                scoll = x
            }
        }
        setInterval(f1 , 1000)
    </script>
    <style type="text/css">
        .topimg{
            background-image:url('css/iamges/24e031e495699e234526586deb80c65d337cbe4d.png');
            height:170px;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0px;
            text-align: center;
            font-size: 12px;
        }
        .toplink{
            float: left;
            text-align: center;
            line-height: 42px;
            height: 42px;
            position: relative;
            background-color: hsla(0,0%,100%,0);
            list-style: none;
        }
        .top-li-l{
            float: left;
            text-align: center;
            height: 42px;
            line-height: 42px;
            position: relative;
            -webkit-transition-duration: 0.4s;
        }
            .top-li-l a{
                text-decoration: none;
                color: black;
                height: 100%;
                padding: 0 7px;
                display: inline-block;
        }
            .top-li-l div{
                display: none;
                position: absolute;
                top:42px;
                left: -20px;
                width: 259px;
                height: 174px;
                z-index: 2;
                background-image: url("css/iamges/orcode-frame.png");
                background-size: cover;
        }
            .top-li-l:hover div{
                display: inline-block;
        }
        .top-li-l:hover{
            background:hsla(0,0%,100%,.4);
        }
        .top-li-r{
             float: right;
             text-align: center;
             line-height: 42px;
             height: 42px;
             position: relative;
             list-style: none;
             -webkit-transition-duration: 0.4s;
         }
        .top-li-r >a{
            float: right;
            text-decoration: none;
            color: black;
            height: 100%;
            padding: 0 7px;
            display: inline-block;
        }
        .top-caw{
            float: right;
            text-align: center;
            line-height: 52px;
            position: relative;
            list-style: none;
            -webkit-transition-duration: 0.4s;
        }
        .top-caw >a{
            display: block;
            width: 100%;
            height: 46px;
            padding: 0 7px;
            line-height: 42px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            color: #fff;
            background-color: #f45a8d;
            border-radius: 0 0 6px 6px;
        }
        .top-caw:hover >a{
            background-color: rgba(255, 93, 149, 0.95);
        }
        .top-caw-a{
            float: left;
            position: relative;
            height: 60px;
            text-decoration: none;
            color: #f45a8d;
            padding: 0 7px;
        }
        .top-caw ul{
            overflow: hidden;
            position: absolute;
            display: none;
            border-radius:0 0 8px 8px;
            left: -100px;
            color: #f45a8d;
            width: 310px;
            top: 42px;
            height: 60px;
            padding: 0;
            margin: 0;
            z-index: 2;
            background-color: white;
            list-style-type: none;
            -webkit-transition-duration: 1s;
        }
        .top-caw:hover ul{
            display:inline-block;
        }
        .top-caw-a i{
            display: block;
            background-color: #f45a8d;
            width: 20px;
            height: 20px;
            margin: 15px auto 2px;
            transition: .2s;
        }
        .top-caw-a:hover i{
            margin: 5px auto 12px;
        }
        .top-caw span{
        position: relative;
            top: -20px;
        }
        .top-li-r >ul{
            display: none;
            position: absolute;
            top: 42px;
            left: -500%;
            overflow: hidden;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,.16);
            border: 1px solid #e5e9ef;
            border-radius: 0 0 4px 4px;
            margin: 0;
            padding: 10px 0;
            z-index: 2;
            -webkit-transition-duration: 5s;
        }
            .top-li-r ul >a{
                display: block;
                position: relative;
                float: left;
                list-style-position: inside;
                width: 100%;
                padding: 0 20px;
                margin: 0 0 6px 0;
                text-decoration: none;
                color: black;
                height: 28px;
                line-height: 28px;
                border: 0px;
            }
            .top-li-r ul >a:hover{
                background-color: #e5e9ef;
                color: #00a1d6;
             }
            .top-li-r-ul-li{
                position: relative;
                clear: both;
                overflow: visible;
                height: 0px;
                width: 400px;
                margin: 6px 0 6px 0;
                padding: 0;
                color: #99a2aa;
                border-top: 1px solid #e5e9ef;;
            }
            .top-li-r ul span{
                position: absolute;
                top: -6px;
                height: 12px;
                left: 0;
                line-height: 12px;
                padding: 0 10px;
                color: #99a2aa;
                background-color: white;
            }
        .top-li-r:hover >ul{
            display: inline-block;
        }
        .top-li-r:hover >a{
            background-color: hsla(0, 0%, 100%, .4);
        }
        .head-last {
            position: relative;
            height: 128px;
            width: 1080px;
            top: 0px;
            margin: 0 auto;
        }
        .head-last form{
            background-color: hsla(0,0%,100%,.88);
            display: block;
            height: 32px;
            border: none;
            border-radius: 4px;
            transition: background-color .2s;
        }
        .search form:hover {
            background-color: #fff;
        }
        .search {
            position: absolute;
            bottom: 20px;
            right: 0;
            width: 268px;
            height: 32px;
            padding: 2px 2px 2px 72px;
            background-color: rgba(0,0,0,.12);
            border-radius: 6px;
            font-size: 12px;
            z-index:1;
        }
        .search input {
            float: left;
            width: 200px;
            color: #222;
            font-size: 12px;
            overflow: hidden;
            height: 32px;
            line-height: 32px;
            padding: 0 12px;
            border: none;
            box-shadow: none;
            bottom: 0px;
            background-color: transparent;
        }
        .search >a{
            position: absolute;
            left: 2px;
            top: 2px;
            height: 32px;
            line-height: 32px;
            background-color: #fff;
            background-color: hsla(0,0%,100%,.88);
            border-radius: 4px;
            width: 68px;
            transition: background-color .2s;
        }
        .search >a span{
            padding-left: 26px;
            color: #f25d8e;
            display: inline-block;
            background: url('css/iamges/icons.png') -659px -655px no-repeat;
        }
        .search-buttom {
            display: block;
            position: absolute;
            right: 0;
            width: 48px;
            min-width: 0;
            cursor: pointer;
            height: 32px;
            background: url('css/iamges/icons.png') -653px  -720px;
            margin: 0;
            padding: 0;
            border: 0;
        }
        .search-buttom:hover{
            background: url('css/iamges/icons.png') -718px  -720px;
        }
        .head-last-logo{
            position: absolute;
            width: 220px;
            height: 105px;
            left: 210px;
            top: 55px;
            background: url('css/iamges/f612c0b3c80c42aa2f00de067f4c11f0ef873ac1.png');
            z-index: 1;
        }
    </style>
    <style type="text/css">
        .wrapper{
            position: relative;
            margin: 0 auto;
            height: 59px;
            width: 100%;
        }
        .wrapper >div{
            position: relative;
            padding: 8px 0 0;
            margin: 0 auto 4px;
            width: 1080px;
            height: 50px;
        }
        .wrapper-ul{
            position: relative;
            margin: 0 auto;
            padding: 0;
            z-index:1;
            height: 42px;
            color: #222;
        }
        .wrapper-ul-home{
            position: relative;
            float: left;
            margin-right: 8px;
            width: 24px;
            display: block;
            text-align: center;
        }
        .wrapper-ul-home a{
            position: relative;
            display: block;
            text-decoration: none;
            width: auto;
            background: url("css/iamges/icons.png") -660px -1170px no-repeat;
        }
        .wrapper-ul-home a div{
            position: relative;
            top: 20px;
            height: 40px;
            font-size: 12px;
            line-height: 20px;
        }
        .wrapper-ul-li{
            position: relative;
            float: left;
            margin-right: 0px;
            width: 50px;
            display: block;
            text-align: center;
        }
        .wrapper-ul-li >a{
            position: relative;
            display: block;
            text-decoration: none;
            width: auto;
            z-index: 1;
            -webkit-transition-duration: 1s
        }
        .wrapper-ul-li-wrap{
            position: absolute;
            top: 8px;
            left: 0;
            height: 14px;
            width: 100%;
            text-align: center;
        }
        .wrapper-ul-li-wrap span{
            display: inline-block;
            vertical-align: top;
            font-size: 12px;
            transform: scale(.85);
            color: #fff;
            background-color: #ffafc9;
            border-radius: 3px;
            height: 12px;
            line-height: 14px;
            max-width: 28px;
            padding: 1px 3px;
            font-family: sans-serif,sans-serifsans-serif,Calibri,Arial,Helvetica;
        }
       .wrapper-ul-li-name{
           position: relative;
           display: block;
           padding-top: 8px;
           height: 40px;
           width: 100%;
           color: black;
           line-height: 50px;
           font-size: 12px;
       }
        .wrapper-ul-li-ul{
            display: none;
            position: absolute;
            left: 0;
            padding: 0;
            overflow: hidden;
            top: 48px;
            background: #fff;
            border: 1px solid\9;
            border-top: 0;
            box-shadow: 0 2px 4px rgba(0,0,0,.16);
            border-radius: 0 0 4px 4px;
        }
        .wrapper-ul-li >a:hover +ul{
            display: inline-block;
        }
        .wrapper-ul-li >a +ul:hover{
            display: inline-block;
        }
        .wrapper-ul-li-ul li{
            position: relative;
            font-size: 12px;
            line-height: 20px;
            min-width: 120px;
            height: auto;
            overflow: hidden;
            text-align: left;
            -webkit-transition: all .2s;
        }
        .wrapper-ul-li-ul li:hover{
            background-color: #e5e9ef;
        }
        .wrapper-ul-li-ul a{
            display: block;
            padding: 5px 15px 5px 25px;
            margin-right: 10px;
            background: url('css/iamges/icons2.png') no-repeat 12px -1613px;
            white-space: nowrap;
            -webkit-transition: all .2s;
            overflow: hidden;
            position: relative;
            list-style: none;
            text-decoration: none;
            left: 0;
            color: #222;
        }
        .wrapper-ul-li-ul li:hover a{
            left: 5px;
        }
        .wrapper-ul-li-ul a span{
            position: relative;
        }
        .wrapper-ul-li-ul a span:after{
            content: "";
            background:url('css/iamges/icons2.png') no-repeat 0 -1581px;;
            width: 15px;
            height: 18px;
            display: block;
            position: absolute;
            right: -120px;
            top: -1.5px;
            -webkit-transition: right .2s;
        }
        .wrapper-ul-li-ul a:hover span:after{
            right: -21px;
        }
        .wrapper-ul-other{
            position: relative;
            float: left;
            margin: 0 3px;
            width: 46px;
            display: block;
            font-size: 12px;
            text-align: center;
        }
        .wrapper-ul-other >a{
            display: inline-block;
            position: relative;
            overflow: hidden;
            color: black;
            text-decoration: none;
        }
        .wrapper-ul-other >a:hover span{
            color: #1890ff;
        }
        .zhuanlan{
            display: block;
            width: 18px;
            height: 18px;
            margin: 3px auto 2px auto;
            background: url('css/iamges/icons.png') -87px -1814px no-repeat;
        }
        .guangchang{
            display: block;
            width: 18px;
            height: 18px;
            margin: 3px auto 2px auto;
            background: url('css/iamges/icons.png') -87px -2006px no-repeat;
        }
        .wrapper-ul-other:hover >div{
            display: block;
        }
        .wrapper-ul-other-guangchang{
            display: none;
            position: absolute;
            width: 387px;
            height: 188px;
            padding: 20px 0;
            overflow: hidden;
            border-radius: 0 0 4px 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,.16);
            background-color: white;
            z-index: 3;
        }
        .wrapper-ul-other-guangchang ul{
            width: 107px;
            display: block;
            white-space: nowrap;
            list-style: none;
            position: relative;
            top: -6px;
            margin: 0;
            padding: 0;
        }
        .wrapper-ul-other-guangchang li{
            min-width: 107px;
            position: relative;
            overflow: hidden;
            margin-top: 8px;
            text-align: left;
            font-size: 12px;
            line-height: 20px;
            transition: all .2s;
        }
        .wrapper-ul-other-guangchang li:hover{
            background: #e5e9ef;
        }
        .wrapper-ul-other-guangchang li:hover a{
            left: 5px;
        }
        .wrapper-ul-other-guangchang li:hover span:after{
            right: -21px;
        }
        .wrapper-ul-other-guangchang a{
            display: block;
            position: relative;
            overflow: hidden;
            margin: 0 10px 0 0;
            left: 0;
            white-space: nowrap;
            text-decoration: none;
            color: black;
            padding: 2px 10px 2px 18px;
            transition: all .2s;
        }
        .wrapper-ul-other-guangchang i{
            display: inline-block;
            width: 16px;
            height: 13px;
            margin-right: 4px;
            background-position: 50%;
            background-repeat: no-repeat;
        }
        .wrapper-ul-other-guangchang span{
            position: relative;
        }
        .wrapper-ul-other-guangchang span:after{
            content: "";
            background: url(css/iamges/icons2.png) no-repeat 0 -1581px;
            width: 15px;
            height: 18px;
            display: block;
            position: absolute;
            right: -100px;
            top: -3px;
            transition: all .2s;
            opacity: 0;
        }
        .wrapper-ul-other-guangchang >div{
            position: absolute;
            top: 60px;
            left: 107px;
            white-space: nowrap;
            display: block;
            width: 240px;
            height: 188px;
            padding: 0 20px 0 19px;
            border-left: 1px solid #e5e9ef;
        }
        .wrapper-ul-other-guangchang-poster >div:first-child{
            margin-top: 0;
            display: block;
        }
        .wrapper-ul-other-guangchang-poster >div{
            margin-top: 20px;
        }
        .wrapper-ul-other-guangchang-poster a{
            color: #222;
            line-height: normal;
            margin: 0;
            padding: 0;
            display: block;
        }
        .wrapper-ul-other-guangchang-poster a div{
            background: url(css/iamges/img_loading.png) 50% no-repeat;
            width: 100%;
            height: 100%;
            display: inline-block;
        }
        .wrapper-ul-other-guangchang-poster img{
            width: 240px;
            height: 84px;
            border-radius: 4px;
        }
        .live{
            display: block;
            width: 18px;
            height: 18px;
            margin: 3px auto 2px auto;
            background: url('css/iamges/icons.png') -87px -1878px no-repeat;
        }
        .wrapper-ul-other-live{
            display: none;
            width: 350px;
            height: 260px;
            position: absolute;
            padding: 10px 0;
            overflow: hidden;
            border-radius: 0 0 4px 4px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,.16);
        }
        .wrapper-ul-other-live ul{
            float: left;
            display: block;
            list-style: none;
            position: relative;
            top: -6px;
            margin: 0;
            padding: 0;
        }
        .wrapper-ul-other-live li{
            min-width: 100px;
            position: relative;
            overflow: hidden;
            margin-top: 8px;
            text-align: left;
            font-size: 12px;
            line-height: 20px;
            transition: all .2s;
        }
        .wrapper-ul-other-live li:hover{
            background: #e5e9ef;
        }
        .wrapper-ul-other-live li:hover a{
            left: 5px;
        }
        .wrapper-ul-other-live li:hover span:after{
            right: -21px;
            opacity: 1;
        }
        .wrapper-ul-other-live ul a{
            display: block;
            position: relative;
            overflow: hidden;
            margin: 0 10px 0 0;
            left: 0;
            background: url(css/iamges/icons2.png) no-repeat 12px -1613px;;
            white-space: nowrap;
            text-decoration: none;
            color: black;
            padding: 5px 15px 5px 25px;
            transition: all .2s;
        }
        .wrapper-ul-other-live span{
            position: relative;
        }
        .wrapper-ul-other-live span:after{
            content: "";
            background: url(css/iamges/icons2.png) no-repeat 0 -1581px;
            width: 15px;
            height: 18px;
            display: block;
            position: absolute;
            right: -100px;
            top: -3px;
            transition: all .2s;
            opacity: 0;
        }
        .wrapper-ul-other-live >div{
            display: inline;
            float: left;
            width: 210px;
            height: 220px;
            padding: 0 0 0 20px;
            margin: 10px 0;
            border-left: 1px solid #e5e9ef;
        }
        .wrapper-ul-other-live-poster a{
            color: #222;
            line-height: normal;
            margin: 0 0 20px 0;
            padding: 0;
            display: inline-block;
        }
        .wrapper-ul-other-live-poster img{
            border: none;
            border-radius: 4px;
        }
        .xiaoheiwu{
            display: block;
            width: 18px;
            height: 18px;
            margin: 3px auto 2px auto;
            background: url('css/iamges/icons.png') -87px -1942px no-repeat;
        }
        .wrapper-gif{
            position: absolute;
            display: inline-block;
            top: 0;
            z-index: 2;
            padding: 8px 0 0 5px;
        }
        .wrapper-gif a{
            display: block;
            width: 69px;
            height: 40px;
        }
        .wrapper-gif a img{
            width: 100%;
            height: 100%;
            border-radius: 3px;
        }
    </style>
    <style type="text/css">
        .body{
            margin: 0 auto;
            position: relative;
            width: 1160px;
            overflow: hidden;
            display: block;
            z-index: 0;
        }
        .home{
            padding: 0 0 40px 0;
            width: 1160px;
            display: block;
            margin: 0 auto;
        }
        .scoll{
            width: 440px;
            height: 220px;
            float: left;
            overflow: hidden;
            background: #00a1d6;
            border-radius: 8px;
            z-index: 0;
        }
        .scoll ul:first-child{
            margin: 0;
            padding: 0;
            width: 2200px;
            position: relative;
            list-style: none;
            height: 220px;
            -webkit-transition: all 0.5s;
        }
        .scoll ul:first-child:hover a {
            display: block;
        }
        .scoll ul:first-child li{
            position: relative;
            display: block;
            float: left;
            width: 440px;
            height: 220px;
        }
        .scoll ul:first-child li img{
            display: inline;
            width: 440px;
            height: 220px;
        }
        .more{
            text-decoration: none;
            position: absolute;
            display: none;
            width: 50px;
            height: 24px;
            right: 15px;
            bottom: 35px;
            color: white;
            text-align: center;
            line-height: 24px;
            font-size: 12px;
            border-radius: 4px;
            background: rgba(0,0,0,.64);
            z-index: 1;
        }
        .more:after{
            content: "";
            display: inline-block;
            width: 6px;
            height: 12px;
            margin: -2px 0 0 5px;
            vertical-align: middle;
            background: url(css/iamges/icons.png) -541px -218px;
        }
        .title{
            margin: 0;
            padding: 0;
            top:-35px;
            width: 2200px;
            position: relative;
            list-style: none;
            height: 35px;
        }
        .title a {
            display: inline-block;
            color: white;
            position: relative;
            float: left;
            text-decoration: none;
            left: 0;
            margin-right: 150px;
            padding-left: 10px;
            font-size: 14px;
            line-height: 35px;
            width: 280px;
            height: 35px;
        }
        .trig{
            counter-reset: section;
            position: relative;
            z-index: 3;
            top: -70px;
            left: 280px;
            height: 35px;
            margin: 0;
            padding: 0;
        }
        .trig span{
            width: 18px;
            height: 18px;
            margin: 8px 0 8px 8px;
            transition: none;
            display: inline-block;
            border-radius: 10px;
            background: url(css/iamges/icons.png) -855px -790px;
            cursor: pointer;
        }
        .trig span:hover{
            margin: 8px 0 8px 8px;
            transition: none;
            display: inline-block;
            border-radius: 10px;
            background: url(css/iamges/icons.png) -919px -790px;
            cursor: pointer;
        }
        .scoll-right{
            margin: 0 0 0 440px;
            padding:0;
            width: 760px;
            height: 220px;
            position: relative;

        }
        .scoll-right:after{

        }
        .scoll-right-d{
            position: relative;
            float: left;
            padding: 0;
            margin:0 0 20px 20px;
            width: 160px;
            height: 100px;
            overflow: hidden;
            border-radius: 4px;
            background-color: #1890ff;
        }
        .scoll-right > span:first-child{
            border-radius: 0 4px 4px 0;
            padding: 13px 5px 13px 10px;
            left: 20px;
            background-position: 6px -1211px;

        }
        .scoll-right span{
            font-size: 12px;
            text-align: center;
            margin-top: -8px;
            position: absolute;
            display: inline-block;
            padding: 13px 10px 13px 5px;
            border-radius: 4px 0 0 4px;
            top: 88px;
            right: 40px;
            width: 20px;
            color: white;
            cursor: pointer;
            opacity: 0;
            background-color: rgba(0,0,0,.6);
            background-image: url("css/iamges/icons2.png");
            transition: all 0.3s;
            z-index: 2;
            background-position: 25px -1262px;
            background-repeat: no-repeat;
        }
        .scoll-right:hover span{
            opacity: 1;
        }
        .scoll-right-d a {
            position: relative;
            background: #ffafc9;
            display: inline-block;
            border-radius: 4px;
            width: 160px;
            height: 100px;
        }
        .scoll-right-d a img {

        }
        .srdp1{
            position: absolute;
            margin: 0;
            padding: 10px 5px;
            height: 20px;
            width: 150px;
            overflow: hidden;
            background:linear-gradient(transparent,rgba(0,0,0,.1) 20%,rgba(0,0,0,.2) 35%,rgba(0,0,0,.6) 65%,rgba(0,0,0,.9));
            bottom: 0;
            color: white;
            font-size: 12px;
            line-height: 30px;
        }
        .scoll-right-d:hover .srdp1{
            display: none;
        }
        .srd-action{
            position: absolute;
            padding: 10px 5px;
            background: rgba(0,0,0,.7);
            width: 150px;
            height: 100%;
            opacity: 0;
            font-size: 12px;
            color: white;
        }
        .scoll-right-d:hover .srd-action{
            opacity: 1;
        }
        .srdp2 {
            height: 40px;
            margin: 0 0 5px 0;
            padding: 0;
        }
        .uphost{
            position: relative;
            opacity: 0;
            color: #99a2aa;
            line-height: 20px;
            margin: 0;
            padding: 0;
            bottom: 0;
            transition: all 0.6s;
        }
        .scoll-right-d:hover .uphost{
            opacity: 1;
        }
        .srd-action div {
            width: 22px;
            height: 22px;
            position: absolute;
            right: 6px;
            bottom: 4px;
            cursor: pointer;
        }
        .later-watch{
            display: none;
            padding: 0;
            margin: 0;
            width: 22px;
            height: 22px;
            position: absolute;
            right: 6px;
            bottom: 4px;
            cursor: pointer;
            background-image: url("css/iamges/watch-later.png");
        }
        .scoll-right-d:hover .later-watch{
            display: block;
        }
        .to-pop{
            margin: auto;
            padding: 0;
            width: 1160px;
            background-color: #74d65f;
        }
        .pop{
            margin: 0;
            padding: 0 0 15px;
            width: 720px;
            display: inline-block;
        }
        .pop i{
            float: left;
            margin-right: 10px;
            background: url("css/iamges/icons.png") -141px -75px;
            display: inline-block;
            width: 40px;
            height: 40px;
            position: relative;
        }
        .pop span{
            margin-right: 20px;
            display: inline-block;
            font-size: 24px;
            line-height: 40px;
            position: relative;
        }
        .now-data{
            margin: 0;
            padding: 0;
            width: 260px;
            background-color: #70e1b6;
            border-radius: 4px;
            height: 40px;
            display: inline-block;
            position: absolute;
            right: 0;
        }
        .online{
            position: relative;
            height: 34px;
            line-height: 34px;
            padding: 0 10px;
            text-align: center;
            border-radius: 4px;
            background: #e5e9ef;
            white-space: nowrap;
        }
        .online a{
            font-size: 12px;
            color: #6d757a;
            display: inline;
            text-align: center;
            text-decoration: none;
        }
        .online a:hover{
            color: #00a1d6;
        }
        .online em{
            display: inline-block;
            border-left: 1px solid #b8c0cc;
            height: 10px;
            line-height: 10px;
            margin: 12px 15px 0;
            vertical-align: top;
        }
    </style>
</head>
<body style="margin: 0px">
<div>
    <div class="topimg" >
        <div class="topimg"  style="position: absolute;height: 42px;">
        </div>
        <div style="height: 42px; background-color: hsla(0,0%,100%,.4); margin-top: 0px;
             box-shadow: 0 1px 2px rgba(0,0,0,.1);">
            <div style="width: 1080px; height: 42px; margin: 0 auto;">
                <div class="toplink">
                    <li class="top-li-l">
                        <a href="https://www.bilibili.com/" title="主站">
                            <i style="background: url('css/iamges/icons.png') -918px -74px; height: 42px;width: 20px; top: 0;left: -12px;display: inline-block;position: absolute;"></i>
                            主站
                        </a>
                    </li>
                    <li class="top-li-l">
                        <a href="https://h.bilibili.com/" title="画友">画友</a>
                    </li>
                    <li class="top-li-l">
                        <a href="https://www.bilibili.com/audio/home/?type=10" title="音频">音频</a>
                    </li>
                    <li class="top-li-l">
                        <a href="https://game.bilibili.com/" title="游戏中心">游戏中心</a>
                    </li>
                    <li class="top-li-l">
                        <a href="https://live.bilibili.com/" title="直播">直播</a>
                    </li>
                    <li class="top-li-l">
                        <a href="https://show.bilibili.com/platform/home.html?msource=pc_web" title="会员购" >会员购</a>
                    </li>
                    <li class="top-li-l" type="image">
                        <a href="https://manga.bilibili.com/" title="漫画">漫画</a>
                    </li>
                    <li class="top-li-l"  >
                        <a href="https://app.bilibili.com/">下载APP</a>
                        <div style=""></div>
                    </li>
                </div>
                <div class="toplink-r">
                    <li class="top-caw">
                        <a href="https://member.bilibili.com/v2#/upload/video/frame">投稿</a>
                        <ul>
                            <li>
                                <a class="top-caw-a" href="https://member.bilibili.com/v2#/upload/text/apply">
                                    <i></i>
                                    <span>专栏投稿</span>
                                </a>
                                <a class="top-caw-a" href="https://member.bilibili.com/v2#/upload/audio/">
                                    <i></i>
                                    <span>音频投稿</span>
                                </a>
                                <a class="top-caw-a" href="https://member.bilibili.com/v2#/upload/video/frame">
                                    <i></i>
                                    <span>视频投稿</span>
                                </a>
                                <a class="top-caw-a" href="https://member.bilibili.com/v2#/upload-manager/article">
                                    <i></i>
                                    <span>投稿管理</span>
                                </a>
                                <a class="top-caw-a" href="https://member.bilibili.com/v2#/home">
                                    <i></i>
                                    <span>创作中心</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="top-li-r">
                        <a href="https://www.bilibili.com/account/history">历史</a>
                        <ul>
                            <li class="top-li-r-ul-li">
                                <span>今日</span>
                            </li>
                            <a class="https://www.bilibili.com/account/history">无</a>
                            <li class="top-li-r-ul-li">
                                <span>今日</span>
                            </li>
                            <a href="https://www.bilibili.com/account/history">无</a>
                        </ul>
                    </li>
                    <li class="top-li-r">
                        <a href="https://space.bilibili.com/25661470/favlist">收藏</a>
                        <ul>
                            <a>1231231321231321321321</a>
                        </ul>
                    </li>
                    <li class="top-li-r">
                        <a href="https://www.bilibili.com/watchlater/#/list">稍后再看</a>
                        <ul>
                            <a>1231231321231321321321</a>
                        </ul>
                    </li>
                    <li class="top-li-r">
                        <a href="https://t.bilibili.com/">动态</a>
                        <ul>
                            <a>1231231321231321321321</a>
                        </ul>
                    </li>
                    <li class="top-li-r">
                        <a href="https://message.bilibili.com/">消息</a>
                        <ul>
                            <a>1231231321231321321321</a>
                        </ul>
                    </li>
                    <li class="top-li-r">
                        <a href="https://account.bilibili.com/account/big">大会员</a>
                        <ul>
                            <a>1231231321231321321321</a>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
        <div>
            <div class="head-last">
                <div class="search">
                    <form>
                        <input name="" placeholder="Hello光头强">
                        <button type="submit" class="search-buttom"></button>
                    </form>
                    <a href="https://www.bilibili.com/ranking"><span>排行榜</span></a>
                </div>
            </div>
            <a class="head-last-logo" href="https://www.bilibili.com"></a>
        </div>
    </div>
    <div class="wrapper">
        <div>
            <ul class="wrapper-ul">
                <li class="wrapper-ul-home">
                    <a href="https://www.bilibili.com/">
                        <div>首页</div>
                    </a>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/douga/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">动画</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li>
                            <a href="https://www.bilibili.com/v/douga/mad/">
                                <span>MAD·AMV</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/douga/mmd/">
                                <span>MMD.3D</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/douga/voice/">
                                <span>短片·手书·配音</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/douga/other/">
                                <span>综合</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/anime/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">番剧</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li>
                            <a href="https://www.bilibili.com/v/anime/serial/">
                                <span>连载动画</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/anime/finish/">
                                <span>完结动画</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/anime/finish/">
                                <span>资讯</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/anime/offical/">
                                <span>官方延伸</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/anime/timeline/">
                                <span>新番时间表</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/anime/index/">
                                <span>番剧索引</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/guochuang/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">国创</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li>
                            <a href="https://www.bilibili.com/v/guochuang/chinese/">
                                <span>国产动画</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/guochuang/original/">
                                <span>国产原创相关</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/guochuang/puppetry/">
                                <span>布袋戏</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/v/guochuang/information/">
                                <span>资讯</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/anime/timeline/">
                                <span>新番时间表</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bilibili.com/anime/index/">
                                <span>国产动画索引</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/music/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">音乐</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/music/original/"><span>原创音乐</span></a></li>
                        <li><a href="https://www.bilibili.com/v/music/cover/"><span>翻唱</span></a></li>
                        <li><a href="https://www.bilibili.com/v/music/vocaloid/"><span>VOCALOID·UTAU</span></a></li>
                        <li><a href="https://www.bilibili.com/v/music/electronic/"><span>电音</span></a></li>
                        <li><a href="https://www.bilibili.com/v/music/perform/"><span>演奏</span></a></li>
                        <li><a href="https://www.bilibili.com/v/music/mv/"><span>MV</span></a></li>
                        <li><a href="https://www.bilibili.com/v/music/live/"><span>音乐现场</span></a></li>
                        <li><a href="https://www.bilibili.com/v/music/other/"><span>音乐综合</span></a></li>
                        <li><a href="https://www.bilibili.com/audio/home?musicType=music"><span>音频</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/dance/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">舞蹈</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/dance/otaku/"><span>宅舞</span></a></li>
                        <li><a href="https://www.bilibili.com/v/dance/three_d/"><span>三次元舞蹈</span></a></li>
                        <li><a href="https://www.bilibili.com/v/dance/demo/"><span>舞蹈教程</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/game/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">游戏</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/game/stand_alone/"><span>单机游戏</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/esports/"><span>电子竞技</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/mobile/"><span>手机游戏</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/online/"><span>网络游戏</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/board/"><span>桌游棋牌</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/gmv/"><span>GMV</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/music/"><span>音游</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/mugen/"><span>Mugen</span></a></li>
                        <li><a href="https://www.bilibili.com/v/game/match/"><span>游戏赛事</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/technology/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">科技</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/technology/fun/"><span>趣味科普人文</span></a></li>
                        <li><a href="https://www.bilibili.com/v/technology/wild/"><span>野生技术协会</span></a></li>
                        <li><a href="https://www.bilibili.com/v/technology/speech_course/"><span>演讲公开课</span></a></li>
                        <li><a href="https://www.bilibili.com/v/technology/military/"><span>星海</span></a></li>
                        <li><a href="https://www.bilibili.com/v/technology/mechanical/"><span>机械</span></a></li>
                        <li><a href="https://www.bilibili.com/v/technology/automobile/"><span>汽车</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/digital/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">数码</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/digital/mobile/"><span>手机平板</span></a></li>
                        <li><a href="https://www.bilibili.com/v/digital/pc/"><span>电脑装机</span></a></li>
                        <li><a href="https://www.bilibili.com/v/digital/photography/"><span>摄影摄像</span></a></li>
                        <li><a href="https://www.bilibili.com/v/digital/intelligence_av/"><span>音影智能</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/life/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">生活</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/life/funny/"><span>搞笑</span></a></li>
                        <li><a href="https://www.bilibili.com/v/life/daily/"><span>日常</span></a></li>
                        <li><a href="https://www.bilibili.com/v/life/food/"><span>美食圈</span></a></li>
                        <li><a href="https://www.bilibili.com/v/life/animal/"><span>动物圈</span></a></li>
                        <li><a href="https://www.bilibili.com/v/life/handmake/"><span>手工</span></a></li>
                        <li><a href="https://www.bilibili.com/v/life/painting/"><span>绘画</span></a></li>
                        <li><a href="https://www.bilibili.com/v/life/sports/"><span>运动</span></a></li>
                        <li><a href="https://www.bilibili.com/v/life/other/"><span>其他</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/kichiku/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">鬼畜</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/kichiku/guide/"><span>鬼畜调教</span></a></li>
                        <li><a href="https://www.bilibili.com/v/kichiku/mad/"><span>音MAD</span></a></li>
                        <li><a href="https://www.bilibili.com/v/kichiku/manual_vocaloid/"><span>人力VOCALOID</span></a></li>
                        <li><a href="https://www.bilibili.com/v/kichiku/course/"><span>教程演示</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/fashion/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">时尚</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/fashion/makeup/"><span>美妆</span></a></li>
                        <li><a href="https://www.bilibili.com/v/fashion/clothing/"><span>服饰</span></a></li>
                        <li><a href="https://www.bilibili.com/v/fashion/aerobics/"><span>健身</span></a></li>
                        <li><a href="https://www.bilibili.com/v/fashion/catwalk/"><span>T台</span></a></li>
                        <li><a href="https://www.bilibili.com/v/fashion/trends/"><span>风尚标</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/ad/ad/">
                        <div class="wrapper-ul-li-wrap"><span>204</span></div>
                        <div class="wrapper-ul-li-name">广告</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a><span></span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/ent/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">娱乐</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/ent/variety/"><span>综艺</span></a></li>
                        <li><a href="https://www.bilibili.com/v/ent/star/"><span>明星</span></a></li>
                        <li><a href="https://www.bilibili.com/v/ent/korea/"><span>Korea相关</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/v/cinephile/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">影视</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/v/cinephile/cinecism/"><span>影视杂谈</span></a></li>
                        <li><a href="https://www.bilibili.com/v/cinephile/montage/"><span>影视剪辑</span></a></li>
                        <li><a href="https://www.bilibili.com/v/cinephile/shortfilm/"><span>短片</span></a></li>
                        <li><a href="https://www.bilibili.com/v/cinephile/trailer_info/"><span>预告资讯</span></a></li>
                        <li><a href="https://www.bilibili.com/v/cinephile/tokusatsu/"><span>特摄</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-li">
                    <a href="https://www.bilibili.com/cinema/">
                        <div class="wrapper-ul-li-wrap"><span>999+</span></div>
                        <div class="wrapper-ul-li-name">放映厅</div>
                    </a>
                    <ul class="wrapper-ul-li-ul">
                        <li><a href="https://www.bilibili.com/documentary/"><span>纪录片</span></a></li>
                        <li><a href="https://www.bilibili.com/movie/"><span>电影</span></a></li>
                        <li><a href="https://www.bilibili.com/tv/"><span>电视剧</span></a></li>
                    </ul>
                </li>
                <li class="wrapper-ul-other">
                    <a href="https://www.bilibili.com/read/home">
                        <i class="zhuanlan"></i>
                        <span>专栏</span>
                    </a>
                </li>
                <li class="wrapper-ul-other">
                    <a href="https://www.bilibili.com/blackboard/x/act_list">
                        <i class="guangchang"></i>
                        <span>广场</span>
                    </a>
                    <div class="wrapper-ul-other-guangchang">
                        <ul>
                            <li>
                                <a href="https://show.bilibili.com/platform/home.html">
                                    <i style="background-image: url(css/iamges/icon-pc.png)"></i>
                                    <span>会员购</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://game.bilibili.com">
                                    <i style="background: url(css/iamges/icons.png) -279px -1241px;"></i>
                                    <span>游戏中心</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://h.bilibili.com">
                                    <i style="background: url(css/iamges/icons.png) -280px -1370px;"></i>
                                    <span>画友</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.bilibili.com/mango">
                                    <i style="background: url(css/iamges/icons.png) -280px -1433px;"></i>
                                    <span>芒果TV</span>
                                </a>
                            </li>
                        </ul>
                        <div class="wrapper-ul-other-guangchang-poster">
                            <a href="https://www.bilibili.com/blackboard/x/act_list">
                                <img src="css/iamges/6830d0e479eee8cc9a42c3e375ca99a5147390cd.jpg@300w_105h.webp">
                            </a>
                            <a href="https://www.bilibili.com/blackboard/topic_list.html">
                                <img src="css/iamges/b1b00a0c3ce8570b48277ae07a2e55603a4a4ddf.jpg@300w_105h.webp">
                            </a>
                        </div>
                    </div>
                </li>
                <li class="wrapper-ul-other">
                    <a href="https://live.bilibili.com/">
                        <i class="live"></i>
                        <span>直播</span>
                    </a>
                    <div class="wrapper-ul-other-live">
                        <ul>
                            <li>
                                <a href="https://live.bilibili.com/all?visit_id=5icxsa0kmts0">
                                    <span>全部直播</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://live.bilibili.com/p/eden/area-tags?parentAreaId=2&areaId=0&visit_id=5icxsa0kmts0#/2/0">
                                    <span>游戏直播</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://live.bilibili.com/p/eden/area-tags?parentAreaId=3&areaId=0&visit_id=5icxsa0kmts0#/3/0">
                                    <span>手游直播</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://live.bilibili.com/p/eden/area-tags?parentAreaId=1&areaId=0&visit_id=5icxsa0kmts0#/1/0">
                                    <span>娱乐直播</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://live.bilibili.com/p/eden/area-tags?parentAreaId=5&areaId=0&visit_id=5icxsa0kmts0#/5/0">
                                    <span>电台直播</span></a></li>
                            <li><a href="https://live.bilibili.com/p/eden/area-tags?parentAreaId=4&areaId=0&visit_id=5icxsa0kmts0#/4/0">
                                <span>绘画直播</span>
                            </a>
                            </li>
                        </ul>
                        <div class="wrapper-ul-other-live-poster">
                            <div>
                                <a href="https://h.bilibili.com/"><div><img src="css/iamges/wh2.png"></div></a>
                            </div>
                            <div>
                                <a href="https://vc.bilibili.com/"><div><img src="css/iamges/sp2.png"></div></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-ul-other"><a href="https://www.bilibili.com/blackroom/"><i class="xiaoheiwu"></i><span>小黑屋</span></a></li>
            </ul>
            <div class="wrapper-gif">
                <a href="https://www.bilibili.com/bangumi/play/ss26484">
                    <img src="css/iamges/5e889fec08dab8cd8f7c6cc0478265ecb9839493.gif">
                </a>
            </div>
        </div>
    </div>
    <div class="body" id="首页">
        <div class="home" >
            <div class="scoll" id="scoll" >
                <ul id="home" style="left: 0;">
                    <li>
                        <a href="https://www.bilibili.com/read/cv2838610">
                            <img src="css/iamges/f23b9f5fecaff3b3801612af40b155474663a291.png@880w_440h.png">
                        </a>
                        <a class="more" href="https://www.bilibili.com/blackboard/topic_list.html">更多</a>
                    </li>
                    <li>
                        <a href="https://www.bilibili.com/read/cv2717351?from=1002">
                            <img src="css/iamges/e7756b7856b8501121cf54e950af5a76.jpg@880w_440h.jpg">
                        </a>
                        <a class="more" href="https://www.bilibili.com/blackboard/topic_list.html">更多</a>
                    </li>
                    <li>
                        <a href="https://cm.bilibili.com/cm/api/fees/pc/sync/v2?msg=a%7C26%2Cb%7Cbilibili%2Cc%7C1%2Cd%7C1%2Ce%7CCAAQABiAoKXL0vagqQMgACgAMCQ4GkIhMTU2MDE1MjY5NjIyM3ExNzJhMjJhNDlhMTUycTE4MDQ3SJ%2FL44K0LVIG6YOR5beeWgbmsrPljZdiBuS4reWbvWgAcAB4gICAgOAMgAEAiAHkNpIBDTExNy4xNTkuMTAuNDOaAbIEYWxsOmRlZmF1bHQsZWNwbTpkZWZhdWx0LGNwY1RhZ0ZpbHRlcjp1bmRlZmluZWQsZW5oYW5jZUN0clFGYWN0b3I6c3F1YXJlLHBsYXlwYWdlY3RyOmVuYWJsZSx1cF9yZWNfZmxvd19jb250cm9sOnVuZGVmaW5lZCxicnVzaF9kdXBsaWNhdGU6ZGVmYXVsdCxwY3RyX2NwbTpjcG0scGN0cl92Mjpscl9yZWxvYWRfaG91cmx5XzEzXzksZHluYW1pY19mbG93X2NvbnRyb2w6c3BsaXQgdGhlIGZsb3cgYnkgbWlkLHBjdnI6Ym90aF9hXzFfYl8wLjA1X2NfMV9mXzFfMS41LGZyZXFMaW1pdDpkZWZhdWx0LHNtYWxsQ29uc3VtZVVuaXQ6ZGVmYXVsdCxvdXRlckJlYXRJbm5lcjpkZWZhdWx0LG91dGVyUXVpdDpkZWZhdWx0LGZkc19ydHQ6ZGVmYXVsdCxjcGE6Y3BhLGluZGlzX1VWOnVuZGVmaW5lZCxoYXNoX2luZGlzX1VWOnVuZGVmaW5lZCxmZWVkc19yYW5kb21fcmVzdWx0OnJhbmRvbV9yZXN1bHQsZmxvd19yYXRpb19jaGVjazpyMyxiYXNlX2hhc2hfaW5kaXNfVVY6dW5kZWZpbmVkLGRtcF9idXNpbmVzc19pbnRlcmVzdF9leHA6aW50ZXJlc3RfZXhwMyxydGJfZG93bmdyYWRpbmc6ZGVmYXVsdKABAKgBALIBIMr%2Bnhtomp3Mfz6r3nIVB6iSrxUWAISFMEPMReR19gQtugGhAWh0dHBzOi8vYWQtYmlsaS1kYXRhLmJpbGlnYW1lLmNvbS9hcGkvcGMvY2xpY2tCaWxpP2FkX3BsYW5faWQ9MjE0NjAmbWlkPV9fTUlEX18maXA9MTE3LjE1OS4xMC40MyZyZXF1ZXN0X2lkPTE1NjAxNTI2OTYyMjNxMTcyYTIyYTQ5YTE1MnExODA0NyZ0cz1fX1RTX18mdWE9X19VQV9fwgEA0gEA2AFm4AEA6AEA8AEA%2BAEAgAIAiAIAuAIAwAIAyAIA0AIA2AIA6gIA8AKusQP4AuYB%2Cf%7Cclick_sync_3%2Cg%7C1%2Ch%7C3%2Ci%7C%2Cj%7C%2Ck%7C1560153068105%2Cl%7C23%2Cm%7C1560152699585%2Cn%7C1%2Co%7C&ts=1560153068105">
                            <img src="css/iamges/599fb812b16567595d1dc86d9308405a3e1c8a5e.jpg@880w_440h.jpg">
                        </a>
                        <a class="more" href="https://www.bilibili.com/blackboard/topic_list.html">更多</a>
                    </li>
                    <li>
                        <a href="https://www.bilibili.com/read/cv2818571?from=1002">
                            <img src="css/iamges/ac2893c7b9e750fbe8bb77abe19ece3ef74c09c5.png@880w_440h.png">
                        </a>
                        <a class="more" href="https://www.bilibili.com/blackboard/topic_list.html">更多</a>
                    </li>
                    <li>
                        <a href="https://www.bilibili.com/blackboard/live/activity-DYfX9V1rx.html">
                            <img src="css/iamges/87c8f4c18f08c0e9a9f586e076abdfeb63115572.jpg@880w_440h.webp">
                        </a>
                        <a class="more" href="https://www.bilibili.com/blackboard/topic_list.html">更多</a>
                    </li>
                </ul>
                <ul class="title" id="title">
                        <a href="https://www.bilibili.com/read/cv2838610">1</a>
                        <a href="https://www.bilibili.com/read/cv2717351?from=1002">2</a>
                        <a href="https://cm.bilibili.com/cm/api/fees/pc/sync/v2?msg=a%7C26%2Cb%7Cbilibili%2Cc%7C1%2Cd%7C1%2Ce%7CCAAQABiAoKXL0vagqQMgACgAMCQ4GkIfMTU2MDE1MzIyMDUyN3ExNzJhMjJhNjFhMjM2cTE2NUivy4ODtC1SBumDkeW3nloG5rKz5Y2XYgbkuK3lm71oAXAAeICAgIDgDIABAIgB5DaSAQ0xMTcuMTU5LjEwLjQzmgGKBGFsbDpkZWZhdWx0LGVjcG06ZGVmYXVsdCxjcGNUYWdGaWx0ZXI6dW5kZWZpbmVkLGVuaGFuY2VDdHJRRmFjdG9yOnNxdWFyZSxwbGF5cGFnZWN0cjplbmFibGUsdXBfcmVjX2Zsb3dfY29udHJvbDp1bmRlZmluZWQsYnJ1c2hfZHVwbGljYXRlOmRlZmF1bHQscGN0cl9jcG06Y3BtLHBjdHJfdjI6bHJfY29uc3RhbnQsZHluYW1pY19mbG93X2NvbnRyb2w6c3BsaXQgdGhlIGZsb3cgYnkgbWlkLHBjdnI6ZGxkLGZyZXFMaW1pdDpkZWZhdWx0LHNtYWxsQ29uc3VtZVVuaXQ6ZGVmYXVsdCxvdXRlckJlYXRJbm5lcjpkZWZhdWx0LG91dGVyUXVpdDpkZWZhdWx0LGZkc19ydHQ6ZGVmYXVsdCxjcGE6Y3BhLGluZGlzX1VWOnVuZGVmaW5lZCxoYXNoX2luZGlzX1VWOnVuZGVmaW5lZCxmZWVkc19yYW5kb21fcmVzdWx0OmRlZmF1bHQsZmxvd19yYXRpb19jaGVjazpyMyxiYXNlX2hhc2hfaW5kaXNfVVY6dW5kZWZpbmVkLGRtcF9idXNpbmVzc19pbnRlcmVzdF9leHA6aW50ZXJlc3RfZXhwNCxydGJfZG93bmdyYWRpbmc6ZGVmYXVsdKABAKgBALIBIA%2FDf07eX0pj4e%2B10Je0NRXS7edp8rprN2Ju9z4GEj8CugGfAWh0dHBzOi8vYWQtYmlsaS1kYXRhLmJpbGlnYW1lLmNvbS9hcGkvcGMvY2xpY2tCaWxpP2FkX3BsYW5faWQ9MjE0NjAmbWlkPV9fTUlEX18maXA9MTE3LjE1OS4xMC40MyZyZXF1ZXN0X2lkPTE1NjAxNTMyMjA1MjdxMTcyYTIyYTYxYTIzNnExNjUmdHM9X19UU19fJnVhPV9fVUFfX8IBANIBANgBZuABAOgBAPABAPgBAIACAIgCALgCAMACAMgCANACANgCAOoCAPACrrED%2BALmAQ%3D%3D%2Cf%7Cclick_sync_3%2Cg%7C1%2Ch%7C3%2Ci%7C%2Cj%7C%2Ck%7C1560156243180%2Cl%7C23%2Cm%7C1560153222154%2Cn%7C1%2Co%7C&ts=1560156243180">3</a>
                        <a href="https://www.bilibili.com/read/cv2818571?from=1002">4</a>
                        <a href="https://www.bilibili.com/blackboard/live/activity-DYfX9V1rx.html">5</a>
                    </ul>
                <ul class="trig" id="du" >
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </ul>
                </div>
            <div class="scoll-right" >
                <span class="re-last">昨日</span>
                <span class="re-next">周一</span>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/046b42d5b0e57ba1548c37415490075b151b61e4.jpg@160w_100h.jpg')"
                       href="https://www.bilibili.com/video/av55130038/">
                        <p class="srdp1">【游戏众生相】从卡普空谈日本游戏的复兴</p>
                        <div class="srd-action">
                            <p class="srdp2">【游戏众生相】从卡普空谈日本游戏的复兴</p>
                            <p class="uphost">up主:程晓杰</p>
                            <p class="uphost">播放：4.7万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/6048b6fd587b45d9fdbb6502a74d57ba068a9144.jpg@160w_100h.jpg')"
                       href="https://www.bilibili.com/video/av55263243/">
                        <p class="srdp1">【山新】《勾指起誓》</p>
                        <div class="srd-action">
                            <p class="srdp2">【山新】《勾指起誓》</p>
                            <p class="uphost">up主:程晓杰</p>
                            <p class="uphost">播放：好几万万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/d5a0ab8ada641fc1be6a4cf09158d039ed7e0dcb.jpg@160w_100h.webp')"
                       href="https://www.bilibili.com/video/av55187218/">
                        <p class="srdp1">【SFM动画】绝地求生 vs. APEX英雄!</p>
                        <div class="srd-action">
                            <p class="srdp2">【SFM动画】绝地求生 vs. APEX英雄!</p>
                            <p class="uphost">up主:程晓杰</p>
                            <p class="uphost">播放：88万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/75807dc4d18afd4c48a47ed7f642178b86a74118.jpg@160w_100h.webp')"
                       href="https://www.bilibili.com/video/av55095760/">
                        <p class="srdp1">「温柔/感动」别害怕，未来会有我在。</p>
                        <div class="srd-action">
                            <p class="srdp2">「温柔/感动」别害怕，未来会有我在。</p>
                            <p class="uphost">up主:程晓杰</p>
                            <p class="uphost">播放：2万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/641f1fec69586c3bbe51e48b5668abcfd079bb50.jpg@160w_100h.webp')"
                       href="https://www.bilibili.com/video/av55123808/">
                        <p class="srdp1">央视动画发展史，童年神作都是这样诞生的？【ACG异闻录42】</p>
                        <div class="srd-action">
                            <p class="srdp2">央视动画发展史，童年神作都是这样诞生的？【ACG异闻录42】</p>
                            <p class="uphost">up主:程晓杰</p>
                            <p class="uphost">播放：4.7万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/9d2b903df421ef0d2b62f74404d1eaff8760f4e7.jpg@160w_100h.webp')"
                       href="https://www.bilibili.com/video/av55190023/">
                        <p class="srdp1">纯黑家今天的晚饭</p>
                        <div class="srd-action">
                            <p class="srdp2">纯黑家今天的晚饭</p>
                            <p class="uphost">up主:程晓杰</p>
                            <p class="uphost">播放：4.7万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/1ee93d7436ca9df2ad9c85f6d0ab4d9d26f697e2.jpg@160w_100h.webp')"
                       href="https://www.bilibili.com/video/av55370615/">
                        <p class="srdp1">灼热与烬灭之刃-斩龙【怪物猎人生态】</p>
                        <div class="srd-action">
                            <p class="srdp2">灼热与烬灭之刃-斩龙【怪物猎人生态】</p>
                            <p class="uphost">up主:程晓杰</p>
                            <p class="uphost">播放：13万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
                <div class="scoll-right-d">
                    <a style="background: url('css/iamges/3088acc7fc2d351447f2ac4e4acfa7ef031d57fc.jpg@160w_100h.webp')"
                       href="https://www.bilibili.com/video/av55333039/">
                        <p class="srdp1">前方高能！up主带你跟京都动画聊聊轻音少女！【轻音动画开播10周年纪念视频】</p>
                        <div class="srd-action">
                            <p class="srdp2">前方高能！up主带你跟京都动画聊聊轻音少女！【轻音动画开播10周年纪念视频】</p>
                            <p class="uphost">up主:剁椒炖鱼</p>
                            <p class="uphost">播放：666万</p>
                        </div>
                    </a>
                    <div class="later-watch"></div>
                </div>
            </div>
        </div>
        <div class="to-pop">
            <div class="pop">
                <i></i>
                <span>推广</span>
            </div>
            <div class="now-data">
                <div class="online">
                    <a href="https://www.bilibili.com/video/online.html">在线人数：5926491</a>
                    <em></em>
                    <a href="https://www.bilibili.com/newlist.html">最新投稿：76869</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
