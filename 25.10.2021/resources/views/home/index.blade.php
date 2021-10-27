@extends('layout')

@section('content')

    @include('home.banner')
    <!-- Home Section END -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                @if (\App\Models\Post::all()->isNotEmpty())
                    @foreach(\App\Models\Post::all() as $post)
                        <div class="news-link">
                            <img class="poster" src="/img/post.png"/>
                            <span class="hot-news">{{ $post->author->name }}</span>
                            <h3 class="news-log">{{ $post->title }}</h3>
                            <p class="description">
                                {{ $post->content }}
                            </p>
                            <a href="#" class="btn-view"><span class="ic-sx24"></span> Подробнее</a>
                            <span class="time-data">18.05.18 12:42</span>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="right-block">
                    <div class="n-m">Мониторинг Серверов</div>
                    <div class="server online">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <div class="server online">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <div class="server online">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <div class="server online">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <div class="server online">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <div class="server online">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <div class="server online not-hr">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <div class="server online not-hr">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                            Онлайн: 50/100
                        </div>
                    </div>
                    <p class="tdx-strom"><span class="online-o"></span> Общий онлайн: 2173</p>
                </div>
                <div class="right-block vk">
                    <div class="n-m">Мониторинг Серверов</div>
                    <div class="widget-vk">
                        WIDGET VK
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer START -->
@endsection
