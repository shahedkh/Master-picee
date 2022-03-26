import "../style/register.css";
import React, { useState , useContext } from "react";
import { Link,useNavigate } from "react-router-dom";
import axios from 'axios'
import { UserContext } from "../App";
import Swal from 'sweetalert2'

const Register = () => {
  let navigate = useNavigate();
  const { setLogged} = useContext(UserContext);
  const [loginData, setLoginData] = useState({
    email: "",
    password: "",
  });

  const fetchData = async (e) => {
      e.preventDefault()
      try{
        const res = await axios.post('http://127.0.0.1:8000/api/users',loginData)
        localStorage.setItem("isLogin", true)
        setLogged(true)
        navigate('/')

      }catch{
        localStorage.setItem("isLogin", false)
        Swal.fire({
          icon: "error",
          text: "Wrong email or password!",
        });
      }
      

  }
  const handleChange = (e) => {
    setLoginData({ ...loginData, [e.target.id]: e.target.value });
  };
  return (
    <div className="register">
      <div>
        <h2 className="register-title">Login</h2>
      </div>

      <div className="register-form">
        <form onSubmit={fetchData}>
          <div className="register-input">
            
            <input
              type="email"
              placeholder="Email"
              id="email"
              value={loginData.email}
              required
              onChange={handleChange}
            />
            <input
              type="password"
              placeholder="Password"
              id="password"
              value={loginData.password}
              required
              onChange={handleChange}
            />
            {(loginData.password.length <= 7 && loginData .password) ?
                    <small className="error-message">Password can't be less than 8 characters</small> :
                    null}
           
          </div>
          <button className="register-btn" type="submit">Login</button>
        </form>
        <p className="register-already">
        Don't have an account? <Link to="/register">Sign up</Link>
        </p>
      </div>
      <a href="http://127.0.0.1:8000/login" className="register-already">Login as admin</a>
    </div>
  );
};

export default Register;
