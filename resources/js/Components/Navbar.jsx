import { Link } from "@inertiajs/react"
import React from "react"

const Navbar = () => {
    return (
        <div className="navbar bg-[#17A2B8]">
            <div className="flex-1">
                <a className="btn btn-ghost normal-case text-xl px-8 text-white">E-KOSAN</a>
            </div>
            <div className="flex-none gap-2">
            <div className="dropdown dropdown-end">
                <label tabIndex={0} className="btn btn-ghost btn-circle avatar">
                    <div className="w-7 rounded-full">
                    <img src="/images/profilelogo.png" />
                    </div>
                </label>
                <ul tabIndex={0} className="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <>
                    <li><Link href="/login" as="button">Login</Link></li>
                    <li><Link href="/register" as="button">Register</Link></li>
                    </>
                </ul>
            </div>
            </div>
        </div>
    )
}

export default Navbar