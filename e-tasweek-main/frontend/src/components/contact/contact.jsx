import React from "react"
import { Heading } from "../layout/Heading"
import { contact } from "../data/dummydata";
import useFetch from "react-fetch-hook";

//Fetching about us data using useFetch.
//Display them in contact us page.
export const Contact = () => {
    const { isLoading, error, data } =
        useFetch(`${process.env.REACT_APP_E_TASWEEK_URL}/api/aboutus`);
    if (isLoading) return "Loading...";
    if (error) return "Error!!"

//End of Fetching    
    return (
        <>
            <div className='contact'>
                <div className='container'>
                    <Heading title='Keep In Touch' />
                    <div className='content flexsb'>
                        <div className='right'>
                            <form>
                                <div className='flex'>
                                    <input type='text' placeholder='Name' data-aos='flip-left' />
                                    <input type='email' placeholder='Email' data-aos='flip-right' />
                                </div>
                                <input type='email' placeholder='Subject' data-aos='flip-up' />
                                <textarea name='' id='' cols='30' rows='10' data-aos='flip-down'></textarea>
                                <button data-aos='zoom-in-up'>Submit</button>
                            </form>
                        </div>
                        <div  className="left">
                            <ul className='box contactList' data-aos='zoom-in'>
                                <div>{contact[0].icon}</div>
                                <li>{data[0].au_address}</li>
                                <div>{contact[1].icon}</div>
                                <li>{data[0].au_phone}</li>
                                <div>{contact[3].icon}</div>
                                <li>{data[0].au_email}</li>
                                <div>{contact[2].icon}</div>
                                <li>{data[0].au_openingHours}</li>
                             


                            </ul>
                        </div>
     
                    </div>
                </div>
            </div>
        </>
    )
}
