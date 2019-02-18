@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-secondary text-white d-flex align-items-center">
                        <h2>Question List</h2>
                        <div class="ml-auto">
                            <a href="{{route('questions.create')}}" class="btn btn-outline-info text-white">Ask Question</a>
                        </div>
                    </div>

                    <div class="card-body bg-light">
                        @include('layouts.messages')

                        @foreach($questions as $aQuestion)
                            <div class="media">
                                <div class="d-flex flex-column counters">
                                    <div class="vote"><span class="d-block font-weight-bold">{{ $aQuestion->votes }}</span>
                                        {{ str_plural('vote',$aQuestion->votes) }}
                                    </div>
                                    <div class="answer"><span class="d-block font-weight-bold">{{ $aQuestion->answers }}</span>
                                        {{ str_plural('answer',$aQuestion->answers) }}
                                    </div>
                                    <div class="view">{{ $aQuestion->views }}
                                        {{ str_plural('view',$aQuestion->views) }}
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mt-0"><a href="{{ route('questions.show', $aQuestion->id) }}">{{ $aQuestion->title }}</a></h3>
                                        <div class="ml-auto">
                                            <a href="{{route('questions.edit', $aQuestion->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                            <form class="d-inline" method="POST" action="{{ route('questions.destroy', $aQuestion->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure to delete?')">DELETE</button>
                                            </form>
                                        </div>
                                    </div>

                                    <p class="lead">
                                        Asked By
                                        <a href="{{ $aQuestion->user->url }}">{{ $aQuestion->user->name }}</a>
                                    </p>
                                    <small class="text-muted">{{ $aQuestion->created_date }}</small>
                                    {{ str_limit($aQuestion->body, 250) }}
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <br/>
                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
@endsection
