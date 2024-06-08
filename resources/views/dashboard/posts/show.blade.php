@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-8"></div>
                <h1 class="mb-3">{{ $post->title }}</h1>

                <!-- Button group wrapper -->
                <div class="btn-group btn-group-sm d-flex justify-content-start">
                    <a href="/dashboard/posts" class="btn btn-success me-1" style="width: fit-content;"><i class="bi bi-arrow-bar-left"></i> Back</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning me-1" style="width: fit-content;"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf

                        <button class="btn btn-danger border-0" onclick="return confirm('Are your sure?')" style="width: fit-content;"><i class="bi bi-x-circle"></i> Delete</button>
                    </form>
                </div>

                @if ($post->image)
                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ asset('/storage/' . $post->image) }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <!-- Use a more semantic HTML structure for the article content -->
                <section class="my-3 fs-5">
                    <article>{!! $post->body!!}</article>
                </section>
            </div>
        </div>
    </main>
@endsection
