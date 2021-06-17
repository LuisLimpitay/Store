<x-app-layout>
    
    <div class="max-w-7xl mx-auto px-2 mt-5 sm:px-6 lg:px-8">

        <div class="container mx-auto">
            <h2 class="text-2xl p-4 text-center">Listado de Productos</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach ($products as $product)

                <div
                    class="container mx-auto flex flex-col max-w-md bg-gray-300  px-8 py-6 rounded-xl space-y-5 items-center">

                    <p class="inline-block px-3 h-6 bg-red-500 text-gray-200 rounded-full ">
                        {{$product->category->name}}
                      </p>
                    <p class=" leading-relaxed">id {{ $product->id }}{{ $product->name }}</p>
                    <p class=" leading-relaxed">Stock : {{ $product->stock }}</p>


                    <p class=" leading-relaxed font-bold text-xl ">ARS ${{ $product->price }},00</p>

                    <a href="#" type="submit"
                        class="text-xl inline-block px-4 bg-yellow-500 text-white rounded-full ">
                        BOTON
                    </a>

                </div>
                
            @endforeach
            
        </div>
        <br>
        <div class="bg-gray-200 p-3">
            {{$products->links()}}
        </div>
        <br>
    </div>
</x-app-layout>
