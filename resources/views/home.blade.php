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
        background-color: rgba(255, 255, 255, 0.5);
        background-blend-mode: lighten;
    }
    /*ヘッダー*/

    header {
        width: 100%;
        height: 80px;
        margin: 0;
        background-color: white;
        position: fixed;
        z-index: 10;
    }

    .header-container {
        height: 80px;
        width: 970px;
        margin-left: 450px;
        text-align: center;
    }

    .box {
        width: 70px;
        height: 70px;
        margin-top: 20px;
        margin-left: 120px;
        animation: rotation 5s ease 0s infinite alternate none running;
    }

    .header-left {
        float: left;
    }

    .header-right {
        float: right;
        padding-top: 20px;
    }

    .header-right input {
        width: 300px;
        font-size: 25px;
        text-align: center;
        z-index: 10;
    }

    .header-right ul {
        margin-bottom: 70px;
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






    /*コンテンツメイン*/
    .top-wrapper {
        width: 100%;
        margin: 0;
        height: 800px;
        color: #FFF;
        text-align: center;
        vertical-align: middle;
        background-image: url("https://cdn.pixabay.com/photo/2017/09/10/01/37/coffee-2734137_1280.jpg");
        background-size:cover;
        background-color: rgba(255, 255, 255, 0.4);
    }

    .top-container {
        width: 1270px;
        height: 800px;
        text-align: center;
        margin-left: 280px;
    }

    .top-heading {
        padding-top: 200px;
        text-align: center;
        font-size: 20px;
        letter-spacing: 10px;
        font-weight: bold;
        color: white;
    }
    .top-heading li{
        float:left;
    }




    /*メディア*/
    .media-wrapper {
        height: 700px;
        width: 100%;
        text-align: center;
        background-attachment: fixed;
    }

    .media-container {
        width:100%;
        height: 500px;
        text-align: center;
        padding-top: 180px;
    }

    .media-icon {
        width: 100%;
        height: 2   00px;
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
        padding-bottom:400xp;
    }

    .part img {
        border-radius: 20px;
        width: 100%;
    }
/*faq wrapper*/


    .faq-wrapper {
        height: 650px;
        width: 100%;
        text-align: center;
        padding-top:400px;
    }

    .faq-container {
        height: 650px;
        width: 1270px;
        text-align: center;
        margin-left: 280px;
    }
    .faq-container h1{
        padding-bottom:100px;
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
        background-size:cover;
        background-color: rgba(255, 255, 255, 0.3);
        background-blend-mode: lighten;
    }

    .profile-container {
        width: 1270px;
        height: 800px;
        padding-left:250px;
        text-align: center;
    }
    .prpfiles-title{
        padding:100px 0 150px 0;
    }
    .profile-container img{
        float:left;
    }
    .profile-heading {
        float:right;
        background-color: rgba(255, 255, 255, 0.7);
        padding:100px 50px 200px 50px;
        margin-bottom:200px;

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
    <div class="top-wrapper">
        <div class="top-container">
            <div class="serches">
                <h2>カフェ検索はコチラから</h2>
                <input type="text">
            </div>
            <div class="menus">
                <ul>
                    <li><a href="#1">sample1</a></li>
                    <li><a href="#2">sample2</a></li>
                    <li><a href="#3">sample3</a></li>
                    <li><a href="#4">sample4</a></li>
                </ul>
            </div>
            <div class="main">
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
                　<div class="part 1"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3><?php echo $cafe ->name?></h3>
                            <p><?php echo $area ->name?></p>
                            <p><?php echo $station ->name?></p>
                            <p><?php echo $price ->name?></p>
                        </div>
                    </a></div>
                <div class="part 2"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3><?php echo $cafe ->name?></h3>
                            <p><?php echo $area ->name?></p>
                            <p><?php echo $station ->name?></p>
                            <p><?php echo $price ->name?></p>
                        </div>
                    </a>
                </div>
                <div class="part 3"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3><?php echo $cafe ->name?></h3>
                            <p><?php echo $area ->name?></p>
                            <p><?php echo $station ->name?></p>
                            <p><?php echo $price ->name?></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="under-library">
                　<div class="part 1"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3><?php echo $cafe ->name?></h3>
                            <p><?php echo $area ->name?></p>
                            <p><?php echo $station ->name?></p>
                            <p><?php echo $price ->name?></p>
                        </div>
                    </a>
                </div>
                <div class="part 2"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3><?php echo $cafe ->name?></h3>
                            <p><?php echo $area ->name?></p>
                            <p><?php echo $station ->name?></p>
                            <p><?php echo $price ->name?></p>
                        </div>
                    </a>
                </div>
                <div class="part 3"><a href="#">
                        <img src="https://images.unsplash.com/photo-1492158244976-29b84ba93025?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80">
                        <div class="comment">
                            <h3><?php echo $cafe ->name?></h3>
                            <p><?php echo $area ->name?></p>
                            <p><?php echo $station ->name?></p>
                            <p><?php echo $price ->name?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
        <div class="profile-container">
            <div class="prpfiles-title" id="3">
                <h1>profile</h1>
                <a class="button" href="#index">Topへ</a>
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
            <p id="page-top"><a href="#">PAGE TOP</a></p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>