import React, { Component } from "react";
import { Link } from "react-router-dom";

export class Dashboard extends Component {
  logout = () => {
    localStorage.clear();
  };

  render() {
    return (
      <div>
        <h1>Dashboard</h1>
        <Link to="/" onClick={this.logout}>
          LOGOUT
        </Link>
      </div>
    );
  }
}

export default Dashboard;
