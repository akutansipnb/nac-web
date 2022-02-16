@extends('layouts.users')

@section('content')
{{-- Hero Section --}}
<section class="hero-section">
    <div class="banner-logo">
        <h1>National</h1>
        <h1 class="gradient-text">Accounting</h1>
        <h1>Competition</h1>
    </div>
    <div class="px-10 md:px-52 text-center my-10">
        <p class="championship-theme">"{{ $theme }}"</p>
    </div>
    <div class="flex-col text-center">

        <a href="#lomba" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">

            <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                Daftar Sekarang
            </span>
        </a>
        <a onclick="toggleModal('modal-id2')" class="inline-block cursor-pointer px-5 md:my-0 my-3 text-gray-400 hover:text-gray-600 transition-100 delay-50 font-bold">
            Vidio Pembukaan

        </a>
    </div>
</section>

{{-- CTA Intro --}}
<section class="mx-5">
    <aside class="relative overflow-hidden text-gray-300 bg-gray-900 rounded-xl lg:flex shadow shadow-lg">
        <div class="w-full p-12 text-center lg:w-1/2 sm:p-16 lg:p-24 lg:text-left">
            <div class="max-w-xl mx-auto lg:ml-0">
                <p class="text-sm font-medium">
                    National Accounting Competition 2021
                </p>

                <p class="mt-2 text-2xl font-bold text-white sm:text-3xl">
                    {{ $quotes }}
                </p>

                <p class="hidden lg:mt-4 lg:block">
                    {{ $desc_quotes }}
                </p>

            </div>
        </div>

        <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
            <img src="{{asset('img/theme/cta_icon.jpg')}}" alt="Accounting Tools"
                class="absolute inset-0 object-cover w-full h-full" />
        </div>
    </aside>

</section>

{{-- Text Lomba --}}
<div class="grid grid-cols-1 mx-5 mt-20" id="lomba">
    <div class="text-center">
        <h2 class="font-bold text-5xl gradient-text">Daftar Lomba</h2>
    </div>
</div>

