<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600 mt-16">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{asset('storage/' . $post->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg" alt="">
                    @endif
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>

            <aside>
                <h2 class="text-4xl font-bold text-gray-500 mb-4">{{$post->category->name}}</h2>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a href="{{route('posts.show',$similar)}}" class="flex">
                                @if ($similar->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{asset('storage/' . $similar->image->url)}}" alt="">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg" alt="">
                                @endif
                                <span class="text-base text-gray-600 flex-1 ml-2">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

        </div>

    </div>

</x-app-layout>