<h1>{{ $oferta->Nombre }}</h1>

<img src="{{ asset('storage/' . $oferta->Foto) }}" width="300">

<p><strong>Descripción:</strong> {{ $oferta->Descripcion }}</p>
<p><strong>Precio:</strong> {{ $oferta->Precio }}</p>
<p><strong>Descuento:</strong> {{ $oferta->Descuento }}</p>

<a href="{{ route('ofertas.index') }}">Volver</a>