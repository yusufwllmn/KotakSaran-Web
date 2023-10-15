import ContentLanding from "@/Components/ContentLanding";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import { Link } from "@inertiajs/react";
import React from "react";
import NavbarInside from "@/Components/NavbarInside";


export default function LandingPage() {
    return(
        <>
        <NavbarInside />
        <ContentLanding />
        <Footer />
        </>
    )
}