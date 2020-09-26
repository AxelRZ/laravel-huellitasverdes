@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<style>

</style>
<script src="https://cdn.tiny.cloud/1/204jtyzmjocpz3z1pa7cmkzepne83mds3q7cfy8hihusu9yk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#tiny'
    });
</script>

@endsection

@section('body')

<div class="inner-wrap w-full">
    <div class="max-w-default mx-auto">

        <form  method="post">

            

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$article->title}}"><br>

            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" value="{{$article->subtitle}}"><br>

            <textarea name="body_raw" id="tiny" cols="30" rows="10" value="{{$article->body_raw}}"></textarea>

            <label for="bg_color">Card Background</label>
            <input type="color" name="bg_color" id="bg_color" value="{{$article->bg_color}}"><br>
            
            <label for="fg_color">Card text color</label>
            <input type="color" name="fg_color" id="fg_color" value="{{$article->fg_color}}"><br>   

            <label for="relevance">Important?</label>
            <input type="checkbox" name="relevance" id="relevance" value="{{$article->relevance}}"><br>

            <label for="image"> Image</label>
            <img src="/img/{{$article->image}}" alt="" srcset="">
            <input type="file" name="image" id="image">

            

            <input type="submit" value="Actualizar">


        </form>

    </div>
</div>

    
@endsection


