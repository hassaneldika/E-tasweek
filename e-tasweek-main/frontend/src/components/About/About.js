import React from "react"
// import { Heading } from "../common/Heading"
import { about } from "../data/dummydata"
import {Heading} from "../layout/Heading";
import useFetch from "react-fetch-hook";
import PopupExample from "../layout/PopupExample"

//Fetching About us data using useFetch
export const About = () => {
    const {isLoading,error,data}=
        useFetch(`${process.env.REACT_APP_E_TASWEEK_URL}/api/aboutus`);
        if(isLoading) return "Loading...";
        if(error) return "Error!!"

//End of Fetching         
    return (
        <>
            <Heading className="AboutMe" title='About Me' />
            <PopupExample/>
            <section className='about'>
                <div className='container flex'>
                    {about.map((val) => (
                        <>
                            <div className='left' data-aos='fade-down-right'>
                                <img src={val.cover} alt='' style={{ height : 400, width: 300 }} className="about_img"/>
                            </div>
                            <div className='right' data-aos='fade-down-left'>

                                <p>{data[0].au_description}</p>
                                
                            </div>
                        </>
                    ))}
                </div>
            </section>


        </>
    )
}
