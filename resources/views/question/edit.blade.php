@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-secondary text-white d-flex align-items-center">
                    <h2>Update Question</h2>
                    <div class="ml-auto">
                        <a href="{{route('questions.index')}}" class="btn btn-outline-info text-white">All Questions</a>
                    </div>
                </div>

                <div class="card-body bg-light">
                    <form action="{{ route('questions.update', $question->id) }}" method="post">
                        @method('PUT')
                        @include('question.question-form', ["submitBtnTxt" => "Update Question"])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
