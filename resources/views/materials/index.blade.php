@extends('layouts.app')
        <!-- メイン画面（中央部分） -->
        @section('content')
            <div class="row main_space">
                <!-- 左サイドメニュー -->
                <div class="col-2 menu">
                    <p>Menu</p>
                    <div class="search">
                        <input type="text" placeholder="単語で検索" />
                    </div>
                    <div class="ul_scroll">
                        <ul>
                            @foreach($main_words as $main_word)
                            <li>
                                <form method="POST" action="{{ route('Materials.index') }}">
                                    <input type="hidden" name="{{ $main_word -> id }}">
                                    <button class="main_word_btn">{{ $main_word -> main_word }}</button>
                                </form>
                            </li>
                            @endforeach
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
@endsection