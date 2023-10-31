import { Link } from "@inertiajs/react"
import React from "react"

const Navbar = () => {
    return (
        <div className="navbar bg-[#343A40]">
            <div className="flex-1 ">
                <p className="normal-case text-xl px-3 text-white start-0">E-KOSAN</p>
            </div>
            <div className="flex-none gap-2">
            <div className="dropdown dropdown-end">
                <label tabIndex={0} className="btn btn-ghost btn-circle avatar hover:bg-[#343A40] hover:opacity-25">
                    <div className="w-7 rounded-full">
                    <img src="/images/profilelogo.png" />
                    </div>
                </label>
                <ul tabIndex={0} className="mt-2 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100  w-52">
                    <>
                    <li>
                        <Link href="/laporan" as="button">
                            <div className="w-6 rounded-full ">
                            <img src="/images/logout.png" />
                            </div>
                            <p>&nbsp;Login</p>
                        </Link>
                    </li>
                    <li>
                        <Link href="/register" as="button">
                            <div className="w-7 rounded-full">
                            <img src="/images/register.png" />
                            </div>
                            Register
                        </Link>
                    </li>
                    </>
                </ul>
            </div>
            </div>
        </div>
    )
}

export default Navbar