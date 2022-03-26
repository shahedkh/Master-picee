import "../style/navbar.css"
import React, { useState, useContext  } from "react";
import { Link } from "react-router-dom";
import { UserContext } from "../App";


function Navbar({logged}) {
  const [toggleNav, setToggleNav] = useState(false);
  const { setLogged} = useContext(UserContext);
  let obj = toggleNav
  ? { display: "flex"}
  : {};
  return (
    <div>
    <div className='navbar' style={obj}>
      <div className='navbar-logo'><img className="nav-logo" src="logo.png" alt="logo"/></div>
      <div className='navbar-items'>
        <ul>
        <div className='navbar-items'>
        <li><Link to="/" className="link">HOME</Link></li>
        <li><Link to="/show" className="link">SHOWS</Link></li>
        <li><Link to="contact" className="link">CONTACT US</Link></li>
          </div>
        </ul>
      </div>
      {!logged ? (<div className='navbar-acc'><Link to="/login"><button className='nav-btn'>Login</button></Link> </div>):(<div className='navbar-acc'><button className='nav-btn' onClick={()=>setLogged(false)}>LogOut</button></div>)
      }
     
     
    </div> 
    {!toggleNav && <img className='nav-menu' src="menu.png" alt="menu" onClick={()=> setToggleNav(true)}/>}
      {toggleNav && <img className='nav-cancel' src="cancel.png" alt="cancel" onClick={()=> setToggleNav(false)}/>
    }
    </div>
  )
}

export default Navbar