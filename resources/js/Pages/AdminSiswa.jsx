import Footer from "@/Components/Footer";
import { Link } from "@inertiajs/react";
import React from "react";
import NavbarInside from "@/Components/NavbarInside";
import ContentSiswa from "@/Components/ContentSiswa";


export default function AdminSiswa() {
    return(
        <>
        <NavbarInside />
        <ContentSiswa/>
        <Footer />
        </>
    )
}