import { BrowserRouter, Route, Routes } from 'react-router-dom'
import About from '../features/About.jsx'
import Blogs from '../features/Blogs.jsx'
import Contact from '../features/Contact.jsx'
import Home from '../features/Home.jsx'
import Projects from '../features/Projects.jsx'
import NavBar from './NavBar.jsx'

const Router = () => {
    return (
        <>
            <BrowserRouter>
                <NavBar />
                <Routes>
                    <Route path='/' element={ <Home /> }></Route>
                    <Route path='about' element={ <About /> }></Route>
                    <Route path='projects' element={ <Projects /> }></Route>
                    <Route path='blogs' element={ <Blogs /> }></Route>
                    <Route path='contact' element={ <Contact /> }></Route>
                </Routes>
            </BrowserRouter>
        </>
    )
}

export default Router