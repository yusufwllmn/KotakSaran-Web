<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <a href="/">
                            <div class="w-7 rounded-full ">
                                <img src="/images/home.png" />
                            </div>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/">
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
                                    <p class="normal-case text-l text-white">Welcome Username</p>
                                </div>
                            </summary>
                            <ul class="w-full rounded-none p-1 bg-base-100 z-50 ">
                                <li>
                                    <Link href="/#" as="button">
                                    <div class="w-5 rounded-full ">
                                        <img src="/images/settings.png" />
                                    </div>
                                    Edit Profile
                                    </Link>
                                </li>
                                <li>
                                    <Link href="/" as="button">
                                    <div class="w-5 rounded-full transform scale-x-[-1]">
                                        <img src="/images/logout.png" />
                                    </div>
                                    Logout
                                    </Link>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>