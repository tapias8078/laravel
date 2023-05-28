@extends('layouts.app')
@section('content')
<main>
    <div class="container py-4">
        <h1>Nueva Publicacion</h1>
        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$errors}}</li>
                    @endforeach
                </ul>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{url('posts')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>

            </div>


        </div>
        <div class="mb-3 row">
            <label for="slug" class="col-sm-2 col-form-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>

            </div>

        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>

            </div>

        </div>
        <div class="mb-3 row">
            <label for="content" class="col-sm-2 col-form-label">Contenido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}" required>

            </div>

        </div>
        <div class="mb-3 row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" accept="image/*" class="form-control" id="image" name="image" value="{{ old('image') }}" required>

            </div>

        </div>
        <div class="mb-3 row">
            <label for="posted" class="col-sm-2 col-form-label">Publicado</label>
            <div class="col-sm-10">
                <select name="posted" id="posted"  >
                    <option value="not" {{ old('posted') == 'not' ? 'selected' : ''}}>No Publicado</option>
                    <option value="yes" {{ old('posted') == 'yes' ? 'selected' : ''}}>Publicado</option>
                </select>
            </div>
        </div>
        <a href="{{url('posts')}}" class="btn btn-secondary  ">Regresar</a>
        <button  type="submit" class="btn btn-primary">Guardar</button>
    </form>





    </div>
</main>


@endsection
