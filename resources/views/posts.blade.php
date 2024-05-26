<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)

  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}
    </a>
    <p class="text-base text-gray-500 font-light">{{ $post['subTitle'] }}</p>
    </h2>
    <div class="text-base text-indigo-800">
      By
      <a href="/authors/{{ $post->author->id }}" class="hover:underline font-semibold">{{ $post->author->name }}</a>
      In
      <a href="/categories/{{ $post->category->id }}" class="hover:underline font-extrabold">{{ $post->category->nama_category }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'], 150)  }}</p>
    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach




</x-layout>