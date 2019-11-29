@extends('public/layouts/app')

@section('content')
    <div class="container main">

        <div class="item-page product-detail">
            {{-- Breadcrumbs include --}}
            @include('public.partials.breadcrumbs')
            <main itemscope itemtype="http://schema.org/Product">
                <h1 itemprop="name">{{$result['title']." ".$template->contacts['companyWhere']}}</h1>
                <article class="product">

                    <div class="product-wrap flex">
                        <div class="product-desc @if(empty($result['preview_img'])) full-flex-basis @endif">
                            <div class="top-product-block flex">
                                <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">Цена:
                                    @if(isset($result['properties'][PROP_GROUP_NAME_ALL][PROP_PRICE_ID]['value']))
                                    <span itemprop="price">{{$result['properties'][PROP_GROUP_NAME_ALL][PROP_PRICE_ID]['value']}}</span>
                                    <span>руб.</span>
                                    @else
                                    <span itemprop="price">уточняйте по телелефону</span>
                                    @endif
                                    <meta itemprop="priceCurrency" content="RUB">
                                </div>
                                <div class="order-box flex">
                                    <div class="order-button-wrap">
                                       <button class="order-button callback_content" data-target="#modal-callback" data-toggle="modal"><i class="glyphicon glyphicon-shopping-cart"></i><span>Заказать замер</span></button>
                                    </div>
                                </div>
                            </div>

                            {{-- Properties include --}}
                            @include('public.partials.properties')
                        </div>

                        {{--Include Slider--}}
                        @isset($result['preview_img'][0])
                            <div class="detail-image">
                                @include('public.partials.previewSlider')
                            </div>
                        @endisset
                    </div>

                    <div class="full_content" itemprop="description"><h2>Описание</h2>{!! $result['full_content'] !!}</div>

                </article>
            </main>

            {{-- Reviews include --}}
            @include('public.partials.reviews')

        </div>
    </div>

    <!-- Modal gallery -->
    <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
        <div class="slides"></div>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close" style="top: 40px; color: #fff;">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
@endsection
