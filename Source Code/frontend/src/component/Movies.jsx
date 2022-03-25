import React from 'react'
import "../style/movies.css";
import Movie from './Movie';

const Movies = () => {
  return (
    <div className='movies'>
    <div>
        <h2 className='movies-title'>RECENTLY ADDED</h2>'
        <span></span>
    </div>

    <Movie/>
    <Movie/>
    </div>
  )
}

export default Movies