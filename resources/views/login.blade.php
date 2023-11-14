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
                            ACCOUNT LOGIN
                        </h1>

                        <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="post">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-400 dark:text-gray">Masukan Email :</label>
                                <input type="email" name="email" placeholder="Masukan Email" required="" class="bg-white border border-gray-300  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-600 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>

                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-400 dark:text-gray">Masukan Password :</label>
                                <input type="password" name="password" placeholder="Password" required="" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-600 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>

                            <button type="submit" class="w-full text-white btn btn-accent ">LOG IN</button>

                            <p class="text-sm font-light text-gray-500 dark:text-gray-400 flex flex-col items-center justify-center flex items-center">
                                Don’t have an account ? <a href="{{ route('register') }}" class="font-medium text-info hover:underline dark:text-info">Sign up</a>
                            </p>
                            
                            @if (session('error'))
                            <div class="alert alert-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                                <span><b>Opps!</b> {{ session('error') }}</span>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>