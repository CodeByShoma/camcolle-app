<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            キャンピングカー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-wrap -m-4">
                                @foreach ($cars as $car)
                                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                        <a class="block relative w-64 h-48 rounded overflow-hidden">
                                            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $car->image_path ? asset('storage/'. $car->image_path) : asset('images/no_image.jpg')}}">
                                        </a>
                                        <div class="mt-4">
                                            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $car->name }}</h2>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
