import "../style/contact.css";
import Swal from "sweetalert2";

const Contact = () => {
  const handleSubmitContactForm = (e) => {
    e.preventDefault();
    Swal.fire({
      title: "Thank You For Contacting Us",
      text: "We Will Respond As Soon As Possible",
      icon: "success",
      confirmButtonText: "Close",
    });
  };
  return (
    <div>
      <div>
        <img src="m.jfif" alt="Avatar" class="contact-image" />
      </div>
      <div className="ContactUsComp">
        <div className="mainContainer">
          <div className="contactContainer">
            <div className="contactFormContainer">
              <form onSubmit={(e) => handleSubmitContactForm(e)}>
                <div className="inputArea">
                  <input type="text" placeholder="First Name" required />
                  <input type="text" placeholder="Last Name" required />
                  <input type="email" placeholder="Email" required />
                  <input type="tel" placeholder="Phone" required />
                  <input
                    type="text"
                    placeholder="Address"
                    className="fullLine"
                    required
                  />
                  <textarea
                    className="fullLine"
                    name="message"
                    placeholder="Type your message here"
                  ></textarea>
                </div>
                <button>Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Contact;
