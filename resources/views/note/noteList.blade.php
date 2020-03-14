@extends('layout')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Keep Your Notes</h1>
        <p class="lead text-muted">You can store everything from personal moments to business projects, and know they’re always safe, always secure, and ready whenever you need them.</p>
        <p>
            <a href="/noteCreate" class="btn btn-primary my-2">Add New Note</a>
            <a href="/" class="btn btn-secondary my-2">Give Feedback</a>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @forelse($notes as $note)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <b><p>{{$note->title}}</p></b>
                            <p class="card-text">{{$note->body}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                No notes available yet.
            @endforelse
        </div>
    </div>
</div>
@endsection
