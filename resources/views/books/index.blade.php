@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <h2 class="mb-4">Book List</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <form action="{{ route('books.index') }}" method="GET" class="d-flex" style="flex: 1;">
            <input type="text" name="search" class="form-control me-2" placeholder="Search books..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary text-white">Search</button>
        </form>
        <a href="{{ route('books.create') }}" class="btn btn-success ms-3 text-white">New Book</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Stock</th>
                <th>Price ($)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->stock }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-success btn-sm text-white">Details</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm text-white">Update</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center">No books found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {!! $books->links('pagination::bootstrap-5') !!}
    </div>
</div>
@endsection
