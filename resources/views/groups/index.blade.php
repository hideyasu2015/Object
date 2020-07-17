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
                            @foreach($groups as $group)
                            <!--getメソッドで、id=group_idをリクエスト-->
                                <form action="/main_words" method="get">
                            <li class="how_to">
                                <input type="hidden" name="id" value="{{ $group -> id }}"/>
                                <button type="submit" class="level_choice_5">{{ $group -> group }}</button>
                            </li>
                            </form>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>

                <!-- 右サイド広告エリア -->
                <div class="col-2 ad_text">
                    <p>スポンサーリンク</p>
                </div>
            </div>
@endsection



