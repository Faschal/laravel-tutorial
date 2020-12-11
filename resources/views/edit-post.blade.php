@extends('layouts.master')

@section('title', 'Edit Post')
@section('content')
  <section style="padding-top:60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-header">
              Edit Post
            </div>
            <div class="card-body">
              @if (Session::has('post_updated'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('post_updated') }}
                  </div>
              @endif
              <form method="post" action="{{ route('post.edit') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $post->id }}"/>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Input Title" value="{{ $post->title }}">
                </div>
                
                <div class="form-group">
                  <label for="body">Description</label>
                  <textarea name="body" class="form-control" rows="3">{{ $post->body }}</textarea>
                </div>
                
                <div class="row">
                  <button type="submit" class="btn btn-success mx-3">Update Post</button>
                  <a href="/posts" class="btn btn-info">Back</a>
                </div>
                

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection