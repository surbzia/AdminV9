@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mb-15 pb-15 pr-5 text-right">
            <h5 class="float-left">Profile</h5>
            <a class="btn btn-dark btn-sm rounded-pill" href="{{ route('user.index') }}">back</a>
        </div>
        <hr>
        <div class="col-md-12 " style="padding-right: 64px;">
            <div class="card mb-30 card-border">
                <div class="pb-20">
                    <form action="{{route('update_profile',Auth::user()->id)}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" id="name" onkeyup="generateSlug(event)"
                                        value="{{ old('name',Auth::user()) }}" class="form-control" name="name"
                                        placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" id="email" class="form-control"
                                        value="{{ old('email',Auth::user()) }}" name="email"
                                        placeholder="User Email">
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

                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-primary btn-sm rounded-pill col-md-2"
                                    type="submit">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script></script>
@endsection
