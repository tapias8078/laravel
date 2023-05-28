@csrf
<label for="title">Titulo</label>
<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">

<label for="slug">Slug</label>
<input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">

<label for="category_id">Categoría</label>
<select class="form-control" id="category_id" name="category_id">
    @foreach($categories as $title=>$id)
        <option {{old('category_id', '$post->category_id') == $id ? 'selected' : ''}} value="{{ $id}}">{{ $title}}</option>
    @endforeach
</select>

<label for="posted">Estado</label>
<select name="posted" id="posted" >
    <option value="not" {{ old('posted', $post->posted) == 'not' ? 'selected' : ''}}>No Publicado</option>
    <option value="yes" {{ old('posted', $post->posted) == 'yes' ? 'selected' : ''}}>Publicado</option>
</select>

<label for="content">Contenido</label>
<textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>

<label for="">Descripción</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $post->description) }}</textarea>

<input type="submit" class="btn btn-primary" value="Guardar">


