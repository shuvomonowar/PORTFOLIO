import AIUB_Logo from '../../assets/education/AIUB_Logo.png'
import CPSCM_Logo from '../../assets/education/CPSCM_Logo.png'
import NGPHS_Logo from '../../assets/education/NGPHS_Logo.png'
import me from '../../assets/images/me.png'
import aws from '../../assets/skills/aws.png'
import cpp from '../../assets/skills/cpp.png'
import docker from '../../assets/skills/docker.png'
import git from '../../assets/skills/git.png'
import github from '../../assets/skills/github.png'
import intellij from '../../assets/skills/intellij.png'
import java from '../../assets/skills/java.png'
import js from '../../assets/skills/js.png'
import laravel from '../../assets/skills/laravel.png'
import mysql from '../../assets/skills/mysql.png'
import oracle from '../../assets/skills/oracle.png'
import php from '../../assets/skills/php.png'
import postgres from '../../assets/skills/postgres.png'
import postman from '../../assets/skills/postman.png'
import python from '../../assets/skills/python.png'
import react from '../../assets/skills/react.png'
import spring from '../../assets/skills/spring.png'
import sql from '../../assets/skills/sql.png'
import tailwind from '../../assets/skills/tailwind.png'
import vscode from '../../assets/skills/vscode.png'
import Footer from '../compulsory/Footer.jsx'
import Contact from './Contact.jsx'
import Projects from './Projects.jsx'

