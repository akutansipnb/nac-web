<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Tailwinds --}}

    <link rel="stylesheet" href={{asset('css/app.css')}}>

    {{-- Custom CSS --}}

    <link rel="stylesheet" href={{asset('css/style.css')}}>

    {{-- Other --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body class="bg-gray-900">
    <div class="bg-form flex justify-center items-center my-16 xl:my-20 ">
        <div class="form flex flex-col bg-white rounded-xl w-10/12 xl:w-6/12">
            <div class="judul text-gray-700 text-center font-bold uppercase text-2xl mt-16">
                <h2> Data Peserta </h2>
            </div>

            <div class="bg-input flex justify-center mt-10 mb-16">
                <div class="input flex flex-col w-10/12 xl:w-9/12">
                    <form action="" method="">
                        <label for="text" class="font-medium font-semibold">Text</label>
                        <div class="relative">
                          
                            <input
                              type="text"
                              id="text"
                              placeholder="Masukkan Text"
                              class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                            />
                          </div>

                          <label for="email" class="font-medium font-semibold">Email</label>
                        <div class="relative">
                          
                            <input
                              type="email"
                              id="email"
                              placeholder="Masukkan Email"
                              class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                            />
                          </div>

                          <label for="number" class="font-medium font-semibold">Number</label>
                        <div class="relative">
                          
                            <input
                              type="number"
                              id="number"
                              placeholder="Masukkan Number"
                              class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                            />
                          </div>

                          <label for="textarea" class="font-medium font-semibold">Textarea</label>
                        <div class="relative">
                          
                            <textarea
                              rows="4"
                              id="textarea"
                              placeholder="Masukkan Textarea"
                              class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                            ></textarea>
                          </div>

                          <label for="select" class="font-medium font-semibold">Select</label>
                        <div class="relative">
                          
                            <select
                              id="select"
                              placeholder="Masukkan Textarea"
                              class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                            >
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                          </div>
                          <label for="Radio" class="font-medium font-semibold">Radio</label>
                          <div class="mt-2">
                            <div>
                              <label class="inline-flex items-center">
                                <input
                                  type="radio"
                                  class="form-radio"
                                  name="radio"
                                  value="1"
                                  checked
                                />
                                <span class="ml-2">Laki-laki</span>
                              </label>
                            </div>
                            <div>
                              <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="radio" value="2" />
                                <span class="ml-2">Perempuan</span>
                              </label>
                            </div>
                          </div>
                          <div class="text-center mt-10">
                            <button type="submit" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                                <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                    Daftar Sekarang
                                </span>
                            </button>
                          </div>
                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>