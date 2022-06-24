@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-15 pb-15 pr-5 text-right">
            <h5 class="float-left">Roles</h5>
            <button class="btn btn-info btn-sm rounded-pill" data-toggle="modal" data-target="#RoleAddModel" type="button">Add Role</button>

        </div>
        <hr>
        <div class="col-md-12">
            <div class="card-box mb-30 card-border" style="margin-right: 64px;">
                <div class="pb-20" >
                    <table id="permission" class="row-border" style="width:80%:">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Name</th>
                                <th>Manage</th>
                                <th style="width: 13%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-outline-success btn-sm rounded-pill"
<<<<<<< HEAD
                                            href="{{ route('role.show', $role->id) }}">Permissions</a>
=======
                                            href="{{ route('role.edit', $role->id) }}">Permissions</a>
>>>>>>> 5fdd961e9d25e34c1f353a46323c13b943406251
                                    </td>
                                    <td class="d-flex">
                                        <a class="btn btn-outline-dark btn-sm rounded-pill"
                                            href="{{ route('role.edit', $role->id) }}">Edit</a>

                                        <form method="post" action="{{ route('role.destroy', $role->id) }}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-outline-danger btn-sm rounded-pill">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        @include('admin.roles.model')
@endsection
@section('script')
    <script></script>
@endsection
