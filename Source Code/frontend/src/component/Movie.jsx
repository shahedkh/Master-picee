import "../style/movie.css";
const Movie = () => {
  return (
    <div className='movie'>
    <div className='movie-left'>
    <img className="movie-image" src="lala.webp" alt="Avatar" class="image" />
    </div>


    <div className='movie-right'>
    <h3 className='movie-title'>La La land</h3>
    <p className='movie-paragraph'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</p>
    <button className='movie-btn'>Booking Now</button>
    </div>

    </div>
  )
}

export default Movie