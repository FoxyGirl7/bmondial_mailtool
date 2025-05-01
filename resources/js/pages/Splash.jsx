import React, { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import "../../css/app.css";
import axios from "axios";
import * as Tone from "tone"; // For synctone

const Splash = () => {
  const navigate = useNavigate();
  const [showLogin, setShowLogin] = useState(false);
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  useEffect(() => {
    const timer = setTimeout(() => {
      setShowLogin(true);
    }, 2000);
    return () => clearTimeout(timer);
  }, []);

  const handlelogin = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.post("http://localhost:8000/api/login",{
        email,
        password,
      });
      console.log("login successful:", response.data);
      // Redirect pr store user info here 
      navigate("/dashboard");
    }catch(error){
      alert("Login failed : " + error.response.data.message);
    }
  };

  return (
    <>
      {!showLogin ? (
        <div className="welcome-screen">
          <div className="logo-w">
              <img src="/images/logo-B.svg" alt="logo" />
            </div>
            <p>Welcome</p>
        </div>
      ) : (
        <div className="split-screen">

          <div className="left-half">
            <div className="logo-img">
              <img src="/images/logo-B.svg" alt="logo" />
            </div>
            <p>Glad to have you back!</p>
          </div>

          <div className="right-half">
            <div className="form-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="myUserIcon">
            <path fillRule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clipRule="evenodd" />
            </svg>

            <form className="formLogin" onSubmit={handlelogin}>
              <h2 className="LoginTitle">Login</h2>
              <input 
              type="email" 
              placeholder="Email" 
              className="inputLogin" 
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              />

              <input 
              type="password" 
              placeholder="Password" 
              className="inputLogin" 
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              />

              <button type="submit" className="subminLogin">
                Login
              </button>
            </form>
            </div>

          </div>
        </div>
      )}
    </>
  );
};

export default Splash;