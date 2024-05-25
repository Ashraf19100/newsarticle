<x-admin.layouts.admin_master>
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>





        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Users </h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th class="d-none d-xl-table-cell">Email</th>
                            <th class="d-none d-xl-table-cell">Role</th>
                            <th class="d-none d-xl-table-cell">Start Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($user as $user) 
                            <tr>
                                <td>{{$user->name}}</td>
                                <td class="d-none d-xl-table-cell">{{$user->email}}</td>
                                @if($user->role=='admin')
                                <td class="d-none d-xl-table-cell"><p class="bg-success text-center" >{{$user->role}}</p></td>
                                @else
                                <td class="d-none d-xl-table-cell"><p class="text-center" >{{$user->role}}</p></td>
                                @endif               
                                <td class="d-none d-md-table-cell">{{$user->created_at}}</td>
                            </tr>
                            @endforeach
                      
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</x-admin.layouts.admin_master>
