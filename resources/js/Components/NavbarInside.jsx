import { Link } from "@inertiajs/react"
import React from "react"

const NavbarInside = () => {
    const widthProfile = '211px'

    return (
        <div className="navbar bg-[#343A40]">
            <div className="drawer">
                <input id="my-drawer" type="checkbox" className="drawer-toggle" />
                <div className="drawer-content">
                    {/* Page content here */}
                    <label htmlFor="my-drawer" className="btn btn-ghost drawer-button hover:bg-[#343A40]">
                        <div>
                            <img src="/images/burger.png" className="hover:opacity-25"/>
                        </div>
                        <div className="flex-1 ">
                            <p className="normal-case text-xl px-3 text-white start-0">E-KOSAN</p>
                        </div>
                    </label>
                </div> 
                <div className="drawer-side">
                    <label htmlFor="my-drawer" aria-label="close sidebar" className="drawer-overlay"></label>
                    <ul className="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                    {/* Sidebar content here */}
                    <li>
                        <Link href="/#" as="button">
                            <div className="w-7 rounded-full ">
                            <img src="/images/home.png" />
                            </div>
                            Home
                        </Link>
                    </li>
                    <li>
                        <Link href="/#" as="button">
                            <div className="w-7 rounded-full ">
                            <img src="/images/laporan.png" />
                            </div>
                            Laporan
                        </Link>
                    </li>
                    <li>
                        <Link href="/#" as="button">
                            <div className="w-7 rounded-full ">
                            <img src="/images/siswa.png" />
                            </div>
                            Siswa
                        </Link>
                    </li>
                    <li>
                        <Link href="/#" as="button">
                            <div className="w-7 rounded-full ">
                            <img src="/images/guru.png" />
                            </div>
                            Guru
                        </Link>
                    </li>
                    <li>
                        <Link href="/#" as="button">
                            <div className="w-7 rounded-full ">
                            <img src="/images/petugas.png" />
                            </div>
                            Petugas
                        </Link>
                    </li>
                    
                    </ul>
                </div>
            </div>
            <div className="flex-none gap-2 ">
                <div className="flex-none">
                    <ul className="menu menu-horizontal px-0 text-white">
                    <li>
                        <details>
                        <summary className="hover:bg-[#343A40] hover:opacity-25">
                            <div className="w-5 rounded-full">
                            <img src="/images/profilelogo.png" />
                            </div>
                            <div>
                                <p className="normal-case text-l text-white">Welcome Username</p>
                            </div>
                        </summary>
                        <ul style={{ width: widthProfile }} className="w-full rounded-none p-1 bg-base-100 ">
                            <li>
                                <Link href="/login" as="button">
                                    <div className="w-5 rounded-full ">
                                    <img src="/images/settings.png" />
                                    </div>
                                    Edit Profile
                                </Link>
                            </li>
                            <li>
                                <Link href="/login" as="button">
                                    <div className="w-5 rounded-full transform scale-x-[-1]">
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
    )
}

export default NavbarInside