@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-secondary text-white d-flex align-items-center">
                    <h2>Ask Question</h2>
                    <div class="ml-auto">
                        <a href="{{route('questions.index')}}" class="btn btn-outline-info text-white">All Questions</a>
                    </div>
                </div>

                <div class="card-body bg-light">
                    <form action="{{ route('questions.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Question Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">

                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="body">Question in Detail</label>
                            <textarea rows="6" name="body" value="{{ old('body') }}" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"></textarea>

                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Submit Question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
