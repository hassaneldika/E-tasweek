import { Menu } from "@mui/icons-material";
import React, { useState } from "react";
import { Link } from "react-router-dom";
import { navlink } from "../data/dummydata";
//import logo from "../data/images/logo.jpg";

export const Header = () => {
  const [responsive, setResponsive] = useState(false);
  return (
    <>
      <header>
        <div className="container flexsb">
          <div className="logo">
            Logo
            {/*<img style={{ height:20, width: 40,}} src={logo} alt='' data-aos='zoom-in-right' />*/}
          </div>
          <div className={responsive ? "hideMenu" : "nav"}>
            {navlink.map((links, i) => (
              <Link to={links.url} key={i} data-aos="zoom-in-left">
                {links.text}
              </Link>
            ))}
          </div>
          <button className="toggle" onClick={() => setResponsive(!responsive)}>
            <Menu className="icon" />
          </button>
        </div>
      </header>
    </>
  );
};
