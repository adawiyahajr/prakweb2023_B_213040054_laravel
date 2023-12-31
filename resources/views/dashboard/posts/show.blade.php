@extends('dashboard.layoutf.main')

@section('container')
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success"><span
                            data-feather="arrow-left"></span>Back to all my post</a>
                    <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                    <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>
                </div>
            </form>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                        class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
        </div>
    </div>
@endsection