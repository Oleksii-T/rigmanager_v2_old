@extends('admin.layouts.app')

@section('title', 'Categories')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Categories</h1>
        <a href="{{route('admin.categories.create')}}" class="btn btn-success">+ Add category</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <select class="filter form-control select2" name="parent">
                                <option value="">Parent category</option>
                                @foreach (\App\Models\Category::whereHas('children')->get() as $category)
                                    <option value="{{$category->id}}" {{ app('request')->input('category') && app('request')->input('category')==$category->id ? 'selected' : '' }}>{{$category->getFieldTranslation('name', 'en')}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="filter form-control" name="children">
                                <option value="">Children presence</option>
                                <option value="1">With children</option>
                                <option value="2">Without children</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="filter form-control" name="thread">
                                <option value="">Thread</option>
                                @foreach (threads() as $key => $thread)
                                    <option value="{{$key}}">{{$thread}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group pt-3">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input filter" id="master-categories" name="master-categories">
                            <label class="custom-control-label" for="master-categories">Only master categories</label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="categories-table" class="table table-bordered table-striped dataTable dtr-inlite">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Name</th>
                                <th>Sub categories</th>
                                <th>Parent category</th>
                                <th class="table-action">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript" src="{{asset('js/admin/categories.js')}}"></script>
@stop