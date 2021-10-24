@extends('admin.layouts.app')

@section('title', 'Category create')

@section('content_header')
    <h1>Create Category</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
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
                                                    <input type="text" class="form-control" placeholder="Category name" name="name[{{ $language->slug }}]" value="{{old('name.' . $language->slug)}}">
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
                                <input type="text" name="slug" class="form-control" placeholder="slug" value="{{old('slug')}}">
                                @error("slug")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Parent category</label>
                                <select name="category_id" class="form-control select2">
                                    @foreach (\App\Models\Category::all() as $category)
                                        <option value="{{$category->id}}">{{$category->getFieldTranslation('name', 'en')}}</option>
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
                                    <div class="custom-file">
                                        <input type="file" name="image" id="file-input">
                                        <label class="custom-file-label" for="file-input"></label>
                                    </div>
                                    @error('image')
                                        <span class="invalid-feedback d-inline">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="custom-file-preview">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Thread</label>
                                <select name="thread" class="form-control">
                                    @foreach (threads() as $key=>$thread)
                                        <option value="{{$key}}">{{$thread}}</option>
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