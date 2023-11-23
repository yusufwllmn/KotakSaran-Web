<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kosan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-[#6C757D] h-full w-full" ><br>
                    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                            <div class="p-6 bg-white space-y-4 md:space-y-6 sm:p-8">
                                <a href="#" class="-mt-24  flex flex-col items-center justify-center flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                                    <img src="{{ asset('images/logologin.png') }}" class="w-32  flex flex-col items-center justify-center">
                                </a>
                                <h1 class="flex flex-col items-center justify-center text-xl font-bold leading-tight tracking-tight text-gray-400 md:text-2xl dark:text-gray">
                                    SIGN UP
                                </h1>
                                <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-400 dark:text-gray">Masukan NIK :</label>
                                        <input type="email" name="email" placeholder="Masukan Email" required="" class="bg-white border border-gray-300  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-600 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                                    </div>
                                    
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-400 dark:text-gray">Masukan Nama :</label>
                                        <input type="password" name="password" placeholder="Password" required="" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-600 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                    </div>
                                    <label class="label bg-gray">

                                    <span class="label-text text-lg text-gray">Tujuan Laporan :</span>
                                    </label>
                                    <select class="select select-bordered border bordered-black border-solid bg-white w-full max-w-xs" required="" id="subjek_laporan" name="subjek_laporan">
                                        <option disabled selected>Pilih Tujuan Laporan</option>
                                        @foreach($subjek as $s)
                                            <option value="{{ $s->id_bagian }}">{{ $s->bagian }}</option>
                                        @endforeach
                                    </select>
                                    
                                    <button type="submit" class="w-full text-white btn btn-accent ">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</body>
</html>