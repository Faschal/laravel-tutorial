@extends('layouts.master')

@section('title', 'View Post')
@section('content')
  <section style="padding-top:60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Post Details
            </div>
            <div class="card-body">
              <h2>{{ $post->title }}</h2>
              <p>{{ $post->body }}</p>
            </div>
          </div>
          <a href="{{ url()->previous() }}" class="btn btn-primary mt-2"> Back</a>
        </div>
      </div>
    </div>
  </section>
@endsection