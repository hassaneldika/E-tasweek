import React from "react"
import { about } from "../data/dummydata"
import { Heading } from "../layout/Heading";
import EditIcon from '@mui/icons-material/Edit';
import UploadIcon from '@mui/icons-material/Upload';
import useFetch from "react-fetch-hook";


export const AdminAbout = ({Edit}) => {
//Fetching About us data using useFetch

    const { isLoading, error, data } =
        useFetch(`${process.env.REACT_APP_E_TASWEEK_URL}/api/aboutus`);
    if (isLoading) return "Loading...";
    if (error) return "Error!!"

//End of Fetching 

    return (
        <>
            <Heading title='About me' />
            <section className='about'>

                <div className='container flex'>

                    {about.map((val) => (
                        <>
                            <div className='left' data-aos='fade-down-right' >

                                <img src={val.cover} alt='' style={{ height: 400, width: 300 }} className="about_img" />
                                <div><UploadIcon className="aboutus_img" /></div>
                            </div>
                            <div className='right' data-aos='fade-down-left'>
                              
                                <EditIcon className="aboutus_edit"/>
                                <p>{data[0].au_description}</p>
                               
                             
                            </div>
                        </>
                    ))}
                </div>
            </section>


        </>
    )
}