{{-- Daftar Lomba --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-6 mx-5 md:mx-20 mt-10 mb-20">

    @foreach ($event as $item)

    <a class="block overflow-hidden bg-white shadow-xl rounded-2xl" href={{route('event.detail',['id' => $item->id])}}>
        <img class="object-cover w-full h-56" src={{asset($item->background_url)}} alt="" />

        <div class="relative pt-20 text-center">
            <div class="
              absolute
              w-24
              h-24
              bg-white
              rounded-lg
              shadow-xl
              transform
              -translate-x-1/2
              -top-10
              left-1/2
            ">
            <img src="{{asset($item->icon_url)}}" alt="" class="p-3">
            </div>

            <div class="px-6 sm:px-12">
                <h5 class="text-xl font-bold text-gray-900">
                    {{$item->event_name}} ({{$item->year}})
                </h5>

                <p class="mt-2 text-sm text-gray-500">
                    {{$item->desc}}
                </p>
            </div>

            <dl class="
              flex flex-col
              items-center
              justify-center
              px-6
              py-4
              mt-6
              border-t border-gray-100
              sm:flex-row sm:items-start sm:px-12
            ">
                <div class="flex items-center">
                    <span class="flex-shrink-0 p-1 text-white bg-green-500 rounded-full">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ffffff">
                                    <path
                                        d="M21.5,21.5c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v71.66667c0,3.956 3.21067,7.16667 7.16667,7.16667h129c3.956,0 7.16667,-3.21067 7.16667,-7.16667v-71.66667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667zM35.20345,35.83333h101.5931c1.08296,3.05239 3.48439,5.45383 6.53678,6.53678v44.25977c-3.05239,1.08296 -5.45382,3.48439 -6.53678,6.53678h-101.5931c-1.08296,-3.05239 -3.4844,-5.45382 -6.53678,-6.53678v-44.25977c3.05239,-1.08296 5.45383,-3.4844 6.53678,-6.53678zM86,43c-11.87412,0 -21.5,9.62588 -21.5,21.5c0,11.87412 9.62588,21.5 21.5,21.5c11.87412,0 21.5,-9.62588 21.5,-21.5c0,-11.87412 -9.62588,-21.5 -21.5,-21.5zM50.16667,57.33333c-3.956,0 -7.16667,3.2035 -7.16667,7.16667c0,3.96317 3.21067,7.16667 7.16667,7.16667c3.956,0 7.16667,-3.2035 7.16667,-7.16667c0,-3.96317 -3.21067,-7.16667 -7.16667,-7.16667zM121.83333,57.33333c-3.956,0 -7.16667,3.2035 -7.16667,7.16667c0,3.96317 3.21067,7.16667 7.16667,7.16667c3.956,0 7.16667,-3.2035 7.16667,-7.16667c0,-3.96317 -3.21067,-7.16667 -7.16667,-7.16667zM28.59668,121.83333l109.20768,28.44271c3.83417,0.99617 7.73821,-1.31005 8.73438,-5.13705l6.07487,-23.30566h-14.80924l-1.69368,6.4528c-3.21784,0.2795 -6.12336,1.99513 -7.93652,4.66113l-42.69206,-11.11393z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </span>

                    <span class="
                  flex
                  ml-3
                  text-sm
                  font-medium
                  text-gray-600
                  space-x-1 space-x-reverse
                ">
                        <dd class="order-first">Rp {{number_format($item->registration_fee,0,',','.')}}</dd>
                    </span>
                </div>

                <div class="flex items-center mt-3 sm:ml-6 sm:mt-0">
                    <span class="flex-shrink-0 p-1 text-white bg-yellow-500 rounded-full">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                            </path>
                        </svg>
                    </span>

                    <span class="
                  flex
                  ml-3
                  text-sm
                  font-medium
                  text-gray-600
                  space-x-1 space-x-reverse
                ">
                        <dt>Peserta</dt>
                        <dd class="order-first">1,520,404</dd>
                    </span>
                </div>
            </dl>
        </div>
    </a>


    {{-- Kill This Script --}}
    {{-- <div class="block overflow-hidden bg-white shadow-xl rounded-2xl" href="">
        <img class="object-cover w-full h-56" src="{{asset($item->background_url)}}" alt="" />

    <div class="relative pt-20 text-center">
        <div class="absolute w-24 h-24 bg-white rounded-xl shadow-xl transform -translate-x-1/2 -top-10 left-1/2">
            <img src="{{asset($item->icon_url)}}" alt="" class="p-3">
        </div>

        <div class="px-6 sm:px-12">
            <h5 class="text-xl font-bold text-gray-900">{{$item->event_name}}</h5>
            <h5 class="text-xl font-extrabold text-gray-400">{{$item->year}}</h5>

            <p class="mt-2 text-sm text-gray-500">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur commodi eligendi officiis
                laboriosam autem
                eveniet.
            </p>

            <dl class=" px-6 py-1 mt-6 border-t border-gray-100 sm:flex-row sm:items-start sm:px-1">
                <p class="text-gray-400 text-base font-semibold mt-5"> Biaya Pendaftaran </p>
                <strong
                    class="inline-block px-16 py-2 text-xl font-semibold text-white uppercase bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full mt-1">
                    Rp {{number_format($item->registration_fee,0,',','.')}}
                </strong>
            </dl>
        </div>

        <dl
            class="flex flex-col items-center justify-center px-6 py-4 mt-6 border-t border-gray-100 sm:flex-row sm:items-start sm:px-12">
            <div class="flex items-center">
                @if ($item['status'] == 'open')
                <a href={{route('event.form',['id' => $item->id])}}
                    class="p-0.5 w-full font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full transition transform inline-block hover:scale-110 hover:shadow-xl">
                    <span
                        class="block text-sm px-8 py-2 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                        Daftar
                    </span>
                </a>
                @else
                <a href="#"
                    class="p-0.5 w-full font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full transition transform inline-bloc hover:scale-110 hover:shadow-xl">
                    <span
                        class="block text-sm px-8 py-2 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                        Pendaftaran Ditutup
                    </span>
                </a>
                @endif


            </div>

            <div class="flex items-center mt-3 sm:ml-3 sm:mt-0">
                <a href={{route('event.detail',['id' => $item->id])}}
                    class="px-8 py-2 text-sm font-medium text-gray-500 rounded-lg transition transform inline-bloc hover:text-gray-800">
                    Detail Lomba
                </a>

            </div>
        </dl>
    </div>
</div> --}}
@endforeach
</div>
<div class="bg-gray-100 flex flex-col items-center">
    <div class="grid grid-cols-1 mx-5 mt-16">
        <div class="text-center">
            <h2 class="font-bold text-5xl gradient-text">Daftar Berita</h2>
            <p class="text-lg my-4">Kumpulan Berita Terbaru</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 mx-5 md:mx-20 mt-10 mb-12">

        @foreach ($blogs as $blog)
        <a href={{ url('detail-berita',['blog'=>$blog->id]) }}>
        <div class="block overflow-hidden bg-white shadow-xl rounded-xl mx-3 h-full">
            <img class="object-cover w-full h-56" src="{{ asset($blog->background_url) }}" alt="" />
            <div class="mx-5 my-7">
                <h5 class="mt-4 text-xl font-bold text-gray-900 leading-relaxed">{{ $blog->title }}</h5>
                <p class="max-w-sm mt-2 text-gray-400 leading-relaxed"><?= substr(strip_tags($blog->desc),0,70) ?>....</p>
            </div>
        </div>
        </a>
        @endforeach

    </div>
    @if ($bcount >= 3)
    <div class="grid grid-cols-1 text-center mb-16">
        <a href=""
            class="p-0.5 w-full font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full transition transform inline-bloc hover:scale-110 hover:shadow-xl">
            <span
                class="text-center block text-sm px-10 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                Selanjutnya
            </span>
        </a>
    </div>
    @endif

    <!--MODAL2-->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center animate__animated animate__fadeIn" id="modal-id2">
        <div class="relative w-auto my-3 mx-5 w-screen">
          <!--content-->
          <div class="border-0 rounded-lg shadow-lg relative flex flex-col bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-2 md:p-8 border-b border-solid border-blueGray-200 rounded-t">
              <h3 class="text-2xl font-pbold leading-tight">
                Vidio Pembukaan NAC
              </h3>
              <button class="pl-7 2xl:pl-12 ml-auto bg-transparent border-0 text-red-500 hover:text-red-800 duration-500 ease-in-out float-right text-2xl 2xl:text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id2')">
                <x-vaadin-close class="w-7 h-7 text-gray-900 hover:text-red-500"/>
              </button>
            </div>
            <!--body-->
            <div class="relative p-2 md:p-9 flex-auto">
              <div class="flex flex-col xl:flex-row items-center">
                <div class="flex m-5 w-full">
                    <iframe width="100%" height="500" src={{ $url_video }} title="Video Coming Soon" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>

            </div>
            <!--footer-->
            <div class="flex items-center justify-end px-6 border-t border-solid border-blueGray-200 rounded-b">
              <button class="text-dark-green background-transparent font-bold uppercase px-7 py-3 text-sm outline-none focus:outline-none ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id2')">
                Tutup
              </button>
              
            </div>
          </div>
        </div>
      </div>
      <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id2-backdrop"></div>
      <!--/MODAL2-->

</div>


<script type="text/javascript">
    function toggleModal(modalID2){
    document.getElementById(modalID2).classList.toggle("hidden");
    document.getElementById(modalID2 + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID2).classList.toggle("flex");
    document.getElementById(modalID2 + "-backdrop").classList.toggle("flex");
    }
  </script>

@endsection

