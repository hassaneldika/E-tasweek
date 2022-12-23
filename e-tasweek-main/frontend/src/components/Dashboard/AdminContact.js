import React from "react"
import { Heading } from "../layout/Heading"
import { contact } from "../data/dummydata"
import EditIcon from '@mui/icons-material/Edit';

export const AdminContact = () => {
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
                        <div className='left'>
                           
                            <EditIcon  className="admin_edit"/>
                            {contact.map((item) => (
                                <div className='box' data-aos='zoom-in'>
                                    <i>{item.icon}</i>
                                    <p>{item.text1}</p>
                                    
                                
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}
