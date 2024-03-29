@props(['post'])

<article class="mb-8 rounded-lg overflow-hidden bg-white shadow-lg">
    <figure>
        @if ($post->image)
            <img class="w-full h-72 object-cover object-center" src="{{asset('storage/' . $post->image->url)}}" alt="">
        @else
            <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg" alt="">
        @endif
    </figure>

    <div class="px-6 py-4">
        <h2 class="text-2xl font-bold">
            <a href="{{route('posts.show',$post)}}">
                {{$post->name}}
            </a>
        </h2>

        <div>
            {!!$post->extract!!}
        </div>
    </div>

    <div class="px-6 mt-4 mb-2">
        @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag',$tag)}}" class="inline-block bg-slate-200 text-slate-700 text-sm rounded-full px-3 py-1 mr-1">
                {{$tag->name}}
            </a>
        @endforeach
    </div>
</article>