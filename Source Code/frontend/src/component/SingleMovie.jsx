import "../style/SingleMovie.css";

const SingleMovie = () => {
  return (
    <div>
      <img src="long2.jpg" className="single-long" />
      <div className="singleMovie">
        <div className="single-left">
          <img src="lala.webp" alt="Avatar" class="single-image" />
         </div>
         <div className="single-right">
          <h2 className="single-title">La la land</h2>
          <div className="single-p">
            <p>Sunday</p>
            <p>20:00</p>
            <p>Romance</p>
          </div>
          <div className="single-paragraph">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500 Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500 Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500
          </div>
          <div className="single-button">
            <button className="single-btn">Trailer</button>
            <button className="single-btn">Booking Now</button>
          </div>
         </div>
      </div>
    </div>
  );
};

export default SingleMovie;
