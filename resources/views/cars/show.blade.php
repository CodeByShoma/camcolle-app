@php
    $fullStars = floor($averageRating); // 満点の星の数（整数）
    $hasHalfStar = ($averageRating - $fullStars) >= 0.5; // ハーフスターが必要か？（0.5以上か？以下か？）
    $emptyStars = 5 - $fullStars - ($hasHalfStar ? 1 : 0); // 空の星の数
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$car->name}}詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                <img alt="ecommerce" src="{{ $car->image_path ? asset('storage/'. $car->image_path) : asset('images/no_image.jpg')}}" class="lg:w-1/2 lg:h-auto w-64 h-48 object-cover object-center rounded ">
                                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $car->manufacturer }}</h2>
                                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $car->name }}</h1>
                                    <div class="flex mb-4">
                                        <span class="flex items-center">
                                            {{-- 満点のスター --}}
                                            @for ($i = 1; $i <= $fullStars; $i++)
                                                <svg fill="currentColor"  class="fill-current cursor-pointer h-5 text-yellow-400 transition-colors duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            @endfor

                                            {{-- ハーフスター --}}
                                            @if ($hasHalfStar)
                                                <svg fill="currentColor" class="fill-current cursor-pointer h-5 text-yellow-400 transition-colors duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M288 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L288.1 86.9l-.1 .3 0 289.2zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L288.1 439.8 159.8 508.3C149 514 135.9 513.1 126 506s-14.9-19.3-12.9-31.3L137.8 329 33.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L195 150.3 259.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L438.5 329l24.6 145.7z"/></svg>
                                            @endif

                                            {{-- 空のスター --}}
                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <svg fill="currentColor"  class="fill-current cursor-pointer h-5 text-gray-300 transition-colors duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            @endfor

                                            <span class="text-gray-600 ml-3">({{$reviewCount}})</span>
                                        </span>
                                    </div>

                                    <div class="pb-5 border-b-2 border-gray-100 mb-5">
                                        <p class="leading-relaxed">{{ $car->description }}</p>
                                    </div>
                                    <div class="flex">
                                        <span class="title-font font-medium text-2xl text-gray-900">{{ number_format($car->price) }}円〜</span>
                                        <a href="{{ route('reviews.create', $car) }}" class="underline-offset-4 ml-auto flex items-center text-blue-600 underline">口コミを書く</a>
                                        <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:w-4/5 mx-auto">
                                <h3 class="mt-10 text-2xl border-b-2 border-gray-100 mb-5 pb-10">ユーザーレビュー</h3>
                                @forelse ($car->reviews as $review)
                                    <div class="pb-5 border-b-2 border-gray-100 mb-5">
                                        {{-- 名前 --}}
                                        <h4>{{ $review->user->name }}</h4>

                                        {{-- 星 --}}
                                        <div class="flex items-center mt-3 space-x-3">
                                            <div class="flex">
                                                @for ($i = 1; $i <=5; $i++)
                                                    @if ($i <= $review -> rating)
                                                        <svg fill="currentColor"  class="fill-current cursor-pointer h-4 text-yellow-400 transition-colors duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                                    @else
                                                        <svg fill="currentColor"  class="fill-current cursor-pointer h-4 text-gray-300 transition-colors duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                                    @endif
                                                @endfor
                                            </div>
                                            {{-- レビュータイトル --}}
                                            <h4 class="text-sm text-black font-bold">{{ $review->title }}</h4>
                                        </div>

                                        {{-- レビューの日付 --}}
                                        <span class="text-sm">{{ $review->created_at->format('Y/m/d') }}にレビュー済み</span>

                                        {{-- コメント --}}
                                        <p class="mt-5">{{ $review->comment }}</p>

                                        {{-- 削除ボタン --}}
                                        @if (auth()->check() && auth()->id() === $review->user_id)
                                            <form method="POST" action="{{ route('reviews.destroy', $review) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="underline-offset-4 block mt-3 text-blue-600 underline">口コミを削除</button>
                                            </form>
                                        @endif
                                    </div>
                                @empty
                                    <p class="text-gray-600">このキャンピングカーへのご意見を聞かせてください</p>
                                @endforelse
                                <a href="{{ route('reviews.create', $car) }}" class="underline-offset-4 block mt-7 text-blue-600 underline">口コミを書く</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
