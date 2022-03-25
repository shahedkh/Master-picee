import './App.css';
import BestMovies from './component/BestMovies';
import Card from './component/Card';
import Footer from './component/Footer';
import Hero from './component/Hero';
import Movie from './component/Movie';
import Movies from './component/Movies';
import Navbar from './component/Navbar';
import SingleMovie from './component/SingleMovie';
import Contact from './Pages/Contact';
import Register from './Pages/Register';
import Login from './Pages/Login';
import LandingPage from './Pages/LandingPage';

function App() {
  return (
    <div className="App">
  <Navbar/>
  <LandingPage/>
<Footer/>
    </div>
  );
}

export default App;
