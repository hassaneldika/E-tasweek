import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faFacebook, faInstagram } from "@fortawesome/free-brands-svg-icons";

//import { social } from "../data/dummydata"

const Footer = () => {
  return (
    // <>
    //     <footer>
    //         {social.map((item) => (
    //             <>
    //                 <i data-aos='zoom-in'>{item.icon}</i>
    //             </>
    //         ))}
    //         <p data-aos='zoom-in'>All Right Reserved 2022 Codi Team</p>
    //     </footer>
    // </>

    <div className="footer">
      <a
        href="https://m.facebook.com/TasweekAgency/"
        className="facebook social"
      >
        {" "}
        <FontAwesomeIcon icon={faFacebook} size="2x" />
      </a>
      <a
        href="https://instagram.com/etasweek?igshid=YmMyMTA2M2Y="
        className="instagram social"
      >
        <FontAwesomeIcon icon={faInstagram} size="2x" />
      </a>
      <p data-aos="zoom-in">All Right Reserved 2022 Codi Team</p>
    </div>
  );
};

export default Footer;
