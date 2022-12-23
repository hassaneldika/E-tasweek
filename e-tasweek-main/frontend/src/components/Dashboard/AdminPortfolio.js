import React, { useState } from "react"
import { Heading } from "../layout/Heading"
import { portfolio } from "../data/dummydata"
import EditIcon from '@mui/icons-material/Edit';
import DeleteIcon from '@mui/icons-material/Delete';
import AddBoxIcon from '@mui/icons-material/AddBox';

const allCategory = ["all", ...new Set(portfolio.map((item) => item.category))]
export const AdminPortfolio = () => {
    const [list, setLists] = useState(portfolio)
    const [category, setCategory] = useState(allCategory)
    console.log(setCategory)

    const filterItems = (category) => {
        const newItems = portfolio.filter((item) => item.category === category)
        setLists(newItems)
        if (category === "all") {
            setLists(portfolio)

        }
    }

    return (
        <>
         
            <article>
                <div className='container'>  
                 
                    <Heading title='Portfolio' /><AddBoxIcon className="add_service" sx={{ fontSize: 40 }} />
                    <div className='catButton'>
                        {category.map((category) => (
                            <button className='primaryBtn' onClick={() => filterItems(category)} data-aos='zoom-out-down'>
                                {category}
                            </button>
                        ))}
                    </div>
                    <div className='content grid3'>
                        {list.map((item) => (
                            <div className='box' data-aos='fade-up'>
                                <div className='img'>
                                    <img src={item.cover} alt='' />
                                    <p style={{ textAlign: 'center', }}>project name</p>
                                </div>
                                <div className='overlay'>
                                    <h3>{item.title}</h3>
                                    <span>{item.name}</span>
                                    <div className="admin_portfolio">
                                    <EditIcon/>
                                    <DeleteIcon/>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </article>
        </>
    )
}
