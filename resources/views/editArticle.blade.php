@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<style>

</style>
<script src="https://cdn.tiny.cloud/1/204jtyzmjocpz3z1pa7cmkzepne83mds3q7cfy8hihusu9yk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#tiny',
        plugins: 'image table imagetools'
    });
</script>

@endsection

@section('body')

<div class="inner-wrap w-full">
    <div class="max-w-default mx-auto p-4">

        <form  method="post" action="/admin/preview">

            <input type="hidden" name="id" value="{{$article->id}}">

            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title" class="w-full" value="{{$article->title}}"><br>

            <label for="subtitle">Subtitle:</label><br>
            <input type="text" name="subtitle" class="w-full" id="subtitle" value="{{$article->subtitle}}"><br>

            <label for="tiny">Body:</label><br>
            <textarea name="body_raw" id="tiny" cols="30" rows="10" value="{{$article->body_raw}}"></textarea>

            <label for="bg_color">Card Background</label>
            <input type="color" name="bgcolor" id="bg_color" value="{{$article->bg_color}}"><br>
            
            <label for="fg_color">Card text color</label>
            <input type="color" name="fgcolor" id="fg_color" value="{{$article->fg_color}}"><br>   

            <label for="relevance">Important?</label>
            <input type="checkbox" name="relevance" id="relevance" value="{{$article->relevance}}"><br>

            <label for="image"> Image</label>
            <img src="/img/{{$article->image}}" alt="" srcset="">
            <input type="file" name="image" id="image" value="{{$article->image}}">

            @csrf

            <input type="submit" class="w-full" value="Actualizar">


        </form>

    </div>
</div>

    
@endsection

