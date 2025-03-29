<x-layout :title="$title">

  {{-- <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

    <div class="text-base text-gray-500">
      <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 1 January
      2025
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts.</a>
  </article> --}}


  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article
        class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue">

        <a href="/posts" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Back to all posts.</a>

        <header class="my-4 lg:mb-6 not-format">
          <address class="flex items-center mb-6 not-italic">
            <div class="inline-flex items-center mr-3 text-sm text-gray-900">
              <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                alt="{{ $post->author->name }}">
              <div>
                <a href="/posts?author={{ $post->author->username }}" rel="author"
                  class="text-xl font-bold text-gray-900">{{ $post->author->name }}</a>
                <a href="/posts?category={{ $post->category->slug }}" class="block">
                  <span
                    class="{{ $post->category->color }} text-gray-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                    {{ $post->category->name }}
                  </span>
                </a>
                <p class="text-base text-gray-500">
                  {{ $post->created_at->diffForHumans() }}
                </p>
              </div>
            </div>
          </address>
          <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">
            {{ $post['title'] }}
          </h1>
        </header>

        <p>
          {{ $post['body'] }}
        </p>

      </article>
    </div>
  </main>

</x-layout>
