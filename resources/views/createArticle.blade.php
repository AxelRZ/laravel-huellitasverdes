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

        <form  method="post" action="/admin/post" id="form1">
            @csrf

            <input type="hidden" id='title' name="id" >

            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title" class="w-full" ><br>

            <label for="subtitle">Subtitle:</label><br>
            <input type="text" name="subtitle" class="w-full" id="subtitle" ><br>

            <label for="tiny">Body:</label><br>
            <textarea name="body_raw" id="tiny" cols="30" rows="10">
            </textarea>

            <input type="hidden" name="body" id="body" >

            <label for="bg_color">Card Background</label>
            <input type="color" name="bgcolor" id="bg_color" ><br>
            
            <label for="fg_color">Card text color</label>
            <input type="color" name="fgcolor" id="fg_color" ><br>   

            <label for="relevant">Important?</label>
            <input type="checkbox" name="relevant" id="relevant" ><br>

            <label for="image">File path: /img/</label>
            <input type="text" name="image" id="image" value="">


            @csrf

            <button onclick="preview()">Vista previa</button> <br>
            <br>

            <button onclick="fsubmit()" class="w-full" >Subir</button>

            


        </form>

    </div>
</div>
  
@endsection

@section('js')
<script>
    let form = document.querySelector('#form1');



    function preview(){
        
        form.action="/admin/preview"
        form.target="_blank"
        document.querySelector('#body').value = tinymce.activeEditor.getContent({format:'text'});
        form.submit();
        
        
    }

    function fsubmit(){
        form.action='/admin/created'
        document.querySelector('#body').value = tinymce.activeEditor.getContent({format:'text'});
        if (document.querySelector('#relevant').value == "on"){
            document.querySelector('#relevant').value = true;
        }
        form.submit();
    }
</script>
    
@endsection


