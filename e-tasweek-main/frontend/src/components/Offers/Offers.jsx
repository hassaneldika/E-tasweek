import React from "react"
import Slider from 'react-slick'
import "slick-carousel/slick/slick.css"
import "slick-carousel/slick/slick-theme.css"
import useFetch from "react-fetch-hook";


export const Offers = () => {

    //Fetching Services data using useFetch method
    const { isLoading, error, data } =
        useFetch(`${process.env.REACT_APP_E_TASWEEK_URL}/api/offers`)
    if (isLoading) return "Loading service..."
    if (error) return "error in fetching"
    console.log(data)
    //End of Fetching
    const settings = {
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:false,
        autoplaySpeed: 3000,
    }
    return (
        <>
            <section className='testimonials hero'>
                <div className='container'>
                    < div className="offers_title">Offers</div>
                    <Slider {...settings}>
                        {data.map((val) => (
                            <div className='box'>
                           
                              
                                <div className='img' data-aos='zoom-out-right'>
                                    <img src={val.of_image} alt=''/>
                                </div>  
                                <h3 data-aos='zoom-out-down'>{val.of_name}</h3>
                                <p data-aos='zoom-out'>{val.of_features}</p>
                            </div>
                        ))}
                    </Slider>
                </div>
            </section>
        </>
    )
}
