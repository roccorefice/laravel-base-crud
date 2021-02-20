@section('title')
Videogames
@endsection

@extends('layouts.app')

@section('main_content')
<h1>All games</h1>
<a href="{{ route('videogames.create') }}" class="btn btn-warning">ADD NEW GAME</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($videogames as $game )
            <tr>
                <td>{{ $game->id }}</td>
                <td><img  width="70" src="{{ $game->cover }}" alt="{{ $game->title }}"></td>
                <td>{{ $game->title }}</td>
                <td>{{ $game->description }}</td>
                <td>{{ $game->price }}</td>
                <td>{{ $game->created_at }}</td>
                <td>{{ $game->updated_at }}</td>
                <td>
                    <a href="" class="btn btn-primary">
                        <i class="fas fa-eye fa-lg fa-fw"></i>
                        View
                    </a>
                    <a href="" class="btn btn-primary">
                        <i class="fas fa-trash fa-lg fa-fw"></i>
                        Edit
                    </a>
                    <form action="" method="post">
                        <i class="fas fa-trash fa-lg fa-fw"></i>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                     
                </td>

            </tr>
        @endforeach     
        
    </tbody>
</table>

@endsection