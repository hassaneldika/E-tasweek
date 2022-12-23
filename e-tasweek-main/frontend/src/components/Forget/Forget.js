import React, { Component } from "react";
import axios from "axios";
import "./Forget.css";
import { Redirect } from "react-router-dom";

export class Login extends Component {
  state = {
    email: "",
    message: "",
  };

  // Forget form submit
  formSubmit = (e) => {
    e.preventDefault();
    const data = {
      email: this.state.email,
    };

    axios
      .post(" http://127.0.0.1:8000/api/forgetpassword", data)
      .then((response) => {
        this.setState({ message: response.data.message });
        document.getElementById("forgetform").reset();
        localStorage.setItem("token", response.data.token);
      this.setState({
        loggedIn: true,
      });
      })
      .catch((error) => {
        this.setState({ message: error.response.data.message });
      });
  };

  render() {

    if (this.state.loggedIn) {
      return <Redirect to={"/Login"} />;
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
        <h2>Forget Password</h2>
        <form className="login-form" onSubmit={this.formSubmit} id="forgetform">
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
            placeholder="youremail@gmail.com"
            id="email"
            name="email"
          />
          <button className="link-btn" type="submit">
            Forget Password
          </button>
        </form>
      </div>
    );
  }
}

export default Login;
