@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row">

            <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Create Post</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                placeholder="Post title">
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug') }}"
                                placeholder="post-slug">
                        </div>

                        <div class="form-group">
                            <label for="image">Post Image</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" rows="8" cols="80"
                                class="form-control">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select id="categoryList" class="form-control" name="sub_category_id" required>
                                @foreach ($categories as $category)
                                    <option style="background-color: lightgrey;  color: blue;" disabled value="{{ $category->id }}">Category : {{ strtoupper($category->name) }}</option>
                                    @foreach ($category->sub_categories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


