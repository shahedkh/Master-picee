import "../style/card.css";
import { useNavigate } from "react-router-dom";
const Card = ({movie}) => {
  let navigate = useNavigate();

  const openMovie = (id) =>{
    console.log(id );
    navigate(`/show/${id}`)
  }
  return (
      <div class="card">
        <img src={movie.image_url} alt="Avatar" class="image" />
        <div class="overlay">
          <button class="car-btn" onClick={()=>openMovie(movie.id)}>Show More</button>
        </div>
      </div>

  );
};

export default Card;
