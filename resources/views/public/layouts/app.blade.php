<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta content="telephone=no" name="format-detection">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <meta name="yandex-verification" content="71f339cb7d9e5155" />
    <meta name="google-site-verification" content="yyOTCBvfb36TKSVYWbQenbkGgGAJEd_pkUISnrglHJ0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{$result['meta_key'] ?? META_KEY}}" />
    <meta name="description" content="{{$result['meta_desc'] ?? META_DESC}}" />

    <title>{{$result['title'] ?? META_TITLE}}</title>

    <!-- Scripts -->
    <script defer src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script defer async src="https://www.googletagmanager.com/gtag/js?id=UA-43331430-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-43331430-7');
</script>

</head>
<body>
<div class="wrapper">

    <header class="header" id="header">

        @if(USE_REGION == "Y")
            @include('public.partials.region')
        @endif

        <div class="header-top-wrap">
            <div class="container header-top flex">
                <div class="header-phone flex"><i class="glyphicon glyphicon-earphone"></i><span>{{$template->contacts['phone']}}</span></div>
                <div class="header-phone flex"><i class="glyphicon glyphicon-phone"></i><span>+7(910)731-00-63</span></div>
                <div class="header-right-wrap flex">
                    <button class="callback" data-target="#modal-callback" data-toggle="modal">Заказать замер</button>
                </div>
            </div>
        </div>

        <div class="container flex center-header">
            <div class="header-left">
                @if ($template->uri != "/")
                <a class="logo flex" href="/"><img src="/images/logo.png" alt="Престиж" title="Престиж" />{{COMPANY}}</a>
                @else
                <a class="logo flex" href="#"><img src="/images/logo.png" alt="Престиж" title="Престиж" />{{COMPANY}}</a>
                @endif
            </div>

            <div class="header-center flex">
                <div class="header-center-wrap">
                    <div class="address flex"><i class="glyphicon glyphicon-map-marker"></i> {{$template->contacts['address']}}</div>
                </div>
            </div>
            <div class="header-right flex">
                <div class="header-right-wrap">
                    <a class="header-mail flex" href="mailto:{{$template->contacts['mail']}}"><i class="glyphicon glyphicon-envelope"></i><span>{{$template->contacts['mail']}}</span></a>
                </div>
            </div>
        </div>
    </header><!-- .header-->

    <nav class="topmenu-wrap">
        <div class="navbar navbar-default container topmenu">

            <!-- Include menu -->
            @component('public.components.menu')
                @slot('menuSlug') main @endslot
            @endcomponent

            <!-- Include search -->
            @component('public.components.search')
            @endcomponent

            <!-- Authentication Links -->
            {{--@include('public.partials.loginlinks')--}}
        </div>
    </nav>
    <!-- Include massage -->
    @include('public.partials.msg')

    <!-- Include content -->
    @yield('content')

    <section class="landing-section section-map">
        <h2>Мы на карте</h2>
        <div class="yandex-map">
            <div class="map-load">Загрузка карты...</div>
            {!!$template->contacts['map']!!}
        </div>
    </section>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="contact flex" itemscope itemtype="http://schema.org/LocalBusiness" >
                <div class="footer-block">
                    <div class="fn org" itemprop="name"><span class="category">Компания </span>{{COMPANY}}</div>
                    <div class="tel" itemprop="telephone">{{$template->contacts['phone']}}</div>
                    <div class="tel" itemprop="telephone">+7(910)731-00-63</div>
                    <div>Адрес: <span itemprop="address">{{$template->contacts['address']}}</span></div>
                    <div class="email" itemprop="email">{{$template->contacts['mail']}}</div>
                    <div>Все права защищены</div>
                </div>
                <div class="footer-block text-right">
                    <div>Время работы: <span class="workhours" itemprop="openingHours">Все дни недели 09:00 - 19:00</span></div>
                    <div class="metrica">
                    <!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=56420137&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/56420137/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="56420137" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script>
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56420137, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56420137" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
                    </div>
                    <div class="enterkursk">Сайт разработан <a target="_blank" href="https://enterkursk.ru">EnterKursk.ru</a></div>
                </div>
            </div>
        </div>
    </footer>

    <!--кнопки соцсетей-->
    <div class="socbuttons">
        <script defer src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script defer src="//yastatic.net/share2/share.js"></script>
        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter"></div>
    </div>

    <div class="scroll hidden-xs"><i class="glyphicon glyphicon glyphicon-chevron-up" aria-hidden="true"></i></div>

    <!-- Callback form -->
    <div id="modal-callback" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
                    <span class="modal-title">Отправить сообщение</span>
                </div>
                <div class="modal-body">
                    <div class="form-zakaz">
                        <form method="post">
                            <input class="form-name form-control" type="text" placeholder="Введите имя" required name="name" size="16" />
                            <input class="form-phone form-control" type="tel" placeholder="8**********" required pattern="(\+?\d[- .]*){7,13}" title="Международный, государственный или местный телефонный номер" name="phone" size="16" />
                            <textarea name="mess" class="form-massage" cols="23" rows="8"></textarea>
                            <div class="form-input form-pd"><label>Даю согласие на обработку <a href="#" target="_blank" rel="noopener noreferrer">персональных данных</a>:</label><input class="checkbox-inline" type="checkbox" required="" name="pd" /></div>
                            <label>Защита от спама: введите сумму 2+2:</label><input class="form-control" id="form-capcha" type="number" required name="capcha"/>
                            <input class="btn form-submit order-button" type="submit" name="submit" value="Заказать замер" />
                        </form>
                        <div class='message-form alert alert-success'><p>Загрузка...</p></div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
            </div>
        </div>
    </div>
    <!-- Callback form -->
</div>
</body>
</html>
