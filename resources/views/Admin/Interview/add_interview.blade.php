@extends("Admin.layout")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add New Interview</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('save-interview')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Guest Name</label>
                                            <input id="guest_name" class="form-control form-control-lg @error('guest_name') is-invalid @enderror" value="{{ old('guest_name') }}" type="text" name="guest_name" placeholder="e.g Zahid" required  autocomplete="guest_name" autofocus/>

                                            @error('guest_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Pasion</label>
                                            <input id="pation" class="form-control form-control-lg @error('pation') is-invalid @enderror" value="{{ old('pation') }}" type="text" name="pation" placeholder="e.g Web Developer.." required  autocomplete="pation" autofocus/>

                                            @error('pation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Video URL</label>
                                            <input id="video_url" class="form-control form-control-lg @error('video_url') is-invalid @enderror" value="{{ old('video_url') }}" type="text" name="video_url" placeholder="Youtube Video URL" required  autocomplete="video_url" autofocus/>

                                            @error('video_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Short Introduction</label>
                                            <textarea id="short_introduction" class="form-control form-control-lg @error('short_introduction') is-invalid @enderror" value="{{ old('short_introduction') }}" name="short_introduction" placeholder="Short Introduction" required  autocomplete="short_introduction" autofocus rows="5"></textarea>
                                           

                                            @error('short_introduction')
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