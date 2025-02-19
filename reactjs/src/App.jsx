import { BrowserRouter as Router, Routes, Route, Link } from "react-router-dom"
import PrimerComponente from './PrimerComponente.jsx'
import SegundoComponente from './SegundoComponente.jsx'
import TercerComponente from './TercerComponente.jsx'

export default function App() {
  return (
    <Router>
      <div>
        <nav>
          <div>
            <ul>
              <Link to='/' className='nav-link'>Inicio</Link>
              <Link to='/SegundoComponente' className='nav-link'>Segundo Componente</Link>
              <Link to='/PrimerComponente' className='nav-link'>Primer Componente</Link>
              <Link to='/TercerComponente' className='nav-link'>Tercer Componente</Link>
            </ul>
          </div>
        </nav>
      <Routes>
        <Route path="/" element={<hjgjg/>}/>
      </Routes>
      <Routes>
        <Route path="/SegundoComponente" element={<SegundoComponente/>}/>
      </Routes>
      <Routes>
        <Route path="/PrimerComponente" element={<PrimerComponente/>}/>
      </Routes>
      <Routes>
        <Route path="/TercerComponente" element={<PrimerComponente/>}/>
      </Routes>
      </div>
    </Router>
  
  )
}
