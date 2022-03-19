import "../style/navbar.css"
import React, { useState } from "react";


function Navbar() {
  const [toggleNav, setToggleNav] = useState(false);
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
        <li><a>HOME</a></li>
        <li><a>SHOWS</a></li>
        <li><a>CONTACT US</a></li>
          </div>
        </ul>
      </div>
      <div className='navbar-acc'><button className='nav-btn'>Login</button> </div>
     
    </div> 
    {!toggleNav && <img className='nav-menu' src="menu.png" alt="menu" onClick={()=> setToggleNav(true)}/>}
      {toggleNav && <img className='nav-cancel' src="cancel.png" alt="cancel" onClick={()=> setToggleNav(false)}/>
    }
    </div>
  )
}

export default Navbar