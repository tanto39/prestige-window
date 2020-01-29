<?php
$template = \App\Http\Controllers\Site\TemplateController::getInstance();
if($template->isInstance == 'N') $template->setTemplateVariables();
?>

@extends('public/layouts.app')

@section('content')
<aside class="section landing-section landing-section-color">
    <div class="container text-center">
        <div class="adv-wrap flex">
            <div class="adv-item">
                <div class="adv-img adv-img-1"></div>
                <p class="adv-title">Рассрочка на 12 месяцев</p>
            </div>
            <div class="adv-item">
                <div class="adv-img adv-img-2"></div>
                <p class="adv-title">Работаем с материнским капиталом</p>
            </div>
            <div class="adv-item">
                <div class="adv-img adv-img-3"></div>
                <p class="adv-title">Замерка и доставка в районы бесплатно</p>
            </div>
            <div class="adv-item">
                <div class="adv-img adv-img-4"></div>
                <p class="adv-title">Кредит до 5 лет</p>
            </div>
        </div>
    </div>
</aside>
<main class="landing-section" itemscope="" itemtype="https://schema.org/Article">
    <div class="container" itemprop="articleBody">
        <h1 itemprop="headline">{{$result['title']}}</h1>
        @if(!empty($result['preview_img']))
            <img class="image-left" src="{{$result['preview_img'][0]['MIDDLE']}}" alt="{{$result['title']}}" title="{{$result['title']}}" />
        @endif
        {!! $result['full_content'] !!}
    </div>
    <button class="callback" data-target="#modal-callback" data-toggle="modal">Запишись на бесплатный замер!</button>
</main>
<section class="section landing-section landing-section-color">
    <div class="container catalog-categories">
        <h2>Каталог</h2>
        <div class="flex category-list">
            @foreach($categories as $category)
                <a class="list-item" href="{{route('item.showCatalogCategory', ['category_slug' => $category['slug']])}}">
                    <div class="list-item-title">
                        {{$category['title']}}
                    </div>
                    <div class="wrap-image-list flex">
                        @if(isset($category['preview_img'][0]))
                            <img class="list-item-img" src="{{$category['preview_img'][0]['MIDDLE']}}" alt="{{$category['title']}}" title="{{$category['title']}}"/>
                        @endif
                    </div>
                    <span class="order-button">Перейти в раздел</span>
                </a>
            @endforeach
        </div>
        <a href="{{route('item.showCatalogCategories')}}" class="order-button order-button-link">Перейти в каталог</a>
    </div>
</section>

@endsection
