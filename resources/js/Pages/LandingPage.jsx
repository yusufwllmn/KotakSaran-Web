import ContentLanding from "@/Components/ContentLanding";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import { Link } from "@inertiajs/react";
import React from "react";
import NavbarInside from "@/Components/NavbarInside";
import ContentSiswa from "@/Components/ContentSiswa";
import SignupPage from "@/Components/SignupPage";


export default function LandingPage() {
    return(
        <>
        <NavbarInside />
        <ContentSiswa />
        <Footer />
        </>
    )
}