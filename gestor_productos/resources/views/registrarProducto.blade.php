<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('title')
    Registrar producto
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR activo (yield)-->
@section('activo2')
    active-nav-link
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <div class="leading-loose">
        <form action="{{route('registrarProducto')}}" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf
            <div class="">
                <label class="block text-sm text-gray-600" for="descripcion_corta">Descripción corta</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="descripcion_corta" name="descripcion_corta" type="text" required="" placeholder="Ingrese una descripción corta">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="descripcion_larga">Descripción larga</label>
                <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="descripcion_larga" name="descripcion_larga" rows="6" required="" placeholder="Ingrese una descripción larga"></textarea>
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="precio_venta">Precio de venta</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="precio_venta" name="precio_venta" type="number" required="" placeholder="Ingrese el precio de venta">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="precio_compra">Precio de compra</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="precio_compra" name="precio_compra" type="number" required="" placeholder="Ingrese el precio de compra">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="stock">Stock</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="stock" name="stock" type="number" required="" placeholder="Ingrese el stock">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="peso">Peso</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="peso" name="peso" type="number" required="" placeholder="Ingrese el peso">
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection