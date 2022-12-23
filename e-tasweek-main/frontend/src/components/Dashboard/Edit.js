import React from "react";
import "./Edit.scss"
export const Edit=(data)=>{
//     return(dispatch)=>{
//          fetch(`${process.env.REACT_APP_E_TASWEEK_URL}/api/aboutus/${data.id}`,{
//             method:'PATCH',
//             headers:{'Comtent-Type':'application/json'},
// body:JSON.stringify({data:data})
//         })
//         .then(resp=>resp.json())
//         .then(updAbout=>
//             dispatch({ type: 'UPDATE_ABOUTUS', payload: updAbout }))
   
            return(
 
        <form class="login-form">
            <h1>Login</h1>
            <div class="form-input-material">
                <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
                <label for="username">Username</label>
            </div>
            <div class="form-input-material">
                <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
                <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-primary btn-ghost">Login</button>
        </form>
    )
}