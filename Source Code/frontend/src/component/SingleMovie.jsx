import "../style/SingleMovie.css";
import React, { useState, useEffect,useContext  } from "react";
import { useParams ,useNavigate} from 'react-router-dom';
import axios from 'axios'
import { UserContext } from "../App";

const SingleMovie = () => {
  const [movie, setMovie] = useState();
  const { logged} = useContext(UserContext);
  let { id } = useParams();
  let navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, [])

  const fetchData = async () => {
    axios.get(`http://127.0.0.1:8000/api/movies/${id}`).then((res)=>{
      console.log(res);
      setMovie(res.data[0])
    }  
    )
  }
  const handleBooking = ()=>{
    if(logged){
      navigate("/checkout")
    }else{
      navigate("/login")
    }
  }
  return (
    <div>
      <img src={movie?.image_url2} className="single-long" />
      <div className="singleMovie">
        <div className="single-left">
          <img src={movie?.image_url} alt="Avatar" class="single-image" />
         </div>
         <div className="single-right">
          <h2 className="single-title">{movie?.name}</h2>
          <div className="single-p">
            <p>{movie?.day}</p>
            <p>{movie?.time}</p>
          </div>
          <div className="single-paragraph">
           {movie?.description}
          </div>
          <div className="single-button">
           <a href={movie?.trailer_url} target="_blank"> <button className="single-btn">Trailer</button></a> 
            <button className="single-btn" onClick={()=>handleBooking()}>Booking Now</button>
          </div>
         </div>
      </div>
    </div>
  );
};

export default SingleMovie;
