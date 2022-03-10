@extends("Admin.layout")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add New Internee</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('save-internee')}}">
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
                                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" type="text" name="email" placeholder="e.g Zahid@gmail.com" required  autocomplete="email" autofocus/>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Cnic No</label>
                                            <input id="cnic_no" class="form-control form-control-lg @error('cnic_no') is-invalid @enderror" value="{{ old('cnic_no') }}" type="cnic_no" name="cnic_no" placeholder="e.g 32203_55555672" required  autocomplete="cnic_no" autofocus/>

                                            @error('cnic_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <input id="mobile_no" class="form-control form-control-lg @error('mobile_no') is-invalid @enderror" value="{{ old('mobile_no') }}" type="mobile_no" name="mobile_no" placeholder="e.g +92 3069282600" required  autocomplete="mobile_no" autofocus/>

                                            @error('mobile_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Degree Name</label>
                                            <input id="degree_name" class="form-control form-control-lg @error('degree_name') is-invalid @enderror" value="{{ old('degree_name') }}" type="text" name="degree_name" placeholder="e.g BSCS" required  autocomplete="degree_name" autofocus/>

                                            @error('degree_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Start Date</label>
                                            <input id="start_date" class="form-control form-control-lg @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}" type="date" name="start_date" required  autocomplete="start_date" autofocus/>

                                            @error('start_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">End Date</label>
                                            <input id="end_date" class="form-control form-control-lg @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}" type="date" name="end_date" required  autocomplete="end_date" autofocus/>

                                            @error('end_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Start Time</label>
                                            <input id="start_time" class="form-control form-control-lg @error('start_time') is-invalid @enderror" value="{{ old('start_time') }}" type="time" name="start_time" required  autocomplete="start_time" autofocus/>

                                            @error('start_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">End Time</label>
                                            <input id="end_time" class="form-control form-control-lg @error('end_time') is-invalid @enderror" value="{{ old('end_time') }}" type="time" name="end_time" required  autocomplete="end_time" autofocus/>

                                            @error('end_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Language</label>
                                            <select id="language" class="form-control form-control-lg @error('language') is-invalid @enderror" value="{{ old('language') }}"  name="language" required  autocomplete="language" autofocus>
                                                <option value="">Select Language</option>

                                                @if(!empty($languages))
                                                @foreach($languages as $language)
                                                    <option value="{{$language->id}}">{{$language->language_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>

                                            @error('language')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}" type="password" name="password" placeholder="Secure Password" required  autocomplete="password" autofocus/>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> -->

                                        <!-- <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input id="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" placeholder="Enter your Brand Name" required  autocomplete="password_confirmation" autofocus/>

                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> -->

                                        <!-- <div class="mb-3">
                                            <label class="form-label">Role</label>
                                            <select id="role" class="form-control form-control-lg @error('role') is-invalid @enderror" value="{{ old('role') }}"  name="role" required  autocomplete="role" autofocus>
                                                <option value="">Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                                <option value="user">Inerny</option>
                                            </select>

                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> -->
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