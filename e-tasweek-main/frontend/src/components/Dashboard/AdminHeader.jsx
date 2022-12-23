import { Menu } from "@mui/icons-material";
import React, { useState } from "react";
import { Link } from "react-router-dom";
import { admin_navlink} from "../data/dummydata"
//import logo from "../data/images/logo.jpg";

export const AdminHeader = () => {
    const [responsive, setResponsive] = useState(false);
    return (
        <>
            <header>
                <div className="container flexsb">
                    <div className="logo">
                        Logo
                      
                    </div>
                    <div className={responsive ? "hideMenu" : "nav"}>
                        {admin_navlink.map((links, i) => (
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
