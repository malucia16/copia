import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import ComponenteNavbar from './ComponenteNavbar.jsx'
import './index.css'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <ComponenteNavbar/>
  </StrictMode>
)
