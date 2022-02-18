@extends("Admin.layout")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add New Lecture</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('save-lecture')}}" enctype="multipart/form-data">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input id="title" class="form-control form-control-lg @error('title') is-invalid @enderror" value="{{ old('title') }}" type="text" name="title" placeholder="Lecture Title" required  autocomplete="title" autofocus/>

                                            @error('title')
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

                                        <div class="mb-3">
                                            <label class="form-label">Video URL</label>
                                            <input id="video_link" class="form-control form-control-lg @error('video_link') is-invalid @enderror" value="{{ old('video_link') }}" type="text" name="video_link" placeholder="Youtube video URL" required  autocomplete="video_link" autofocus/>

                                            @error('video_link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Document URL</label>
                                            <input id="document_url" class="form-control form-control-lg @error('document_url') is-invalid @enderror" value="{{ old('document_url') }}" type="text" name="document_url" placeholder="Document URL"  autocomplete="document_url" autofocus/>

                                            @error('document_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Thumbnail</label>
                                            <input id="thumbnail" class="form-control form-control-lg @error('thumbnail') is-invalid @enderror" value="{{ old('thumbnail') }}" type="file" name="thumbnail" required  autocomplete="thumbnail" autofocus/>

                                            @error('thumbnail')
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