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
    <title>N-RET GRADE</title>
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

                <!-- 中央タイピングエリア -->
                <div class="col-10 choice_erea">
                    <div class="how_to_contents">
                        <div class="how_to">
                            <p>レベルをえらぼう</p>
                        </div>
                        <ul class="level_choices">
                            <li class="how_to"><img src="../img/logo1.jpg" alt="">
                                <p><a href="{{ route('main_words.index') }}"><button class="level_choice_5">小学５年生レベル{{ $groups[1]->group }}</button></a></p>
                            </li>
                            <li class="how_to"><img src="../img/logo2.jpg" alt="">
                                <P><button class="level_choice_6"
                                        onclick="location.href='typing_6.html'">小学６年生レベル{{ $groups[2]->group }}</button></p>
                            </li>
                            <li class="how_to"><img src="../img/logo3.jpg" alt="">
                                <p><button class="level_choice_7"
                                        onclick="location.href='typing_7.html'">&emsp;中学生レベル&emsp;{{ $groups[3]->group }}</button>
                                </p>
                            </li>
                        </ul>
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
</body>

</html>



