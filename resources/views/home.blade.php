<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>cafe_library</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
     <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <style>
 * {
     margin: 0;
     padding: 0;


 }

 body {
     color: Black;
     font-family: 'Aclonica', sans-serif;
 }



 .header-left {
     float: left;
 }






 /* ボタン全体 */
 .flowbtn10 {
     display: inline-block;
     font-size: 35px;
     text-decoration: none;
     transition: .5s;
     color: #444;
     list-style: none;
 }

 }

 /* インスタ・pocket・ラインだけ少し大きく */
 .flowbtn10 .fa-instagram,
 .flowbtn10 .fa-get-pocket,
 .flowbtn10 .fa-get-pocket,
 .flowbtn10 .fa-line {
     font-size: 38px;
 }

 /* Instagramマウスホバー時 */
 .flowbtn10 .fa-instagram:hover {
     color: #c6529a;
 }

 /* メールアイコンマウスホバー時 */
 .flowbtn10 .fa-envelope:hover {
     color: #f3981d;
 }

 /* ulタグの内側余白を０にする */
 ul.snsbtniti {
     padding: 0 !important;
     list-style: none;
     margin-right: 30px;
 }

 /* アイコン全体の位置 */
 .snsbtniti {
     display: flex;
     flex-flow: row wrap;
     justify-content: space-between;
 }

 /* アイコン同士の余白 */
 .snsbtniti li {
     display: inline;
     text-align: center !important;
     padding-right: 60px;

 }

 .header-right input {
     margin-right: 45px;
     position: fixed;
 }

 .fa-instagram {
     margin-left: 200px;
     margin-bottom: 30px;
 }


 .active {
     top: 0;
     left: 0;
 }




 .logo {
     max-width: 100%;
 }

 .active {
     position: fixed;
     left: 0;
     top: 0;
     z-index: 103;
 }

 img {
     vertical-align: bottom;
 }

 .serch {
     margin: 30px auto;
     height: 30%;
     width: 50%;
     text-align: center;
     color: black;
     background-color: rgba(255, 255, 255, 0.4);
 }




 .menus {
     position: fixed;
     left: 200px;
     top: 70px;
 }

 .menus ul {
     display: flex;
     list-style: none;
     align-items: flex-start;
     -webkit-box-pack: start;
     justify-content: flex-start;
     color: black;
 }

 .menus li {
     margin-right: 30px;
     position: relative;
 }

 /*コンテンツメイン*/


 .top {
     width: auto;
     margin: 0;
     text-align: center;
     vertical-align: middle;
     background-size: cover;
     box-sizing: border-box;
     color: #FFF;
     align-items: center;
     justify-content: center;
     height: 90%;
     font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Yu Gothic", YuGothic, Verdana, Meiryo, sans-serif;
     background-image: url('https://cdn.pixabay.com/photo/2017/09/10/01/37/coffee-2734137_1280.jpg');
     background-attachment: fixed;
     background-position: center;
     background-size: cover;
     background-repeat: no-repeat;
        padding-top: 100px;
 }

 .top-container {
     width: 96%;
     height: 900px;
     margin: 0 auto;
     border: thick double #000000;

 }

 .serch {
     background-color: rgba(255, 255, 255, 0.6);
     border: thick double #fffaf0;
     font-size: 30px;
     height: 150px;
 }

 .serch input {
     margin-top: 30px;
     width: 20%;
 }

 .main {
     width: 100%;
     height: 500px;
     margin: 0 auto;
 }

 .contact-form {
     text-align: center;
     width: 70%;
     margin: 0 auto;
     padding: 50px;
     color: black;
     margin-top: 130px;
 }

 .form-title {
     text-align: center;
     font-size: 30px;
     color: black;
 }

 .form-item {
     padding: 20px 0 10px 0;
     font-weight: bold;
     color: black;
 }

 input {
     width: 10%;
     box-sizing: border-box;
     margin: 0.2em 0;
     padding: .8em;
     border-radius: 2em;
     border: 2px solid #aaa;
 }

 textarea {
     width: 70%;
     box-sizing: border-box;
     margin: 0.3em 0;
     padding: .8em;
     border-radius: 1em;
     border: 2px solid #aaa;
 }

 input[type="submit"] {
     text-align: center;
     margin-top: 10px;
     width: 30%;
     border: 1px solid #5cb85c;
     border-radius: 4px;
     padding: 12px;
     box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
     font-size: 14px;
     line-height: 1.428571429;
     background-color: #5cb85c;
 }






 /*メディア*/
 .media-wrapper {
     height: 700px;
     width: 100%;
     text-align: center;
     background-attachment: fixed;
 }

 .media-container {
     width: 100%;
     height: 500px;
     text-align: center;
     padding-top: 180px;
 }

 .media-icon {
     width: 100%;
     height: 2 00px;
 }





 /*カフェ*/
 .cafe-wrapper {
     height: 1500px;
     width: 100%;
 }

 .cafe-container {
     width: 1270px;
     height: 1200px;
     text-align: center;
     margin-left: 280px;
     padding-top: 180px;
 }

 .cafe-heading h1 {
     font-size: 30px;
     letter-spacing: 20px;
 }


 .top-library {
     display: flex;
     text-align: center;
     margin-left: 20px;

 }

 .under-library {
     display: flex;
     text-align: center;
     margin-left: 20px;
     margin-top: 40px;
 }

 .part {
     width: 30%;
     color: #666666;
     /*文字色*/
     border: 1px solid #996633;
     /*線の太さ・色*/
     background-color: #fff;
     /*背景色*/
     box-shadow: 2px 5px 10px #e8d3c7;
     /*影*/
     border-radius: 20px;
     /*角の丸み*/
     padding-bottom: 400xp;
 }

 .part img {
     border-radius: 20px;
     width: 100%;
 }

 .parallax-bg {
     width: 100%;
     height: 50%;
     background-image: url('https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80');
     background-attachment: fixed;
     background-position: center;
     background-size: cover;
     background-repeat: no-repeat;
 }

 /*faq wrapper*/


 .faq-wrapper {
     height: 650px;
     width: 100%;
     text-align: center;
     padding-top: 200px;
 }

 .faq-container {
     height: 650px;
     width: 1270px;
     text-align: center;
     margin: 0 auto;
 }

 .faq-container h1 {
     padding-bottom: 100px;
 }

 #faq-list {
     width: 1100px;
     margin: 0 auto;
     padding: 0;
     list-style: none;
     text-align: center;
 }

 /*アコーディオン追加 */
 .faq-list-item {
     margin: 20px;
     border-bottom: 1px solid #ccc;
     position: relative;
     cursor: pointer;
     text-align: left;
     padding-left: 50px;
 }

 .faq-list-item h3 {
     font-size: 15px;
     letter-spacing: 10px;
     font-family: 'Aclonica', sans-serif;
 }

 .faq-list-item span {
     position: absolute;
     top: 0;
     right: 5px;
     color: #ccc;
     font-size: 14px;
     font-family: 'Aclonica', sans-serif;
 }

 .answer {
     font-size: 10px;
     display: none;
     padding: 5px 0px;
     margin-bottom: 15px;
     letter-spacing: 16px;
 }

 p {
     font-family: 'Aclonica', sans-serif;
 }




 /*プロフィール*/
 .profile-wrapper {
     height: 1000px;
     width: 100%;
     text-align: center;
     background-image: url("https://images.unsplash.com/photo-1570710396184-7f9ebe656c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80");
     background-size: cover;
     background-color: rgba(255, 255, 255, 0.3);
     background-blend-mode: lighten;
 }

 .container {
     width: 1270px;
     height: 800px;
     text-align: center;
     position: relative;
     width: 100%;
     height: 100vh;
 }


 .prpfiles-title {
     padding: 100px 0 150px 0;
 }

 .profile-container img {
     float: left;
 }

 .profile-heading {
     float: right;
     background-color: rgba(255, 255, 255, 0.7);
     padding: 100px 50px 200px 50px;
     margin-bottom: 200px;

 }






 /*フッター*/
 footer {
     width: 100%;
     text-align: center;
     height: 100px;
     background-color: rgba(255, 255, 255, 0.9);
 }

 .footer-container {
     width: 100%;
     background-color: rgba(255, 255, 255, 0.4);
 }

 .footer-left {
     float: left;
     padding-left: 450px;
 }


 .footer-right {
     display: flex;
     list-style: none;
     padding-top: 40px;
     margin-left: 1000px;
 }


 .footer-right .fa-instagram {
     margin-right: 50px;
 }

 /*ボタンを固定する位置を決める*/
 #page-top {
     position: fixed;
     bottom: 20px;
     right: 20px;
     font-size: 80%;
 }

 /*ボタンの色やサイズを設定する*/
 #page-top a {
     display: block;
     background: brown;
     color: #fff;
     width: 100px;
     padding: 25px 0;
     text-align: center;
     text-decoration: none;
     border-radius: 10px;
 }

 /*マウスオーバーした際に色を変化させる*/
 #page-top a:hover {
     background: #999;
     text-decoration: none;
 }


 .fadein {
     opacity: 0;
     transform: translateY(250px);
     transition: all 2s;
 }  
    </style>

    <script>
    $(function() {
        // #で始まるリンクをクリックしたら実行されます
        $('a[href^="#"]').click(function() {
            // スクロールの速度
            var speed = 400; // ミリ秒で記述
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $('body,html').animate({ scrollTop: position }, speed, 'swing');
            return false;
        });
    });
    </script>
   <header class="home">
        <div id="logo" class="active">
            <a href="#top">
                <img src="https://pbs.twimg.com/media/EX9AojcU0AEe4VE?format=jpg&name=240x240">
            </a>
        </div>
        <div class="menus">
            <ul id="menu_in">
                <li><a href="#4">request</a></li>
                <li><a href="#1">オススメ</a></li>
                <li><a href="#2">Q & A</a></li>
                <li><a href="#3">Profile</a></li>
            </ul>
        </div>
    </header>
    <div class="top">
        <div class="top-container">
            <div class="serch">
                <div class="heading">
                    Serch as Cafe<br>
                </div>
                <input type="text">
            </div>
        </div>
    </div>>
    <div class="main" id="4">
        <div class="contact-form">
            <div class="form-title">Request</div>
            <form method="post" action="sent.php">
                <div class="form-item">Age</div>
                <input type="text" name="age" placeholder="23">
                <div class="form-item">Content</div>
                <textarea name="body" placeholder="神奈川県の〇〇のカフェをぜひ紹介して欲しい!など、数多くのご要望お待ちしております。"></textarea>
                <input type="submit" value="送信">
            </form>
        </div>
    </div>
    <div class="cafe-wrapper">
        <div class="cafe-container fadein">
            <div class="library button" id="1">
                <div class="cafe-heading">
                    <h1><span>recommend</span></h1>
                    <h2>Select Cafe</h2>
                </div>
                <a href="#index">Topへ</a>
            </div>
            <div class="top-library">
                　<div class="part 1"><a href="1">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3></h3>
                            <p>エリア</p>
                            <p>最寄り</p>
                            <p>予算</p>
                        </div>
                    </a></div>
                <div class="part 2"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3>カフェの名前</h3>
                            <p>エリア</p>
                            <p>最寄り</p>
                            <p>予算</p>
                        </div>
                    </a>
                </div>
                <div class="part 3"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3>カフェの名前</h3>
                            <p>エリア</p>
                            <p>最寄り</p>
                            <p>予算</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="under-library">
                　<div class="part 1"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3>カフェの名前</h3>
                            <p>エリア</p>
                            <p>最寄り</p>
                            <p>予算</p>
                        </div>
                    </a>
                </div>
                <div class="part 2"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3>カフェの名前</h3>
                            <p>エリア</p>
                            <p>最寄り</p>
                            <p>予算</p>
                        </div>
                    </a>
                </div>
                <div class="part 3"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3>カフェの名前</h3>
                            <p>エリア</p>
                            <p>最寄り</p>
                            <p>予算</p>　
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="parallax-bg">
    </div>
    <div class="faq-wrapper fadein" id="2">
        <div class="faq-container">
            <h1>Q&A</h1>
            <ul id="faq-list">
                <li class="faq-list-item">
                    <h3 class="question">Q&Aの質問欄、何か見た人が疑問を抱きそうな内容</h3>
                    <span>+</span>
                    <div class="answer">
                        <p>上記に対するアンサー</p>
                    </div>
                </li>
                <li class="faq-list-item">
                    <h3 class="question">Q&Aの質問欄、何か見た人が疑問を抱きそうな内容</h3>
                    <span>+</span>
                    <div class="answer">
                        <p>上記に対するアンサー</p>
                    </div>
                </li>
                <li class="faq-list-item">
                    <h3 class="question">Q&Aの質問欄、何か見た人が疑問を抱きそうな内容</h3>
                    <span>+</span>
                    <div class="answer">
                        <p>上記に対するアンサー</p>
                    </div>
                </li>
                <li class="faq-list-item">
                    <h3 class="question">Q&Aの質問欄、何か見た人が疑問を抱きそうな内容</h3>
                    <span>+</span>
                    <div class="answer">
                        <p>上記に対するアンサー</p>
                    </div>
        </div>
        </li>
        </ul>
    </div>
    </div>
    <div class="profile-wrapper">
        <div class="profile container">
            <div class="prpfiles-title" id="3">
                <h1>profile</h1>
            </div>
            <div class="icon">
                <img src="https://pbs.twimg.com/media/EVSiAzeUMAA6LeH?format=jpg&name=small" width="500" height="400" id="profile">
            </div>
            <div class="profile-heading">
                <h2>ⓎⓊⓈⒺⒾ</h2><br>
                <p> 個人ブログ<br>
                    ⊿ ᴋᴀɴᴀɢᴀᴡᴀ﻿﻿<br>
                    ⊿ '98 1/13（22）﻿﻿﻿﻿﻿♂<br>
                    ⊿ 𝗖𝗮𝗳𝗲 𝗗𝗶𝗮𝗿𝘆 ﻿<br>
                    ﻿⊿ @hungryintokyo - Official Ambassador ﻿﻿<br>
                </p>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="https://scontent-yyz1-1.cdninstagram.com/v/t51.2885-19/s150x150/60975274_1112497545805202_5816950680312610816_n.jpg?_nc_ht=scontent-yyz1-1.cdninstagram.com&_nc_ohc=Qz50gMraK-UAX83Axt2&oh=d621012b77d99c9b6e9dc4a8465ec6fb&oe=5EBA45CA" width="90" height="90">
            </div>
            <div class="footer-right">
                <li><a href="https://www.instagram.com/__cf.wonder13/?hl=ja" class="flowbtn10"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a href="https://www.instagram.com/direct/t/340282366841710300949128294025773268733" class="flowbtn10"><i class="far fa-envelope"></i></a>
                </li>
            </div>
            <p id="page-top"><a href="#">Serch as Cafe</a></p>
        </div>
    </footer>
    <script src="script.js">
         $(function () {
  $('div.profile').each(function () {
    var $win = $(window),
        $winH = $win.height(),
        $connect = $(this),
        position = $connect.offset().top,
        current = 0,
        scroll;
    $win.on('load scroll', function () {
      scroll = $win.scrollTop();
      current = (1 - (position - scroll) / $winH) * 2 * 100;
      if (current > 99.9) {
        current = 100;
      }
      if (scroll > position - $winH) {
        $connect.css({width: current + '%'});
      }
    });
  });
});
    </script>
</body>
</html>