@extends('layouts.users')

@section('content')

    <div class="flex flex-col justify-center content-center bg-gray-200">
        <div class="blog-card">
            <article>
                <div class="px-1 py-5 sm:px-2 lg:px-0 md:my-16">
                  <div class="mx-5 md:mx-auto space-y-8 max-w-prose">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900 sm:text-5xl">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, debitis?
                    </h1>
              
                    <div class="inline-block pb-8 border-b-2 border-blue-500">
                        <p class="font-light text-gray-600">20 Agustus 2021</p>
                      <p class="font-medium text-gray-600">By Alex Trimoboli</p>
                    </div>
    
                    <img src="{{asset('img/theme/cta_icon.jpg')}}" alt="" class="bg-blog" srcset="">
              
                    <div class="prose prose-lg max-w-none">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non laboriosam quia veritatis ullam, excepturi
                        deserunt ex vero nemo ipsam, est incidunt porro labore! Harum cupiditate suscipit tempora! Aut est quod
                        pariatur alias ab maiores iusto repellendus. Maiores nihil totam delectus. Cumque eaque tempore dolor dolorem
                        natus velit officiis nisi. Doloremque.
                      </p>
              
                      <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, rerum?</h2>
              
                      <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. At dignissimos quidem autem vitae! Distinctio
                        voluptas veritatis voluptatibus laborum suscipit beatae, sint atque tenetur obcaecati, expedita ipsa sit
                        veniam eos qui?
                      </p>
                    </div>
                  </div>
                </div>
              </article>
        </div>
    </div>
    </div>
    
@endsection