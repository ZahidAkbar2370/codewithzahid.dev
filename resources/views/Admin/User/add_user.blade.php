@extends("Admin.layout")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add New User</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('save-user')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" name="name" placeholder="e.g Zahid" required  autocomplete="name" autofocus/>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="example@gmail.com" required  autocomplete="email" autofocus/>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}" type="password" name="password" placeholder="Secure Password" required  autocomplete="password" autofocus/>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input id="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" placeholder="Enter your Brand Name" required  autocomplete="password_confirmation" autofocus/>

                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Role</label>
                                            <select id="role" class="form-control form-control-lg @error('role') is-invalid @enderror" value="{{ old('role') }}"  name="role" required  autocomplete="role" autofocus>
                                                <option value="">Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>

                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Save') }}
                                            </button>
                                            <!-- <a href="#" class="btn btn-lg btn-primary">Login</a> -->
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->

                                            
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- card body  -->
                        </div><!-- card -->

                    </div> <!-- col md -->
                </div> <!-- col  -->
            </div>
        </div>
    </main>

@endsection