<x-admin.layouts.admin_master>
    <div class="card-header">
        <h1>Create Category <a href="{{route('categories.create')}}">Add New</a></h1>
    </div>
    <div class="card-body">
    <table class="table table-hover my-0">
        <thead>
        <tr>
            <th>SL</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $key=>$category)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$category->category_name}}</td>
                <td><a class="btn btn-secondary " href="{{route('categories.edit',['category'=>$category->id])}}">Edit</a>|
                    <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you Sure Want to Delete this Data')">DELETE</button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</x-admin.layouts.admin_master>