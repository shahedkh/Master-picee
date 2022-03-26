import "../style/register.css";
import React, { useState ,useContext } from "react";
import { Link,useNavigate } from "react-router-dom";
import axios from 'axios'
import { UserContext } from "../App";
import Swal from 'sweetalert2'
const Register = () => {
  let navigate = useNavigate();
  const { setLogged} = useContext(UserContext);
  const [registerData, setRegisterData] = useState({
    name: "",
    email: "",
    password: "",
    confirmPassword: "",
    phone: "",
  });

  const fetchData = async (e) => {
      e.preventDefault()
      try{
         const res = await axios.post('http://127.0.0.1:8000/api/users/register',registerData)
         localStorage.setItem("isLogin", true)
         setLogged(true)
         navigate('/')
        }catch{
          localStorage.setItem("isLogin", false)
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Email already exists!",
        });
        }
  }
  const handleChange = (e) => {
    setRegisterData({ ...registerData, [e.target.id]: e.target.value });
  };
  return (
    <div className="register">
      <div>
        <h2 className="register-title">Create an Account</h2>
      </div>

      <div className="register-form">
        <form onSubmit={fetchData}>
          <div className="register-input">
            <input
              type="text"
              placeholder="User Name"
              id="name"
              value={registerData.name}
              required
              onChange={handleChange}
            />
            { (registerData.name.length <= 3 && registerData.name)
                ? <div className="error-message">Please enter a name with length of 3 characters or more</div>
                : null}
            <input
              type="email"
              placeholder="Email"
              id="email"
              value={registerData.email}
              required
              onChange={handleChange}
            />
            <input
              type="password"
              placeholder="Password"
              id="password"
              value={registerData.password}
              required
              onChange={handleChange}
            />
            {(registerData.password.length <= 7 && registerData.password) ?
                    <small className="error-message">Password can't be less than 8 characters</small> :
                    null}
            <input
              type="password"
              placeholder="Confirm Password "
              id="confirmPassword"
              value={registerData.confirmPassword}
              required
              onChange={handleChange}
            />
           { (registerData.confirmPassword && registerData.password !== registerData.confirmPassword) ?
             <div className="error-message">Please make sure passwords match</div> :
              null}
            <input
              type="tel"
              placeholder="Phone"
              id="phone"
              value={registerData.phone}
              required
              onChange={handleChange}
            />
          </div>
          <button className="register-btn" type="submit">Register</button>
        </form>
        <p className="register-already">
          Already have an account? <Link to="/login">Login</Link>
        </p>
      </div>
    </div>
  );
};

export default Register;
