import React from "react"
import { Heading } from "../layout/Heading";
import useFetch from "react-fetch-hook";

//Fetching Services data using useFetch method
export const Services = () => {
    const { isLoading, error, data } =
        useFetch(`${process.env.REACT_APP_E_TASWEEK_URL}/api/service`)
    if (isLoading) return "Loading service..."
    if (error) return "error in fetching"
//End of Fetching     

//Filtering Active services.
    const activeService = data.filter((item) => item.isActive === 0)
//End of Filtering 
    return (
        <>
            <Heading title='Our Services' />
            <section className='services'>
                <div className='container'>

                    <div className='content grid3'>
                        {activeService.map((item) => (

                            <div className='box' data-aos='flip-left'>
                                <i>

                                </i>
                                <h3>{item.se_name}</h3>
                                <p>{item.se_description}</p>
                            </div>
                        ))}
                    </div>
                </div>
            </section>
        </>
    )
}
