import React, { Component } from "react";
import axios from "axios";
import { Redirect } from "react-router-dom";
import "./Reset.css";

export class Login extends Component {
  state = {
    token: "",
    email: "",
    password: "",
    password_confirmation: "",
    message: "",
  };

  // Reset form submit
  formSubmit = (e) => {
    e.preventDefault();
    const data = {
      token: this.state.token,
      email: this.state.email,
      password: this.state.password,
      password_confirmation: this.state.password_confirmation,
    };

    axios.post(" http://127.0.0.1:8000/api/resetpassword", data).then((response) => {
      this.setState({ message: response.data.message });
        document.getElementById("formsubmit").reset();
        localStorage.setItem("token", response.data.token);
        this.setState({
          loggedIn: true,
        });
    }).catch((error) => {
      this.setState({ message: error.response.data.message });
    });
  };



  render() {

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
        <h2>Reset Password</h2>
        <form className="login-form" onSubmit={this.formSubmit} id="formsubmit">
        { error }
        <label className="label-login" htmlFor="email">
            Pin code
          </label>
          <input
            className="input-login"
            onChange={(e) => {
              this.setState({ token: e.target.value });
            }}
            required
            type="token"
            placeholder="yourpincode "
            id="token"
            name="token"
          />
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
            placeholder="youremail@gmail.com"
            id="email"
            name="email"
          />
          <label className="label-login" htmlFor="password">
            New Password
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
          <label className="label-login" htmlFor="password">
            Password Confirmation
          </label>
          <input
            className="input-login"
            onChange={(e) => {
              this.setState({ password_confirmation: e.target.value });
            }}
            required
            type="password"
            placeholder="********"
            id="password_confirmation"
            name="password_confirmation"
          />
          <button className="link-btn" type="submit">
            Reset Password
          </button>
        
        </form>
      </div>
    );
  }
}

export default Login;

