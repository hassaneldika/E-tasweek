import React from "react";
import { Hero } from "../Home/Hero";
import { AdminAbout } from "./AdminAbout";
import { AdminContact } from "./AdminContact";
import { AdminOffers } from "./AdminOffers";
import { AdminPortfolio } from "./AdminPortfolio";
import { AdminService } from "./AdminService";
const AdminHome = () => {
    return (
        <div>
        
            <Hero />
            <AdminAbout/>
            <AdminService/>
            <AdminPortfolio/>
            <AdminOffers/>
            <AdminContact/>
        </div>
    );
};

export default AdminHome;
