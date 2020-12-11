



@extends('layouts.master')

@section('title', 'All Post')
@section('content')
  <section style="padding-top:60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              All Post
              <a href="/add-post" class="btn btn-success">Add New Post</a>
            </div>
            <div class="card-body">
              @if (Session::has('post_deleted'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('post_deleted') }}
                  </div>
              @endif
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                      <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>         
                        <td> 
                          <div class="row">
                            <a href="/posts/{{ $post->id }}" class="btn btn-info">VIEW</a>                                                                            
                            <form action="{{ route('post.delete', $post->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger ml-2">DELETE</button>
                            </form>
                          </div>                                                                              
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection