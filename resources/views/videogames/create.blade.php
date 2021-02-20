@section('title')
Modifica gioco
@endsection

@extends('layouts.app')

@section('main_content')
<h1>
    Add a new game to the store
</h1>

<form action="{{ route('videogames.store') }}" method="post">
    @csrf
    @method('POST')

    {{-- titolo --}}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text"
            class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="title">
        <small id="titleHelper" class="form-text text-muted">Insert game title</small>
    </div>

    {{--descrizione --}}
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>
    
    {{-- cover --}}
    <div class="form-group">
      <label for="cover">Cover img</label>
      <input type="text"
        class="form-control" name="cover" id="cover" aria-describedby="coverHelper" placeholder="add a link here">
      <small id="coverHelper" class="form-text text-muted">Add cover</small>
    </div>

    {{-- prezzo --}}
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text"
        class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="add a price here">
      <small id="priceHelper" class="form-text text-muted">Add a price</small>
    </div>

    <button type="submit" class="btn btn-success">Add Game</button>

</form>
@endsection