import ContentLanding from "@/Components/ContentLanding";
import Footer from "@/Components/Footer";
import { Link } from "@inertiajs/react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import React from "react";
import NavbarInside from "@/Components/NavbarInside";


export default function AdminLapor() {
    return(
        <>
        <NavbarInside />
        <ContentLapor/>
        <Footer />
        </>
    )
}