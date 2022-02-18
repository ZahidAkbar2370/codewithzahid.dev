@extends("Admin.layout")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Send SMS</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('send-sms')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Mobile No <small>(Enter Mobile if Email Send To Specific Student.)</small></label>
                                            <input id="mobile_no" class="form-control form-control-lg @error('mobile_no') is-invalid @enderror" value="{{ old('mobile_no') }}" type="number" name="mobile_no" placeholder="923081312527"  autocomplete="mobile_no" autofocus/>

                                            @error('mobile_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Enter Message</label>
                                            <textarea id="message" class="form-control form-control-lg @error('message') is-invalid @enderror" value="{{ old('message') }}" name="message" placeholder="Write Message..." required rows="8" autocomplete="message" autofocus maxlength="145"></textarea>

                                            @error('message')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Send') }}
                                            </button>

                                            
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