<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('title')
    Productos
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR activo (yield)-->
@section('activo3')
    active-nav-link
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <div class="w-full mt-12">
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Id</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Descripción corta</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Descripción larga</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Precio de venta</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Precio de compra</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Stock</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Peso</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Eliminar</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($productos as $x)
                        <tr>
                            <td class="text-left py-3 px-4">{{$x->id}}</td>
                            <td class="text-left py-3 px-4">{{$x->descripcion_corta}}</td>
                            <td class="text-left py-3 px-4">{{$x->descripcion_larga}}</td>
                            <td class="text-left py-3 px-4">{{$x->precio_venta}}</td>
                            <td class="text-left py-3 px-4">{{$x->precio_compra}}</td>
                            <td class="text-left py-3 px-4">{{$x->stock}}</td>
                            <td class="text-left py-3 px-4">{{$x->peso}}</td>
                            <td class="text-left py-3 px-4">
                                <form action="{{route('delete')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$x->id}}">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-900 rounded" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection