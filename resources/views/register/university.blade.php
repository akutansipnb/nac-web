@extends('layouts.users')

@section('content')


       <div class="relative block p-8 overflow-hidden border border-gray-100 rounded-lg" href="">
        <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
      
        <form class="w-full max-w-lg lg:max-w-full mt-5" method="POST" action="">
        	
   
           <div class="flex flex-wrap -mx-3 mb-6">
               <div class="w-full md:w-100 px-3">
                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                       for="grid-judul">
                       Judul Buku
                   </label>
                   <input
                       class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       id="grid-judul" type="text" placeholder="Das Kapitalis" name="judul_buku">
               </div>
           </div>

           <div class="flex flex-wrap -mx-3 mb-6">
               
               <div class="w-full w-1/2 md:w-100  px-3">
                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                       for="grid-kode-buku">
                       Penulis
                   </label>
                   <input
                       class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       id="grid-kode-buku" type="text" placeholder="Karl Marx" name="penulis">
               </div>
           </div>
           
           <div class="flex flex-wrap -mx-3 mb-2">
               <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-tahun-terbit">
                       Tahun Terbit
                   </label>
                   <input
                       class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       id="grid-tahun-terbit" type="number"  type="text" placeholder="2020" name="tahun_terbit">
               </div>
               <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                   <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-penerbit">
                       Penerbit
                   </label>
                   <div class="relative">
                       <select
                           class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-penerbit" name="penerbit">
                           <option value="gramedia">Gramedia</option>
                           <option value="alex">Penerbit Alex</option>
                           <option value="airlangga">Penerbit Airlangga</option>
                       </select>
                   </div>
               </div>

           </div>
           <div class="flex flex-wrap -mx-3 mb-6">
               
               <div class="w-full w-1/2 md:w-100  px-3">
                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                       for="grid-kode-buku">
                       Harga
                   </label>
                   <input
                       class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       id="grid-kode-buku" type="text" placeholder="Rp.10.000" name="harga">
               </div>
           </div>

           <button type="submit" class="bg-blue-700 w-full rounded-2xl p-2 md:mt-5 text-white"> Tambahkan Data </button>  
           </div>
       </form>
    </div>
      
@endsection