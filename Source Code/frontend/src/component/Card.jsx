import "../style/card.css";
import React from "react";

const Card = ({movie}) => {
  return (
      <div class="card">
        <img src={movie.image_url} alt="Avatar" class="image" />
        <div class="overlay">
          <button class="car-btn">Show More</button>
        </div>
      </div>

  );
};

export default Card;
