import React, { Component } from "react";
import axios from "axios";
import { Redirect } from "react-router-dom";
import "./Login.css";
import { Link } from "react-router-dom";

export class Login extends Component {
  state = {
    email: "",
    password: "",
    message: "",
  };

  // Login form submit
  formSubmit = (e) => {
    e.preventDefault();
    const data = {
      email: this.state.email,
      password: this.state.password,
    };

    axios.post(" http://127.0.0.1:8000/api/login", data).then((response) => {
      localStorage.setItem("token", response.data.token);
      this.setState({
        loggedIn: true,
      });
      console.log(response);
    }).catch((error) => {
       this.setState({ message: error.response.data.message });
    });
  };

  render() {
    //after login

    if (this.state.loggedIn) {
      return <Redirect to={"/AdminHome"} />;
    }


     //Show error Message

     let error = "";
     if (this.state.message) {
       error = (
         <div>
           <div class="alert">{this.state.message}</div>
         </div>
       );
     }
 

    return (
      <div className="auth-form-container">
      <h2 className="login_title">Login</h2>
        <form className="login-form" onSubmit={this.formSubmit}>
        { error }
          <label className="label-login" htmlFor="email">
            Email
          </label>
          <input
            className="input-login"
            onChange={(e) => {
              this.setState({ email: e.target.value });
            }}
            required
            type="email"
            placeholder="email@gmail.com"
            id="email"
            name="email"
          />
          <label className="label-login" htmlFor="password">
            Password
          </label>
          <input
            className="input-login"
            onChange={(e) => {
              this.setState({ password: e.target.value });
            }}
            required
            type="password"
            placeholder="********"
            id="password"
            name="password"
          />
          <button className="link-btn" type="submit">
            Log In
          </button>
          <br />
          Forget my password:
          <Link to="/forget"> Click here</Link>
        </form>
      </div>
    );
  }
}

export default Login;

