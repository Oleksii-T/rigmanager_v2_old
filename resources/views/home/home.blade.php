@extends('layouts.app')

@section('meta')
    <title>{{__('meta.title.home')}}</title>
    <meta name="description" content="{{__('meta.description.home')}}">
    <meta name="robots" content="index, follow">
@endsection

@section('page-content')
    <div class="header-main">
        <x-header/>
        <section class="top-section">
            <div class="holder">
                <h1>{{__('ui.introduction')}}</h1>
                <div class="top-links">
                    <div class="top-links-item">
                        <a href="{{route('search', ['type'=>'equipment-sell'])}}">{{__('ui.introSellEq')}}</a>
                    </div>
                    <div class="top-links-item">
                        <a href="{{route('search', ['type'=>'equipment-buy'])}}">{{__('ui.introBuyEq')}}</a>
                    </div>
                    <div class="top-links-item">
                        <a href="{{route('search', ['type'=>'services'])}}">{{__('ui.introSe')}}</a>
                    </div>
                    <div class="top-links-item hidden">
                        <a class="not-ready" href="{{route('search', ['type'=>'tenders'])}}">{{__('ui.introTender')}}</a>
                    </div>
                </div>
                <div class="top-form">
                    <form action="{{route('search')}}">
                        <fieldset>
                            <div class="top-form-line">
                                <input type="text" class="input" name="text" placeholder="{{__('ui.search')}}" required>
                                <button class="button">{{__('ui.search')}}</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <section class="main-section">
        <div class="holder">
            <div class="main-category">
                <ul class="tabs">
                    <li><a href="#tab1">{{__('ui.equipment')}}</a></li>
                    <li><a href="#tab2">{{__('ui.service')}}</a></li>
                </ul>
                <div id="tab1" class="tab-content">
                    <div class="main-category-block">
                        @foreach ($masterEquipments as $column)
                            <ul class="main-category-col">
                                @foreach ($column as $category)
                                    <li><a href="{{route('category', $category->slug)}}">{{$category->getFieldTranslation('name')}}</a></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
                <div id="tab2" class="tab-content">
                    <div class="main-category-block">
                        @foreach ($masterServices as $column)
                            <ul class="main-category-col">
                                @foreach ($column as $category)
                                    <li><a href="{{route('category', $category->slug)}}">{{$category->getFieldTranslation('name')}}</a></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="brand-line">
                <div class="brand-slider">
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{asset('icons/companies/halliburton.svg')}}" alt=""></a>
                    </div>
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{asset('icons/companies/halliburton.svg')}}" alt=""></a>
                    </div>
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{asset('icons/companies/ppc.png')}}" alt=""></a>
                    </div>
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{asset('icons/companies/schlumberger.svg')}}" alt=""></a>
                    </div>
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{App::isLocale('uk') || App::isLocale('ru') ? asset('icons/companies/ubs-uk.svg') : asset('icons/companies/ubs-en.svg')}}" alt=""></a>
                    </div>
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{asset('icons/companies/weatherford.svg')}}" alt=""></a>
                    </div>
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{asset('icons/companies/dtek.svg')}}" alt=""></a>
                    </div>
                    <div class="brand-slide">
                        <a href="#" class="brand-item block-link"><img src="{{asset('icons/companies/parker-drilling.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="ad-section">
                <h2>{{__('ui.newPosts')}}</h2>
                <div class="ad-list">
                    <x-home-items :posts="$new_posts"/>
                    <div class="ad-col ad-col-more">
                        <a href="{{route('list')}}" class="ad-more">{{__('ui.morePosts')}}</a>
                    </div>
                </div>
            </div>
            @if ($urgent_posts->isNotEmpty())
                <div class="ad-section">
                    <h2>{{__('ui.urgentPosts')}}</h2>
                    <div class="ad-list">
                        <x-home-items :posts="$urgent_posts"/>
                    </div>
                    <!--
                    <div class="button-holder">
                        <a href="" class="button button-more">Більше пропозицій</a>
                    </div>
                    -->
                </div>
            @endif
        </div>
    </section>
    <section class="main-about">
        <div class="holder">
            <div class="main-about-block">
                <div class="main-about-logo">
                    <img src="{{asset('icons/logo-big.svg')}}" alt="">
                </div>
                <p>{{__('ui.epilogue1')}}</p>
                <p>{{__('ui.epilogue2')}}</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
@endsection