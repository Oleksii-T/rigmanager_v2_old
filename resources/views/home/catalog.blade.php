@extends('layouts.page')

@section('meta')
	<title>{{__('meta.title.catalog')}}</title>
	<meta name="description" content="{{__('meta.description.catalog')}}">
    <meta name="robots" content="index, follow">
@endsection

@section('bc')
	<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
		<span itemprop="name">{{__('ui.catalog')}}</span>
		<meta itemprop="position" content="2" />
	</li>
@endsection

@section('content')
<div class="main-block">
	<aside class="side">
		<a href="#side-block" data-fancybox class="side-mob">{{__('ui.catalogNav')}}</a>
		<div class="side-block" id="side-block">
			<div class="side-title">{{__('ui.catalogNav')}}</div>
			<ul class="side-list">
				@foreach ($masterEquipments as $category)
					<li><a href="{{route('category', $category->slug)}}">{{$category->getFieldTranslation('name')}}</a></li>
				@endforeach
			</ul>
		</div>
	</aside>
	<div class="content">
		<h1>{{__('ui.catalog')}}</h1>
		<div class="content-top-text catalog-help">{{__('ui.catalogHelp')}}
		<a href="#se-tags-flag">{{__('ui.gotToSeTags')}}</a></div>
		<div class="category">
			@foreach ($masterEquipments as $category)
				<div class="category-col">
					<div class="category-item">
						<div class="category-img">
							<a href="{{route('category', $category->slug)}}">
								<img src="{{$category->image_src??asset('icons/noImage.svg')}}" alt="">
							</a>
						</div>
						<div class="category-name">
							<a id="tag-2" href="{{route('category', $category->slug)}}">{{$category->getFieldTranslation('name')}}</a> (<span class="orange">{{/*$category->postsDeep()->count()*/'TD'}}</span>)
						</div>
						@if ($category->children->isNotEmpty())
							<ul class="category-list">
								@foreach ($category->children as $sub)
									<li>
										<a href="{{route('category', $sub->slug)}}">{{$sub->getFieldTranslation('name')}}</a>
										@if ($sub->children->isNotEmpty())
											<ul class="category-sublist">
												@foreach ($sub->children as $subSub)
													<li><a href="{{route('category', $subSub->slug)}}">{{$subSub->getFieldTranslation('name')}}</a></li>
												@endforeach
											</ul>
										@endif
									</li>
								@endforeach
							</ul>
						@endif
					</div>
				</div>
			@endforeach
		</div>
		<div id="se-tags-flag" class="category-serv">
			<h2>{{__('ui.service')}}</h2>
			<div class="category-serv-block">
				@foreach ($masterServices as $column)
					<div class="category-serv-col">
						<ul class="category-serv-list">
							@foreach ($column as $category)
								<li>
									<a href="{{route('category', $category->slug)}}">{{$category->getFieldTranslation('name')}}</a> 
									(<span class="orange">{{/*$category->postsDeep()->count()*/'TD'}}</span>)
									@if ($category->children->isNotEmpty())
										<ul class="category-sublist">	
											@foreach ($category->children as $subCategory)
												<li>
													<a href="{{route('category', $subCategory->slug)}}">{{$subCategory->getFieldTranslation('name')}}</a>
												</li>
											@endforeach
										</ul>	
									@endif
								</li>
							@endforeach
						</ul>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection