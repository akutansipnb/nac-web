@extends('layouts.users')

@section('content')

    <div class="flex flex-col justify-center content-center bg-gray-200">
        <div class="blog-card">
            <article>
                <div class="px-1 py-5 sm:px-2 lg:px-0 md:my-16">
                  <div class="mx-5 md:mx-auto space-y-8 max-w-prose">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900 sm:text-5xl">
                      {{ ucfirst($blog->title) }}
                    </h1>
              
                    <div class="inline-block pb-8 border-b-2 border-blue-500">
                        <p class="font-light text-gray-600">{{ date_format($blog->created_at,"Y/m/d H:i:s") }}</p>
                      <p class="font-medium text-gray-600">By Admin</p>
                    </div>
    
                    <img src="{{asset($blog->background_url)}}" alt="" class="bg-blog" srcset="">
              
                    <div class="prose prose-lg max-w-none">
                      <p>
                        <?= $blog->desc ?>
                      </p>
                    </div>
                  </div>
                </div>
              </article>
        </div>
    </div>
    </div>
    
@endsection