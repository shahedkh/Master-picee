import "../style/bestmovies.css";
import Card from "../component/Card";
import React, { useState, useEffect } from "react";
import axios from 'axios'

const BestMovies = () => {
    const [active , setActive] = useState('drama')
    const [movies, setMovies] = useState();
    const [filteredMovies, setFilteredMovies] = useState();

    useEffect(() => {
      fetchData();
      handleDramaClick()
    }, [])
  
    const fetchData = async () => {
      axios.get('http://127.0.0.1:8000/api/movies').then((res)=>{
        setMovies(res.data[0])
        handleFilter(2)
      }  
      )

    }

    const handleFilter=(type)=>{
      setFilteredMovies(movies?.filter(movie=>
        movie.category_id==type
      ))
    }
 
    const action = () =>{
        setActive('action')
      }
      const drama = () =>{
        setActive('drama')
      }
      const romance = () =>{
        setActive('romance')
      }
      const handleDramaClick=()=>{
        drama()
         handleFilter(2)
      }
      const handleActionClick=()=>{
        action()
         handleFilter(1)
      }
      const handleRomanceClick=()=>{
        romance()
         handleFilter(3)
      }

  return (
    <section className="bestMovies">
        <h2 className='best-movie-title'>Best Movies</h2>
        <p className='best-movies-paragraph'>News Movies Just flown in Watch and debate.</p>
        <div className="navBest">
            <ul className="best-ul">
            <li><a className={active=='drama'? 'dynamic':""} onClick={handleDramaClick}>Drama</a></li>
            <li><a className={active=='action'? 'dynamic':""} onClick={handleActionClick}>Action</a></li>
            <li><a className={active=='romance'? 'dynamic':""} onClick={handleRomanceClick}>Romance</a></li>
            </ul>
           
        </div>

        {movies &&<div className="cards">
          {filteredMovies?.map((movie)=><Card movie={movie}/>)}
        </div>}
  

    </section>
  )
}

export default BestMovies