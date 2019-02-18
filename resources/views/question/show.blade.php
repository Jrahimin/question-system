@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white d-flex align-items-center">
                        <h1>{{ $question->title }}</h1>
                        <div class="ml-auto">
                            <a href="{{route('questions.index')}}" class="btn btn-outline-info text-white">All Questions</a>
                        </div>
                    </div>

                    <div class="card-body bg-light">
                        {!! $question->body !!}
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>{{ $question->answers." ".str_plural("Answer", $question->answers) }}</h2>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                @foreach($question->question_answers as $answer)
                                    <div class="media">
                                        <div class="media-body">
                                            {!! $answer->body !!}
                                            <div class="float-right">
                                                <span class="text-muted">Answered {{ $answer->CreatedDate }}</span>
                                                <div class="media">
                                                    <a class="pr-2" href="#"><img src="{{ $answer->user->avatar }}"> </a>
                                                    <div class="media-body">
                                                        <a href="#">{{ $answer->user->name }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

