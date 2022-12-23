import React from "react";

import { services } from "../data/dummydata";
import { Heading } from "../layout/Heading";
//import AddBoxIcon from "@mui/icons-material/AddBox";
import EditIcon from "@mui/icons-material/Edit";
import VisibilityOffIcon from "@mui/icons-material/VisibilityOff";

export const AdminService = () => {
  return (
    <>
      {/*<AddBoxIcon
        className="add_service"
        sx={{ fontSize: 40, marginRight: 15 }}
      />*/}
      <Heading title="Our Services" />
      <section className="services">
        <div className="container">
          <div className="content grid3">
            {services.map((item) => (
              <div className="box" data-aos="flip-left">
                <i>{item.icon}</i>
                <h3>{item.title}</h3>
                <p>{item.desc}</p>
                <p className="service_cards_admin">
                  <EditIcon />
                  <VisibilityOffIcon />
                </p>
              </div>
            ))}
          </div>
        </div>
      </section>
    </>
  );
};
