<x-app-layout>

    <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold text-center uppercase mb-4 mt-16">Categoría: {{$category->name}}</h1>

        @foreach ($posts as $post)
            <x-card-post :post="$post" />
        @endforeach

        <div>
            {{$posts->links()}}
        </div>
    </div>

</x-app-layout>