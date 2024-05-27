<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>


  <article class="py-8 max-w-screen-md border-b">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}
      <p class="text-base text-gray-500 font-light">{{ $post['subTitle'] }}</p>
    </h2>
    <div>
      By
      <a href="/authors/{{ $post->author->username }}" class="hover:underline font-extrabold">{{ $post->author->name }}</a>
      In
      <a href="/categories/{{ $post->category->nama_category }}" class="hover:underline font-extrabold">{{ $post->category->nama_category }}</a> {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
  </article>





</x-layout>