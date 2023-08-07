@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <div class="row profile-body">
            <!-- left wrapper start -->
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Admin</h6>
                            <form class="forms-sample" method="post" action="{{ route('store.admin') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Admin User Name</label>
                                    <input type="text" class="form-control" name="username" id="username">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Admin Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Admin Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Admin Phone</label>
                                    <input type="text" class="form-control" name="phone" id="email">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Admin Address</label>
                                    <input type="text" class="form-control" name="address" id="address">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Admin Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Role Name</label>
                                    <select name="roles" class="form-select" id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <!-- right wrapper end -->
        </div>
    </div>
@endsection
