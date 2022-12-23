import React from "react";
import Slider from "react-slick";
import { testimonials } from "../data/dummydata";
import FormatQuoteIcon from "@mui/icons-material/FormatQuote";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import EditIcon from "@mui/icons-material/Edit";
import DeleteIcon from "@mui/icons-material/Delete";
import AddBoxIcon from "@mui/icons-material/AddBox";

export const AdminOffers = () => {
  const settings = {
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
  };
  return (
    <>
      <section className="testimonials hero">
        <div className="container">
          <AddBoxIcon className="add_service" sx={{ fontSize: 40 }} />
          <div className="offers_title">Offers</div>
          <Slider {...settings}>
            {testimonials.map((val) => (
              <div className="box">
                <i data-aos="zoom-out-up">
                  <FormatQuoteIcon />
                </i>
                <p data-aos="zoom-out-down">{val.text}</p>
                <div className="img" data-aos="zoom-out-right">
                  <img src={val.image} alt="" />
                </div>
                <h3 data-aos="zoom-out-left">{val.name}</h3>
                <label data-aos="zoom-out">{val.post}</label>
                <div className="admin_offers">
                  <EditIcon />
                  <DeleteIcon />
                </div>
              </div>
            ))}
          </Slider>
        </div>
      </section>
    </>
  );
};
