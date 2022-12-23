import "./App.css";
import {useEffect} from "react";

//npm install --save aos@next
//aos
import AOS from "aos";
import "aos/dist/aos.css";
// import {Route, Router} from "react-router-dom";
// import {Switch} from "@mui/material";
import {Pages} from "./components/Pages";

function App() {
    //aos
    useEffect(() => {
        AOS.init();
        AOS.refresh();
    }, []);
    return (
        <>
      <Pages/>
 
        </>
    );
}

export default App;
