import project from '../../assets/project/project.png'

const Projects = () => {
    return (
        <>
            {
                // This is skills section
            }

            <div id="projects" className="font-serif text-dark">
                <div className="ml-[61rem] text-4xl">
                    <h1 className="pb-2.5">PROJECTS</h1>
                    <hr className="mr-[22.5rem] bg-gray-300 h-0.4" />
                </div>
                <br /><br />
                <div className="grid grid-rows-2 grid-cols-3 grid-flow-row-dense mx-[20rem] gap-10">
                    <a href="https://github.com/shuvomonowar/PORTFOLIO" target="blank" className="bg-[#d4d4d8] box-content p-10 rounded-2xl hover:border-[#94a3b8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
                        <div className="flex flex-nowrap gap-2 text-center">
                            <img src={ project } alt="logo" className="h-7 w-7" />
                            <span>PORTFOLIO</span>
                        </div>
                        <br />
                        <hr className="bg-gray-300" />
                        <br />
                        <div>
                            <span><span className="font-bold">Stack: </span><span className="font-thin">JavaScript, React.js, Tailwind CSS</span></span>
                        </div>
                    </a>
                    <a href="https://github.com/shuvomonowar/Library-Accountant" target="blank" className="bg-[#d4d4d8] box-content p-10 rounded-2xl hover:border-[#94a3b8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
                        <div className="flex flex-nowrap gap-2 text-center">
                            <img src={ project } alt="logo" className="h-7 w-7" />
                            <span>LIBRARY-ACCOUNTANT</span>
                        </div>
                        <br />
                        <hr className="bg-gray-300" />
                        <br />
                        <div>
                            <span><span className="font-bold">Stack: </span><span className="font-thin">PHP, JavaScript, MySQL</span></span>
                        </div>
                    </a>
                    <a href="https://github.com/shuvomonowar/AIUB-Library" target="blank" className="bg-[#d4d4d8] box-content p-10 rounded-2xl hover:border-[#94a3b8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
                        <div className="flex flex-nowrap gap-2 text-center">
                            <img src={ project } alt="logo" className="h-7 w-7" />
                            <span>AIUB-LIBRARY</span>
                        </div>
                        <br />
                        <hr className="bg-gray-300" />
                        <br />
                        <div>
                            <span><span className="font-bold">Stack: </span><span className="font-thin">Java, Spring MVC, MySQL</span></span>
                        </div>
                    </a>
                    <a href="https://github.com/shuvomonowar/Uni-Cafe" target="blank" className="bg-[#d4d4d8] box-content p-10 rounded-2xl hover:border-[#94a3b8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
                        <div className="flex flex-nowrap gap-2 text-center">
                            <img src={ project } alt="logo" className="h-7 w-7" />
                            <span>UNI-CAFE</span>
                        </div>
                        <br />
                        <hr className="bg-gray-300" />
                        <br />
                        <div>
                            <span><span className="font-bold">Stack: </span><span className="font-thin">C#, Microsoft SQL Server</span></span>
                        </div>
                    </a>
                    <a href="https://github.com/shuvomonowar/Laravel-Career-Path/tree/assignment_6/Assignment/6/barta-app" target="blank" className="bg-[#d4d4d8] box-content p-10 rounded-2xl hover:border-[#94a3b8] col-span-2 shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
                        <div className="flex flex-nowrap gap-2 text-center">
                            <img src={ project } alt="logo" className="h-7 w-7" />
                            <span>BARTA-APP</span>
                        </div>
                        <br />
                        <hr className="bg-gray-300" />
                        <br />
                        <div>
                            <span><span className="font-bold">Stack: </span><span className="font-thin">PHP, JavaScript, Laravel, Alpine.js, Tailwind CSS, MySQL</span></span>
                        </div>
                    </a>
                </div>
                <br /><br /><br />
                <div>
                    <hr className="h-0.5 bg-gray-300 mx-[20rem]" />
                </div>
                <br /><br /><br /><br />
            </div>
        </>
    )
}

export default Projects