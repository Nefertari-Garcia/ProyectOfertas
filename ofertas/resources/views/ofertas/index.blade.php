Inicio (despliegue de datos)

<<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Descuento</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

    @foreach($ofertas as $oferta)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$oferta->Foto}}</td>
            <td>{{$oferta->Nombre}}</td>
            <td>{{$oferta->Descripcion}}</td>
            <td>{{$oferta->Precio}}</td>
            <td>{{$oferta->Descuento}}</td>
            <td>Editar | Borrar </td>
            
        </tr>
     @endforeach
       
    </tbody>
</table>
