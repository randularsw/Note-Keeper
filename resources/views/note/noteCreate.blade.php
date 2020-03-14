@extends('layout')

@section('content')
    <h3 class="mt-5">Create New Note</h3>
    <form action="/onNoteCreate" class="my-3 pb-5" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter the title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="5"></textarea>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>
{{--    <form action="/onNoteCreate" method="post">--}}
{{--        <input type="text" name="title">--}}
{{--        <textarea name="body" ></textarea>--}}
{{--        <button>Save</button>--}}
{{--        @csrf--}}
{{--    </form>--}}
@endsection
