import ContentLanding from "@/Components/ContentLanding";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import { Head, Link } from "@inertiajs/react";
import React from "react";
import NavbarInside from "@/Components/NavbarInside";
import ContentSiswa from "@/Components/ContentSiswa";
import SignupPage from "@/Components/SignupPage";


export default function LandingPage(props) {
    return(
        <div>
            <Head title={props.title}/>
        <Navbar />
        <ContentLanding />
        <Footer />
        </div>
    )
}