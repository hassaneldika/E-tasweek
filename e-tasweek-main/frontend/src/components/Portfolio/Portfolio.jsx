import React, { useState } from "react"
import { Heading } from "../layout/Heading"
import { portfolio } from "../data/dummydata"
import VisibilityOutlinedIcon from "@mui/icons-material/VisibilityOutlined"
import Search from "../Search/Search"

const allCategory = ["all", ...new Set(portfolio.map((item) => item.category))]
export const Portfolio = () => {
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
                    <Heading title='Portfolio' />
                    <Search/>
                  
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
                                    <p style={{textAlign: 'center', }}>project name</p>
                                </div>
                                <div className='overlay'>
                                    <h3>{item.title}</h3>
                                    <span>{item.name}</span>
                                    <VisibilityOutlinedIcon />
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </article>
        </>
    )
}
