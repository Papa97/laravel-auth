@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" placeholder="inserisci il titolo del post">
        </div>

        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea  class="form-control" id="content" name="content" placeholder="inserisci il contenuto del post" rows="9"></textarea>
          </div>
        
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="published" name="published">
          <label class="form-check-label" for="exampleCheck1">Pubblica</label>
        </div>
        <button type="submit" class="btn btn-primary">crea</button>
      </form>
</div>

@endsection