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
        <form action="{{url('posts')}}" method="post" enctype="multipart/form-data"></form>
        @csrf

        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>

            </div>


        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>

            </div>

        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>

            </div>

        </div>




    </div>
</main>


@endsection
