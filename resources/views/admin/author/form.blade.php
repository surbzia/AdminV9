@extends('admin.layouts.app')

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
                                    <input type="text" id="name"
                                        value="{{ old('name', $edit_user) }}"
                                        class="form-control @error('name') is-invalid @enderror"" name="name"
                                        placeholder="User Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" id="email"
                                        class="form-control @error('email') is-invalid @enderror""
                                        value="{{ old('email', $edit_user) }}" name="email" placeholder="User Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>User Role</label>
                                    <select
                                        class="form-control @error('role') is-invalid @enderror"" name="role"
                                        id="role" id="">
                                        <option value="" selected>Select Role</option>
                                        @foreach ($roles as $role)
                                        @php
                                            $selected = $is_edit && count($edit_user->roles) > 0 && $edit_user->roles->pluck('id')[0] == $role->id ? 'Selected' : '';
                                        @endphp
                                            <option
                                                {{$selected }}
                                                value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" id="password"
                                        class="form-control @error('password') is-invalid @enderror"" value=""
                                        name="password" placeholder="Password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" id="confirm_password" class="form-control" value=""
                                        name="confirm_password" placeholder="Confirm Password">
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
    </script>
@endsection
