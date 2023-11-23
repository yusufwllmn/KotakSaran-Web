<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kosan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="navbar bg-[#343A40] z-50">
        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <label for="my-drawer" class="btn btn-ghost drawer-button hover:bg-[#343A40]">
                    <div>
                        <img src="{{ asset('images/burger.png') }}" class="hover:opacity-25" />
                    </div>
                    <div class="flex-1 ">
                        <p class="normal-case text-xl px-3 text-white start-0">E-KOSAN</p>
                    </div>
                </label>
            </div>
            <div class="drawer-side z-50">
                <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                    <li>
                        <a href="{{ route('adminPage') }}">
                            <div class="w-7 rounded-full ">
                                <img src="/images/home.png" />
                            </div>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminlaporan.index') }}">
                            <div class="w-7 rounded-full ">
                                <img src="/images/laporan.png" />
                            </div>
                            Laporan
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="w-7 rounded-full ">
                                <img src="/images/siswa.png" />
                            </div>
                            Siswa
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="w-7 rounded-full ">
                                <img src="/images/guru.png" />
                            </div>
                            Guru
                        </a>
                    </li>
                    <li>
                        <a>
                            <div class="w-7 rounded-full ">
                                <img src="/images/petugas.png" />
                            </div>
                            Petugas
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex-none gap-2 ">
            <div class="flex-none">
                <ul class="menu menu-horizontal px-0 text-white">
                    <li>
                        <details>
                            <summary class="hover:bg-[#343A40] hover:opacity-25">
                                <div class="w-5 rounded-full">
                                    <img src="/images/profilelogo.png" />
                                </div>
                                <div>
                                    <p class="normal-case text-l text-white">Welcome {{ Auth::user()->pelapor->nama }}</p>
                                </div>
                            </summary>
                            <ul class="w-full rounded-none p-1 bg-base-100 z-50 ">
                                <li>
                                    <a>
                                        <div class="w-5 rounded-full ">
                                            <img src="/images/settings.png" />
                                        </div>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="w-5 rounded-full ">
                                            <img src="/images/logout.png" />
                                        </div>
                                        <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                            <button type="submit" class="bg-[#1D232A] w-full text-left hover:bg-[#1D232A]" onclick="return confirm('Apakah anda ingin Logout?')">Log out</button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>

            @yield('adminKonten')

    </div>

    <footer class="footer footer-center p-10 bg-[#343A40] text-base-content rounded">
        <nav class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a> 
            <a class="link link-hover">Contact</a> 
            <a class="link link-hover">Jobs</a> 
            <a class="link link-hover">Press kit</a>
        </nav> 
        <nav>
            <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
            </div>
        </nav> 
        <aside>
            <p>Copyright © 2023 - All right reserved by Daffa & Yusuf RPL48.STMNPBDG</p>
        </aside>
    </footer>
</body> 
</html>