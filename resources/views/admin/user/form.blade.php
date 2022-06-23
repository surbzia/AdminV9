@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-15 pb-15 pr-5 text-right">
            <h5 class="float-left">{{ $title }}</h5>
            <a class="btn btn-dark btn-sm rounded-pill" href="{{ route('user.index') }}">back</a>
        </div>
        <hr>
        <div class="col-md-12 " style="padding-right: 64px;">
            <div class="card mb-30 card-border">
                <div class="pb-20">
                    <form action="{{ $route }}" method="POST">
                        @csrf
                        @if ($is_edit)
                            {{ method_field('PUT') }}
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" id="name" onkeyup="generateSlug(event)"
                                        value="{{ old('name', $edit_user) }}" class="form-control" name="name"
                                        placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" id="email" class="form-control"
                                        value="{{ old('email', $edit_user) }}" name="email"
                                        placeholder="User Email">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>User Role</label>
                                    <select onchange="enableAddModule(event)" class="form-control" name="role"
                                        id="role" id="">
                                        <option value="" selected>Select Role</option>
                                        @foreach ($roles as $role)
                                            <option {{ $edit_user->roles->pluck('id') == $permission->id ? 'Selected' : '' }}
                                                value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" id="password" class="form-control"
                                        value="" name="password"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" id="confirm_password" class="form-control"
                                        value="" name="confirm_password"
                                        placeholder="Confirm Password<">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-primary btn-sm rounded-pill col-md-2"
                                    type="submit">{{ $button }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function enableAddModule(event) {
            let value = event.target.value;
            if (value == 1) {
                $('.add_module').removeClass('d-none');
            } else {
                $('.add_module').addClass('d-none');
            }
        }

        function generateSlug(event) {
            let str = event.target.value;
            str = str.replace(/[^a-zA-Z0-9\s]/g, "");
            // $('#name').val(str);
            str = str.toLowerCase();
            str = str.replace(/\s/g, '-');
            $('#slug').val(str);
        }
    </script>
@endsection
