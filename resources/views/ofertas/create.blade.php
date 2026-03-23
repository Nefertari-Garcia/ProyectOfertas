Seccion para crear empleados
<form action="{{url('/ofertas')}}" method="post" enctype="multipart/form-data">
    {{csrf_field() }}
    <label for="Nombre">{{'Nombre'}}</label >
    <input  type="text" name="Nombre" id="Nombre" value="">
    <br/>
    
    <label for="Descripcion">{{'Descripcion'}}</label >
    <input  type="text" name="Descripcion" id="Descripcion" value="">
    <br/>
    
    <label for="Precio">{{'Precio'}}</label >
    <input  type="int" name="Precio" id="Precio" value="">

    <br/>
    
    <label for="Descuento">{{'Descuento'}}</label >
    <input  type="int" name="Descuento" id="Descuento" value="">

    <br/>
    <label for="Foto">{{'Foto'}}</label >
    <input  type="file" name="Foto" id="Foto" value="">
    <br/>

    
    <input type="submit" value="Agregar">
    <br>
    <a href="{{url('ofertas')}}">Inicio</a>
</form>
