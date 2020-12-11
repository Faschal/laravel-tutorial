@extends('layouts.master')

@section('title', 'Add Post')
@section('content')
  <section style="padding-top:60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-header">
              Add Post
            </div>
            <div class="card-body">
              @if (Session::has('post_created'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('post_created') }}
                  </div>
              @endif
              <form method="post" action="{{ route('post.add') }}">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Input Title">
                </div>
                
                <div class="form-group">
                  <label for="body">Description</label>
                  <textarea name="body" class="form-control" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">Add Post</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection