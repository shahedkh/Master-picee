import "../style/checkout.css";
import Swal from "sweetalert2";

const CheckOut = () => {
    const handleSubmitCheckoutForm = (e) => {
        e.preventDefault();
        Swal.fire({
          title: "Thank You ",
          text: "Your reservation has been successfully added",
          icon: "success",
          confirmButtonText: "Close",
        });
      };

  return (
    <div className="checkout">
    <h2 className="chick-title">Chick Out</h2>
      <form className="checkout-form" onSubmit={(e) => handleSubmitCheckoutForm(e)}>
        <div className="checkOut-input">
          <label>First Name </label>
          <input type="text"  required />
        </div>
        <div className="checkOut-input">
          <label>Last Name </label>
          <input type="text"  required />
        </div>
        <div className="checkOut-input">
          <label>Code Number </label>
          <input type="number" required />
        </div>
        <div className="checkOut-input">
          <label>CVC </label>
          <input type="password" required />
        </div>
        <div className="checkOut-input">
          <label>ZIP Code </label>
          <input type="number" required />
        </div>
        <button className="check-btn" type="submit" >Chick Out</button>
      </form>
    </div>
  );
};

export default CheckOut;
