import React, { useState, useEffect } from "react";
import axios from 'axios'
import "../style/hero.css"


const Hero = () => {
   const [movies, setMovies] = useState([]);

    useEffect(() => {
      fetchData();
    }, [])
  
    const fetchData = async () => {
      const res = await axios.get('http://127.0.0.1:8000/api/movies')
      const data = res.data
      console.log(res.data);
      setMovies(data)
    }
    return (
    <section>
    
        <div className="hero-image" style={{backgroundImage: `linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, 0.5)) ,url(${movies[0]?.image_url2})`}}>
        <div className="hero-box">
        <button className="hero-btn">New</button>
        <h1 className="hero-title">{movies[0]?.name}</h1>
        <span></span>
        <p className="hero-paragraph">
        {movies[0]?.description}
      </p>
      <button className="hero-btn2">Show More</button>
        </div>
        </div>


    </section>
  )
}

export default Hero