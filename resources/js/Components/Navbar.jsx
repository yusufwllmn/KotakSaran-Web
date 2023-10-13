const Navbar = () => {
    return (
        <div className="navbar bg-[#17A2B8]">
            <div className="flex-1">
                <a className="btn btn-ghost normal-case text-xl px-5 text-white">E-KOSAN</a>
            </div>
            <div className="flex-none gap-2">
                <div className="dropdown dropdown-end">
                <button className="btn btn-outline text-white">Login</button>
                <ul tabIndex={0} className="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                    <a className="justify-between">
                        Login
                    </a>
                    </li>
                    <li><a>Register</a></li>
                </ul>
                </div>
            </div>
        </div>
    )
}

export default Navbar