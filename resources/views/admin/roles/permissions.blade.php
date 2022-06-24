@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-15 pb-15 pr-5 text-right">
            <h5 class="float-left">Permissions assigned to <b>{{ $role_name }}</b></h5>
            <div class="custom-control custom-checkbox float-left">
                <input type="checkbox" class="custom-control-input" id="select_all_permissions">
                <label class="custom-control-label" for="select_all_permissions">Select All</label>
            </div>
            <a class="btn btn-primary btn-sm rounded-pill" href="#">Update</a>
            <a class="btn btn-dark btn-sm rounded-pill" href="{{ route('role.index') }}">back</a>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="row">

                @foreach($permissions as  $key => $permissons )
                    <div class="col-md-3" >
                        <div class="card card-box border-dark">
                            <div class="card-header">
                               {{$key}}
                            </div>
                            <div class="card-body">
                                @foreach($permissons as $subkey => $permission )
                                    @php
                                        $selected = in_array($permission->id, $role_permissions->toArray())? 'checked' : '';
                                    @endphp

                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" {{$selected}} id="permission_check_{{$key}}_{{$subkey}}">
                                    <label class="custom-control-label" for="permission_check_{{$key}}_{{$subkey}}">{{$permission->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>
@endsection
