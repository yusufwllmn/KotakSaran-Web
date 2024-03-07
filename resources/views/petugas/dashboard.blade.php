<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kosan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    <div class="navbar bg-[#343A40] z-50 ">
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
                        <a href="{{ route('petugasPage') }}">
                            <div class="w-7 rounded-full ">
                                <img src="/images/home.png" />
                            </div>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('laporan.index') }}">
                            <div class="w-7 rounded-full ">
                                <img src="/images/laporan.png" />
                            </div>
                            Laporan
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
                                    <p class="normal-case text-l text-white">Welcome {{ Auth::user()->petugas->nama }}</p>
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
                                        <a onclick="my_modal_5.showModal()">
                                            <div class="w-5 rounded-full ">
                                                <img src="/images/logout.png" />
                                            </div>
                                            Logout
                                        </a>
                                    </li>

                                    <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle ">
                                    <div class="modal-box w-2/6">
                                        <h3 class="font-bold text-lg text-center">Yakin Ingin Logout?</h3>
                                        <div class="modal-action flex justify-center">
                                        <a href="{{ route('logout') }}" role="button" class="btn btn-outline btn-info" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Ya
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <form method="dialog">
                                            <!-- if there is a button in form, it will close the modal -->
                                            <button class="btn btn-outline btn-error">Tidak</button>
                                        </form>
                                        </div>
                                    </div>
                                    </dialog>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>

            @yield('petugasKonten')

    </div>

    <script src="./node_modules/preline/dist/preline.js"></script>
</body> 
</html>