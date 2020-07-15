@extends('layouts.app')
<!-- メイン画面（中央部分） -->
        @section('content')
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
@endsection



