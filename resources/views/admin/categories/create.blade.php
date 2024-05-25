<x-admin.layouts.admin_master>
    <div class="container-fluid p-0">
        <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label for="category_name" class="col-sm-3 col-form-label">Category Name</label>
                <div class="col-sm-8">
                    <input type="text" name="category_name" class="form-control" id="category_name" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-8 offset-3">
                    <button type="submit" class="btn btn-secondary">submit </button>
                </div>
            </div>

        </form>
    </div>
</x-admin.layouts.admin_master>