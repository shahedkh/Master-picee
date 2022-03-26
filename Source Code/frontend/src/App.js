import "./App.css";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import React, { useEffect , useState ,createContext} from "react";
import Footer from "./component/Footer";
import Navbar from "./component/Navbar";
import SingleMovie from "./component/SingleMovie";
import Contact from "./Pages/Contact";
import LandingPage from "./Pages/LandingPage";
import Show from "./Pages/Show";
import Login from "./Pages/Login";
import Register from "./Pages/Register";
export const UserContext = createContext();

function App() {
  const [logged, setLogged] = useState(false);
  useEffect(() => {
    setLogged(JSON.parse(localStorage.getItem("isLogin")));
  }, []);
  return (
    <div className="App">
      <BrowserRouter>
      <UserContext.Provider
          value={{
            logged,
            setLogged,
          }}
        >
        <Navbar logged={logged}/>
        <Routes>
          <Route path="/" element={<LandingPage />} />
          <Route path="/show" element={<Show />}/>
         <Route path="show/:id" element={<SingleMovie />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/login" element={<Login />} />
          <Route path="/register" element={<Register />} />
        </Routes>
        <Footer />
        </UserContext.Provider>
      </BrowserRouter>
    </div>
  );
}

export default App;
