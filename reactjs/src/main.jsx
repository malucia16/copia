import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.jsx'
import PrimerComponente from './PrimerComponente.jsx'
import SegundoComponente from '.SegundoComponente.jsx'
import SegundoComponente from '.TercerComponente.jsx'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <App />
    <PrimerComponente/>
    <SegundoComponente/>
    <TercerComponente/>
  </StrictMode>,
)
