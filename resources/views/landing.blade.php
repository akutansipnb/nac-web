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
        <p class="championship-theme">"Melalui Kompetisi Wujudkan Sumber Daya Manusia di bidang Akuntansi dan
            Perpajakan yang Berkualitas, Kompetitif dan Berintegritas di Era Digital"</p>
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
                    Semangat Baru untuk edukasi pada akutansi
                </p>

                <p class="hidden lg:mt-4 lg:block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed.
                    Quam a scelerisque
                    amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat quisque ut interdum
                    tincidunt duis.
                </p>

                <a href=""
                    class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 my-5">
                    <span
                        class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                        Unduh Panduan
                    </span>
                </a>

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
    <div class="block overflow-hidden bg-white shadow-xl rounded-2xl" href="">
        <img class="object-cover w-full h-56" src="{{asset($item->background_url)}}" alt="" />

        <div class="relative pt-20 text-center">
            <div
                class="absolute w-24 h-24 bg-white rounded-xl shadow-xl transform -translate-x-1/2 -top-10 left-1/2">
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
                <strong class="inline-block px-16 py-2 text-xl font-semibold text-white uppercase bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full mt-1">
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
    </div>
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
        <div class="block overflow-hidden bg-white shadow-xl rounded-2xl mx-3">
            <img class="object-cover w-full h-56" src="{{ asset($blog->background_url) }}" alt="" />
            <div class="m-10">
                <h5 class="mt-4 text-xl font-bold text-gray-900">{{ $blog->title }}</h5>
                <p class="max-w-sm mt-2 text-gray-700"><?= substr(strip_tags($blog->desc),0,100) ?>....</p>
            </div>


            <div class="flex items-center m-10">
                <a href={{ url('detail-berita',['blog'=>$blog->id]) }}
                    class="p-0.5 w-full font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full transition transform inline-bloc hover:scale-110 hover:shadow-xl">
                    <span
                        class="text-center block text-sm px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                        Baca Selengkapnya
                    </span>
                </a>
            </div>
        </div>
        
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
        <div class="relative w-auto my-6 mx-5 w-screen">
          <!--content-->
          <div class="border-0 rounded-lg shadow-lg relative flex flex-col bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 md:p-8 border-b border-solid border-blueGray-200 rounded-t">
              <h3 class="text-3xl 2xl:text-4xl font-pbold leading-tight">
                Vidio Pembukaan NAC
              </h3>
              <button class="pl-7 2xl:pl-12 ml-auto bg-transparent border-0 text-red-500 hover:text-red-800 duration-500 ease-in-out float-right text-2xl 2xl:text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id2')">
                <x-vaadin-close class="w-7 h-7 text-red-600"/>
              </button>
            </div>
            <!--body-->
            <div class="relative p-2 md:p-9 flex-auto">
              <div class="flex flex-col xl:flex-row items-center">
                <div class="flex m-5 w-full">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/079rAyl63Bw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              
            </div>
            <!--footer-->
            <div class="flex items-center justify-end px-6 border-t border-solid border-blueGray-200 rounded-b">
              <button class="text-dark-green background-transparent font-bold uppercase px-7 py-3 text-sm outline-none focus:outline-none ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id2')">
                Tutup
              </button>
              <a href="#lomba"
                class="p-0.5 w-26 my-5 font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full transition transform inline-bloc hover:scale-110 hover:shadow-xl" onclick="toggleModal('modal-id2')">
                <span
                    class="text-center block text-sm px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                    Daftar Sekarang
                </span>
            </a>
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