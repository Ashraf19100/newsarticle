<x-admin.layouts.admin_master>
<div class="card-header">
        <h1>Create Article <a href="{{route('newsarticle.create')}}">Add New</a></h1>
    </div>
    <div class="card-body">
    <table class="table table-hover my-0">
        <thead>
        <tr>
            <th>SL</th>
            <th>Article Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($newsarticle as $key=>$newsarticle)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$newsarticle->title}}</td>
                <td><a class="btn btn-secondary " href="{{route('newsarticle.edit',['newsarticle'=>$newsarticle->id])}}">Edit</a>| <a href="{{route('newsarticle.show',['newsarticle'=>$newsarticle->id])}}" class="btn btn-outline-secondary ">Show</a>
                    <form action="{{route('newsarticle.destroy',['newsarticle'=>$newsarticle->id])}}" method="post">
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