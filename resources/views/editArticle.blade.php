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

            <input type="hidden" id='title' name="id" value="{{$article->id}}">

            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title" class="w-full" value="{{$article->title}}"><br>

            <label for="subtitle">Subtitle:</label><br>
            <input type="text" name="subtitle" class="w-full" id="subtitle" value="{{$article->subtitle}}"><br>

            <label for="tiny">Body:</label><br>
            <textarea name="body_raw" id="tiny" cols="30" rows="10">
                {!!$article->body_raw!!}
            </textarea>

            <input type="hidden" name="body" id="body" value="nil">

            <label for="bg_color">Card Background</label>
            <input type="color" name="bgcolor" id="bg_color" value="{{$article->bgcolor}}"><br>
            
            <label for="fg_color">Card text color</label>
            <input type="color" name="fgcolor" id="fg_color" value="{{$article->fgcolor}}"><br>   

            <label for="relevant">Important?</label>
            <input type="checkbox" name="relevant" id="relevant" {{($article->relevant)?'checked':''}}><br>

            <label for="image">File name </label>
            <select name="image" id="image">
                <option value={{$article->image}}>{{$article->image}}</option>
                @foreach ($images as $image)
                @if ($image == $article->image)

                
                    
                @else

                <option value={{$image}}>{{$image}}</option>
                
                @endif
                @endforeach
            </select>

            <img src="/img/{{$article->image}}" id="img" alt="" srcset="">

            @csrf


            <button class="border-2 my-2 hover:bg-black hover:text-white" onclick="preview()">Vista previa</button> <br>

            <button class="border-2 my-2 hover:bg-black hover:text-white" onclick="fdelete()">BORRAR</button>

            <button class="border-2 my-2 hover:bg-black hover:text-white" onclick="fsubmit()"  >Actualizar</button>


            


        </form>


    </div>
</div>
  
@endsection

@section('js')
<script>
    let form = document.querySelector('#form1');

    function updateImage(path){
        
            let img = document.querySelector('#img');
            img.src = `/img/${path}`;
        
    }

    let image = document.querySelector("#image");

    image.addEventListener("change",()=>{
        updateImage(image.options[image.selectedIndex].value);
    })


    function fdelete(){
        confirm("Estas seguro que deseas borrar el articulo?");
        form.target="";
        form.action="/admin/delete";
        form.submit();


    }

    function preview(){
        
        form.action="/admin/preview"
        form.target="_blank"
        document.querySelector('#body').value = tinymce.activeEditor.getContent({format:'text'});
        form.submit();
        
        
    }

    function fsubmit(){
        form.action='/admin/updated';
        form.target="";
        if (document.querySelector('#relevant').value == "on"){
            document.querySelector('#relevant').value = 1;
        };
        document.querySelector('#body').value = tinymce.activeEditor.getContent({format:'text'});
        form.submit();
    }
</script>
    
@endsection


