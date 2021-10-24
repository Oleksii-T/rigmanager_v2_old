@extends('admin.layouts.app')

@section('title', 'Category edit')

@section('content_header')
    <h1>Edit Category #{{$category->id}}</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{route('admin.categories.update', $category)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach(\App\Models\Language::all() as $language)
                            <li class="nav-item">
                                <a class="nav-link {{ !$loop->index ? 'active' : '' }}" data-toggle="tab" href="#{{ $language->slug }}" role="tab" aria-selected="true">{{ $language->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @foreach(\App\Models\Language::all() as $language)
                            <div class="tab-pane fade show {{ !$loop->index ? 'active' : '' }}" id="{{ $language->slug }}" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="Category name" name="name[{{ $language->slug }}]" value="{{ old('name.' . $language->slug) ?? $category->getFieldTranslation('name', $language->slug) }}">
                                                    <span class="invalid-input"></span>
                                                    @error("name.$language->slug")
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="slug" value="{{old('slug')??$category->slug}}">
                                @error("slug")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Parent category</label>
                                <select name="category_id" class="form-control select2">
                                    <option value="" {{!$category->category_id ? 'selected' : ''}}>NONE</option>
                                    @foreach (\App\Models\Category::all() as $ctgr)
                                        <option value="{{$ctgr->id}}" {{$category->category_id==$ctgr->id ? 'selected' : ''}}>{{$ctgr->getFieldTranslation('name', 'en')}}</option>
                                    @endforeach
                                </select>
                                @error("category_id")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <input type="text" class="d-none" name="image_deleted">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="file-input">
                                        <label class="custom-file-label" for="file-input">{{$category->image}}</label>
                                    </div>
                                    <div class="input-group-append {{$category->image ? '' : 'd-none'}}">
                                        <span class="input-group-text text-danger btn remove-saved-image">Remove</span>
                                    </div>      
                                    @error('image')
                                        <span class="invalid-feedback d-inline">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="custom-file-preview">
                                    <img src="{{$category->image ? $category->image_src : ''}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Thread</label>
                                <select name="thread" class="form-control">
                                    @foreach (threads() as $key=>$thread)
                                        <option value="{{$key}}" {{$category->thread==$key ? 'selected' : ''}}>{{$thread}}</option>
                                    @endforeach
                                </select>
                                @error("thread")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('scripts')
    <script type="text/javascript" src="{{asset('js/admin/categories.js')}}"></script>
@stop