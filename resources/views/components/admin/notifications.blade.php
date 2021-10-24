@if (session('success'))
    <div class="custom-alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="custom-alert alert-danger">
        {{ session('error') }}
    </div>
@endif