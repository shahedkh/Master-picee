import Movie from '../component/Movie'
import Movies from '../component/Movies'
import React, { useState, useEffect } from "react";
import axios from 'axios'

const Show = () => {
const [movies, setMovies] = useState();

useEffect(() => {
    fetchData();
  }, [])

  const fetchData = async () => {
    axios.get('http://127.0.0.1:8000/api/movies').then((res)=>{
      setMovies(res.data[0])
    }  
    )

  }
  return (
    <div>
    <Movies/>
    
    {movies &&<div >
    {movies?.map((movie)=><Movie movie={movie}/>)}
  </div>}
    </div>
  )
}

export default Show