@extends('Layouts.head')

@section('title', 'Blogs')

@section('content')
<div class="container">
    <a href="{{ route('blog.create') }}" class="btn btn-primary">Add Blog</a>
    <h1 class="mb-4">Blogs</h1>
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ \Str::limit($blog->content, 100) }}</p>
                    </div>
                    <div class="d-flex gap-3 m-3">
                        <div>
                            <a href="{{ route('blog.destroy',$blog->id) }}" class="btn btn-danger">حذف</a>
                        </div>
                        <div>
                            <form action="{{ route('blog.edit',$blog->id) }}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-warning">تعديل</button>
                            </form>
                        </div>
                        <div>
                            <a href="#" class="btn btn-success">نشر</a>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary">عرض</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        {{ $blogs->links() }}
    </div>
</div>
@endsection
