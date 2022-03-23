@extends('layouts.app')
@foreach($posts as $post)
@endforeach
@section('content')
    <div class="container py-3">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $post->title }}</h3>
                        </div>
                        <div class="card-body">
                            <h5>Category: {{$post->sub_category->category()->first()->name}}</h5>
                            <b>Sub Category: {{$post->sub_category->name}}</b>
                            <p>{{ substr($post->description, 0, 100) }}</p>
                            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary btn-block">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
