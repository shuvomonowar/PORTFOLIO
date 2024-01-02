import { Link } from 'react-router-dom'
import '../../assets/css/navStyle.css'
import logo_2 from '../../assets/logo/logo_2.png'

const NavBar = () => {
    return (
        <>
            <nav className='py-3 shadow-sm shadow-gray-300'>
                <ul className='flex flex-row'>
                    <li className='ml-[6rem]'>
                        <Link to='/'>
                            <img src={logo_2} alt='logo' className='h-6 w-22' />
                        </Link>
                    </li>
                    <div className='flex flex-row space-x-8 mr-[6rem] font-serif text-[#334155] ml-auto'>
                        <li>
                            <Link to='/' className='li'>Home</Link>
                        </li>
                        <li>
                            <Link to='/about' className='li'>About</Link>
                        </li>
                        <li>
                            <Link to='/projects' className='li'>Projects</Link>
                        </li>
                        <li>
                            <Link to='/blogs' className='li'>Blogs</Link>
                        </li>
                        <li>
                            <Link to='/contact' className='li'>Contact</Link>
                        </li>
                    </div>
                </ul>
            </nav>
        </>
    )
}

export default NavBar