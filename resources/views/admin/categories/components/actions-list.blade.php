<div class="table_actions_btns d-flex flex-row justify-content-end">
    <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-info">Edit</a>
    <a href="#" class="btn btn-danger ml-2 delete-resource" data-link="{{route('admin.categories.destroy', $category)}}">Delete</a>
</div>