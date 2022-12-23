import React from "react";

import { Hero } from "./Hero";
import {About} from "../About/About";
import {Services} from "../Services/Services";
import {Offers} from "../Offers/Offers";
import {Portfolio} from "../Portfolio/Portfolio";
import {Contact} from "../contact/contact";
import Footer from "../layout/Footer";
import { Header } from "../layout/Header";



const Home = () => {
    return (
        <div>
            <Header/>
            <Hero/>
            <About/>
            <Services/>
            <Portfolio/>
            <Offers/>
            <Contact/>
            <Footer/>

        </div>
    );
};

export default Home;
