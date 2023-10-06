<x-app-layout>

    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{asset('storage/' . $post->image->url)}} @else https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg @endif)">

                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag',$tag)}}" class="inline-block px-3 py-1 bg-slate-600 text-white mb-2 rounded-full">
                                    {{$tag->name}}
                                </a>
                            @endforeach
                        </div>

                        <h2 class="text-4xl text-white leading-6 font-bold">
                            <a href="{{route('posts.show',$post)}}">
                                {{$post->name}}
                            </a>
                        </h2>
                    </div>

                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>


</x-app-layout>