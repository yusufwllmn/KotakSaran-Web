import React from 'react'
import { Link } from "react-router-dom";

const ContentLanding = () => {
    return (
        <>
            <div className="hero min-h-screen" style={{backgroundImage: 'url(images/stm4.jpg)'}}>
                <div className="hero-overlay bg-opacity-60"></div>
                <div className="hero-content-overlay text-center text-neutral-content">
                    <div className="max-w-2xl">
                    <h1 className="mb-5 text-5xl font-bold text-white">Apa itu E-Kosan?</h1>
                    <p className="mb-5 max-w-ml text-white">E-kosan (Elektronik Kotak Saran) adalah aplikasi kotak saran digital yang memfasilitasi pengumpulan, penyimpanan, dan manajemen umpan balik, saran, atau komentar dari berbagai sumber secara elektronik. Aplikasi ini dirancang untuk memberikan saluran yang terstruktur dan efisien bagi pengguna untuk berbagi pandangan, masukan, atau keluhan mereka terkait dengan produk, layanan, atau proses tertentu. Kotak saran digital juga mencakup fitur pelaporan dan analisis data untuk membantu organisasi menganalisis dan merespons umpan balik tersebut secara efektif. Ini dapat digunakan dalam berbagai konteks, seperti perusahaan untuk meningkatkan layanan pelanggan, institusi pendidikan untuk mengumpulkan masukan siswa, atau pemerintahan untuk melibatkan masyarakat dalam pengambilan keputusan.</p>
                    
                    </div>
                </div>
            </div>
        </>
    )
}

export default ContentLanding