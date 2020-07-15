<!DOCTYPE html><!-- HTML5-->
<html lang="ja">

<head>
    <!-- 以下の meta tags（charset と viewport）は必須です-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap の CSS（CDN経由）の読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>N-RET TYPING</title>
</head>

<body>
    <div class="wrapper">
        <!-- ヘッダー部分 -->
        <header class="container-md">
            <div class="row nav_belt">
                <div class="col-12">
                    <div>
                        <img src="../img/logo.png" alt="イメージキャラクター" />
                    </div>
                    <div>
                        <p>ようこそ、UserNameさん</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- メイン画面（中央部分） -->
        <main class="container-md">
            <div class="row main_space">
                <!-- 左サイドメニュー -->
                <div class="col-2 menu">
                    <p>Menu</p>
                    <div class="search">
                        <input type="text" placeholder="単語で検索" />
                    </div>
                    <div class="ul_scroll">
                        <ul>
                            <li>
                                <p>can</p>
                            </li>
                            <li>
                                <p>break</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <p>other</p>
                            <li></li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                            <li>
                                <p>other</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 中央タイピングエリア -->
                <div class="col-8 typing_erea">
                    <div class="how_to_contents">
                        <!-- 課題の写真 -->
                        <div class="theme_img">
                            <img id="img_text" src="" alt="イメージ画像が入ります" />
                        </div>

                        <!-- 写真を説明する英文 -->
                        <div id="theme_text_en" class="theme_text_en">
                            <p id="en_text"></p>
                        </div>

                        <!-- タイピング -->
                        <div>
                            <span id="change"></span>
                            <p id="target">ok</p>
                        </div>

                        <div id="navi_area">
                            <div class="how_to_navi">
                                <img id="logo_img" src="../img/logo1.jpg" alt="" />
                                <p id="navi">はじめよう！</p>
                            </div>
                            <div id="alerts" class="alert alert-warning" role="alert">
                                タイピングでスタート
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 右サイド広告エリア -->
                <div class="col-2 ad_text">
                    <p>スポンサーリンク</p>
                </div>
            </div>
        </main>

        <!-- フッター部分 -->
        <footer class="container-md">
            <div class="row footer_area">
                <div class="col-12">
                    <p>
                        Copyright 2020 Gen Miyazato All rights reserved.
                        <a href="#">利用規約</a><a href="#"> プライバシーポリシー</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- 関連 JavaScript の読み込み-->
    <!-- jQuery, Popper.js, Bootstrap JS の順に読み込みます-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="../js/typing copy.js"></script>
</body>

</html>