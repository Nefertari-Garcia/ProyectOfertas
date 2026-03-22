<form action="{{url('/ofertas/'.$oferta->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}


    <label for="Nombre">{{'Nombre'}}</label >
    <input  type="text" name="Nombre" id="Nombre" value="{{$oferta->Nombre}}">
    <br/>
    
    <label for="Descripcion">{{'Descripcion'}}</label >
    <input  type="text" name="Descripcion" id="Descripcion" value="{{$oferta->Descripcion}}">
    <br/>
    
    <label for="Precio">{{'Precio'}}</label >
    <input  type="int" name="Precio" id="Precio" value="{{$oferta->Precio}}">

    <br/>
    
    <label for="Descuento">{{'Descuento'}}</label >
    <input  type="int" name="Descuento" id="Descuento" value="{{$oferta->Descuento}}">

    <br/>
    <label for="Foto">{{'Foto'}}</label >
    </br>
    {{$oferta->Foto}}
    <input  type="file" name="Foto" id="Foto" value="">
    <br/>
    <input type="submit" value="Editar">
</form>