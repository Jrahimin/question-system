@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Question List</div>

                    <div class="card-body bg-light">
                        @foreach($questions as $aQuestion)
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="mt-0"><a href="{{ $aQuestion->url }}">{{ $aQuestion->title }}</a></h3>
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
