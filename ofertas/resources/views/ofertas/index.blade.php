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
            <td>
                <img src="{{asset('storage').'/'.$oferta->Foto}}" alt="" width="200">
            </td>
            <td>{{$oferta->Nombre}}</td>
            <td>{{$oferta->Descripcion}}</td>
            <td>{{$oferta->Precio}}</td>
            <td>{{$oferta->Descuento}}</td>
            <td>
            <a href="{{url('/ofertas/'.$oferta->id.'/edit')}}">
                Editar 
            </a>


            <form method="post" action="{{url('/ofertas/'.$oferta->id) }}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');" > Borrar</button>
            </form>
            
            
            </td>
            
        </tr>
     @endforeach
       
    </tbody>
</table>
