import "../style/movie.css";
import { useNavigate } from "react-router-dom";

const Movie = ({movie}) => {
  let navigate = useNavigate();

  const openMovie = (id) =>{
    console.log(id );
    navigate(`/show/${id}`)
  }
  return (
    <div className='movie'>
    <div className='movie-left'>
    <img className="movie-image" src={movie.image_url} alt="Avatar" class="image" />
    </div>


    <div className='movie-right'>
    <h3 className='movie-title'>{movie.name}</h3>
    <p className='movie-paragraph'>{movie?.description}</p>
    <button className='movie-btn' onClick={()=>openMovie(movie.id)} >Booking Now</button>
    </div>

    </div>
  )
}

export default Movie