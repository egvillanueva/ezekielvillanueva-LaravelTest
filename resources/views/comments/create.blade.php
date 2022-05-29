@extends('layout')

@section('main')
<div class="card shadow-sm p-3 bg-body rounded position-absolute top-50 start-50 translate-middle" style="width: 500px;">
    <div class="row mx-auto text-secondary">Post your comment here...</div>
    <div class="row">
        <form method="post" action="{{ route('comments.store') }}">
        @csrf
            <div class="col-12 mx-auto">
                <label for="name" class="form-label text-secondary">Your Name</label>
                <input type="text" class="form-control text-secondary" id="name" placeholder="Enter Your Name..." name="name"required>
            </div>
            <div class="col-12 mx-auto mt-3">
                <label for="comment" class="form-label text-secondary">Your Comment</label>
                <textarea class="form-control text-secondary" id="comment" rows="5" placeholder="Write your comment here..." required name="comment"></textarea>
            </div>

            <div class="col-12 mx-auto mt-3">
                <center><button type="submit" class="btn btn-secondary btn-comment" style="width: 200px;">Add Comment</button></center>
            </div>
        </form>
    </div>
</div>
@endsection