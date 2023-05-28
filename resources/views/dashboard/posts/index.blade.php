@extends('layouts.app')
@section('content')
<a class="btn btn-success my-3" href="{{route('posts.create')}}" >Crear publicación</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $p)
                <tr>
                    <td>{{$p->title}}</td>
                    <td>{{$p->category->title}}</td>
                    <td>{{$p->posted}}</td>
                    <tr>
                        <a class="btn btn-primary" href="{{route('post.edit',$p)}}">Editar</a>
                        <a class="btn btn-primary" href="{{route('post.show',$p)}}">Ver</a>
                        <form action="{{route('post.destroy',$p)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>x
                        </form>
                    </tr>
            @endforeach
        </tbody>
        {{$posts->links()}}
    </table>

@endsection
