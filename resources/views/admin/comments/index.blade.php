<x-admin.layouts.admin_master>
<div class="card-header">
        <h1>Comments</h1>
    </div>
    <div class="card-body">
    <table class="table table-hover my-0">
        <thead>
        <tr>
            <th>SL</th>
            <th>Article comment</th>
            <th>Article ID</th>
            <th>User Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comment as $key=>$comments)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$comments->comment}}</td>
                <td>{{$comments->article_id}}</td>
                <td>{{$comments->user_name}}</td>
                <td>
                    <form action="{{route('comments.destroy',['comment'=>$comments->id])}}" method="post">
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