const About = () => {
    return (
        <>
            {
                // This is about me section
            }
            <div className='grid grid-cols-3 px-[8rem] gap-[1rem]'>
                <div className='font-serif mt-[11rem] col-span-2 pr-9'>
                    <div className='inline-block'>
                        <h1 className='text-2xl font-thin'>Hi, I&apos;m<span className='font-bold text-4xl text-[#4b5563]'>&nbsp;Monowar Hossain Shuvo</span><span>.</span></h1>
                        <h1 className='text-base text-justify'>A highly motivated computer science student with a passion for developing innovative and user-friendly applications. Currently, seeking an internship or full-time job in a dynamic and fast-paced environment where I can use my skills to learn and grow as a software engineer.</h1>
                        <h1 className='inline text-base font-bold'>Interested in -</h1>
                        <h1 className='inline text-base'>Software Engineering, Full Stack Software Development, Cloud Computing</h1>
                    </div>
                    <br /><br />
                    <div>
                        <button className='bg-[#4b5563] text-[#fafaf9] px-3.5 py-2.5 border-solid rounded-3xl hover:scale-105 hover:bg-[#9ca3af] hover:text-[#262626] hover:border-none'>Download Resume</button>
                    </div>
                    <br /><br />
                </div>
                <div className='mt-20 pl-[5rem]'>
                    <img src={ me } alt='my image' className='object-cover h-[20rem] w-[18rem] grayscale hover:grayscale-0' />
                </div>
                <div className="col-span-3 pr-9">
                    <hr className="h-0.5 bg-gray-300" />
                </div>
                <br /><br /><br /><br />
            </div>

            {
                // This is education section
            }

            <div className="font-serif text-dark">
                <div className="ml-[61rem] text-4xl">
                    <h1 className="pb-2.5">EDUCATION</h1>
                    <hr className="mr-[20.5rem] bg-gray-300 h-0.4" />
                </div>
                <br /><br />
                <div className="mx-[20rem] flex flex-row space-x-10 shadow-sm pl-7 py-5 rounded-lg transition ease-in-out delay-150 duration-150 hover:scale-105 hover:border-b hover:border-[#94a3b8] bg-[#d4d4d8]">
                    <div>
                        <br />
                        <img src={ AIUB_Logo } alt="university logo" className="h-[4rem] w-[4rem]" />
                    </div>
                    <div>
                        <h1 className="text-2xl font-bold">American International University-Bangladesh</h1>
                        <p className="text-lg font-bold">Bachelor of Science in Computer Science and Engineering</p>
                        <p className="text-lg">January, 2020 - Present</p>
                        <p className="text-lg">Dhaka, Bangladesh</p>
                    </div>
                </div>
                <br /><br />
                <div className="mx-[20rem] flex flex-row space-x-10 shadow-sm pl-7 py-5 rounded-lg transition ease-in-out delay-150 duration-150 hover:scale-105 hover:border-b hover:border-[#94a3b8] bg-[#d4d4d8]">
                    <div>
                        <br />
                        <img src={ CPSCM_Logo } alt="college logo" className="h-[4rem] w-[4rem]" />
                    </div>
                    <div>
                        <h1 className="text-2xl font-bold">Cantonment Public School and College, Mymensingh</h1>
                        <p className="text-lg font-bold">Higher Secondary School</p>
                        <p className="text-lg">July, 2016 - August, 2018</p>
                        <p className="text-lg">Mymensingh, Bangladesh</p>
                    </div>
                </div>
                <br /><br />
                <div className="mx-[20rem] flex flex-row space-x-7 shadow-sm pl-7 py-5 rounded-lg transition ease-in-out delay-150 duration-150 hover:scale-105 hover:border-b hover:border-[#94a3b8] bg-[#d4d4d8]">
                    <div>
                        <br />
                        <img src={ NGPHS_Logo }  alt="school logo" className="h-[5rem] w-[5.5rem]" />
                    </div>
                    <div>
                        <h1 className="text-2xl font-bold">Nakla Govt. Pilot High School</h1>
                        <p className="text-lg font-bold">Secondary School</p>
                        <p className="text-lg">January, 2011 - May, 2016</p>
                        <p className="text-lg">Nakla, Sherpur, Bangladesh</p>
                    </div>
                </div>
                <br /><br /><br />
                <div>
                    <hr className="h-0.5 bg-gray-300 mx-[19.5rem]" />
                </div>
                <br /><br /><br /><br />
            </div>

            {
                // This is skills section
            }

            <div className="font-serif text-dark">
                <div className="mx-[20rem]">
                    <h1 className="text-4xl pb-2.5">SKILLS</h1>
                    <hr className="mr-[47.3rem] h-0.4" />
                    <br />
                    <p className="text-lg py-2.5 text-[#9ca3af]">Programming/Scripting/Query Languages:</p>
                    <div className="grid grid-cols-6 gap-x-0 mr-[24rem] object-cover">
                        <img src={ cpp } alt='C++' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ java } alt='Java' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ js } alt='JavaScript' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ php } alt='PHP' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ python } alt='Python' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ sql } alt='SQL' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                    </div>
                    <br />
                    <p className="text-lg py-2.5 text-[#9ca3af]">Frontend Technologies:</p>
                    <div className="grid grid-cols-2 gap-x-0 mr-[44rem] object-cover">
                        <img src={ tailwind } alt='Tailwind CSS' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ react } alt='React.js' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                    </div>
                    <br />
                    <p className="text-lg py-2.5 text-[#9ca3af]">Backend Technologies:</p>
                    <div className="grid grid-cols-2 gap-x-0 mr-[44rem] object-cover">
                        <img src={ laravel } alt='Laravel' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ spring } alt='Spring MVC' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                    </div>
                    <br />
                    <p className="text-lg py-2.5 text-[#9ca3af]">Databases:</p>
                    <div className="grid grid-cols-3 gap-x-0 mr-[39rem] object-cover">
                        <img src={ mysql } alt='MySQL' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ postgres } alt='PostgreSQL' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ oracle } alt='Oracle DB' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                    </div>
                    <br />
                    <p className="text-lg py-2.5 text-[#9ca3af]">Cloud Computing:</p>
                    <div className="grid grid-cols-1 gap-x-0 mr-[39rem] object-cover">
                        <img src={ aws } alt='AWS' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                    </div>
                    <br />
                    <p className="text-lg py-2.5 text-[#9ca3af]">Dev Tools:</p>
                    <div className="grid grid-cols-6 gap-x-0 mr-[23rem] object-cover">
                        <img src={ git } alt='Git' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ github } alt='GitHub' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ docker } alt='Docker' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ postman } alt='Postman' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ vscode } alt='VS Code' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                        <img src={ intellij } alt='IntelliJ IDEA' className='hover:grayscale transform hover:scale-110 transition ease-in-out delay-75 duration-10' />
                    </div>
                </div>
                <br /><br />
                <div>
                    <hr className="h-0.5 bg-gray-300 mx-[19.5rem]" />
                </div>
                <br /><br /><br /><br />
            </div>

            {
                // This is skills section
            }

            <div>
                <Projects />
            </div>

            {
                // This is contact section
            }

            <div>
                <Contact />
            </div>

            {
                // This is footer section
            }

            <div>
                <Footer />
            </div>
        </>
    )
}

export default About