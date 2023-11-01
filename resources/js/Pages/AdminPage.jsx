import ContentLanding from "@/Components/ContentLanding";
import Footer from "@/Components/Footer";
import { Link } from "@inertiajs/react";
import React from "react";
import NavbarInside from "@/Components/NavbarInside";
import ContentLapor from "@/Components/ContentLapor";


export default function AdminPage() {
    return(
        <>
        <NavbarInside />
        <ContentLapor/>
        <Footer />
        </>
    )
}