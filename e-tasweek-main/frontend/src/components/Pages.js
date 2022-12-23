import React from "react";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";

// import Footer from "../common/Footer";
import { Header } from "./layout/Header";
import Home from "../components/Home/Home";
import { About } from "./About/About";
import { Portfolio } from "./Portfolio/Portfolio";
import { Services } from "./Services/Services";
import { Offers } from "./Offers/Offers";
import { Contact } from "./contact/contact";
import { AdminAbout } from "./Dashboard/AdminAbout";
import { AdminHeader } from "./Dashboard/AdminHeader";
import AdminHome from "./Dashboard/AdminHome";
import { AdminService } from "./Dashboard/AdminService";
import { AdminPortfolio } from "./Dashboard/AdminPortfolio";
import { AdminOffers } from "./Dashboard/AdminOffers";
import { AdminContact } from "./Dashboard/AdminContact";
import Login from "../components/Login/Login";
import Dashboard from "./Dashboard/Dashboard";
import Forget from "../components/Forget/Forget";
import Reset from "../components/Reset/Reset";

export const Pages = () => {
  return (
    <>
      <Router>
        <Switch>
          <Route exact path="/" component={Home} />
          <Route exact path="/About">
            <Header />
            <About />
          </Route>
          <Route exact path="/Services">
            <Header />
            <Services />
          </Route>
          <Route exact path="/Portfolio">
            <Header />
            <Portfolio />
          </Route>
          <Route exact path="/Offers">
            <Header />
            <Offers />
          </Route>
          <Route exact path="/Contact">
            <Header />
            <Contact />
          </Route>

          <Route exact path="/Adminhome">
            <AdminHeader />
            <AdminHome />
          </Route>
          <Route exact path="/Adminabout">
            <AdminHeader />
            <AdminAbout />
          </Route>
          <Route exact path="/Adminservices">
            <AdminHeader />
            <AdminService />
          </Route>
          <Route exact path="/Adminportfolio">
            <AdminHeader />
            <AdminPortfolio />
          </Route>
          <Route exact path="/Adminoffers">
            <AdminHeader />
            <AdminOffers />
          </Route>
          <Route exact path="/Admincontact">
            <AdminHeader />
            <AdminContact />
          </Route>
          <Route exact path="/login" component={Login} />
          <Route exact path="/AdminHome" component={Dashboard} />
          <Route exact path="/forget" component={Forget} />
          <Route exact path="/reset/:id" component={Reset} />
        </Switch>
      </Router>
    </>
  );
};
