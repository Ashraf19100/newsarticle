<x-admin.layouts.admin_master>
    <div class="container-fluid p-0">
        <form action="{{route('newsarticle.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label for="title" class="col-sm-3 col-form-label">Article Title</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" id="title" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="category_id" class="col-sm-3 col-form-label">article Category</label>
                <div class="col-sm-8">
                    <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="content" class="col-sm-3 col-form-label">Articl Content</label>
                <div class="col-sm-8">
                    <textarea class="form-control"  id="content" name="content" rows="" cols="" required></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image " class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-8">
                    <input type="file" name="image" class="form-control" id="image" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="date" class="col-sm-3 col-form-label">date</label>
                <div class="col-sm-8">
                    <input type="date" name="date" class="form-control" id="date" value="" required>
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