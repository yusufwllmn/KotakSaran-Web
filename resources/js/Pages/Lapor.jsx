import Footer from "@/Components/Footer";
import { Link } from "@inertiajs/react";
import React from "react";
import NavbarInside from "@/Components/NavbarInside";
import ContentSiswa from "@/Components/ContentLapor";


export default function Lapor() {
    return(
        <>
        <NavbarInside />
        <ContentSiswa/>
        <Footer />
        </>
    )
}