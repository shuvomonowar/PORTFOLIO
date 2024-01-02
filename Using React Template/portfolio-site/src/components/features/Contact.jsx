const Contact = () => {
    return (
        <>
            <div id="contact" className="font-serif text-black">
                <div className="mx-[20rem] text-4xl">
                    <h1 className="pb-2.5">CONTACT</h1>
                    <hr className="mr-[43.6rem] bg-gray-300 h-0.4" />
                </div>
                <br /><br />
                <div className="mx-[20rem]">
                    <htmlForm method="POST" action="">
                        <label htmlFor="name">Your Name:</label>
                        <input type="text" id="name" name="name" required className="mt-4 mb-6 shadow focus:shadow-[#94a3b8] rounded-xl w-full py-2 px-2 text-black text-lg bg-[#cbd5e1] focus:outline-none appearance-none" /><br />
                        <label htmlFor="email">Your Email:</label><br />
                        <input type="email" id="email" name="email" required className="mt-4 mb-6 shadow focus:shadow-[#94a3b8] rounded-xl w-full py-2 px-2 text-black text-lg bg-[#cbd5e1] focus:outline-none appearance-none" /><br />
                        <label htmlFor="message" className="mt-4">Your Message:</label><br />
                        <textarea type="text" id="message" name="message" rows="5" cols="10" required className=" mt-4 mb-7 shadow focus:shadow-[#94a3b8] rounded-xl w-full h-[15rem] py-2 px-2 text-black text-lg bg-[#cbd5e1] focus:outline-none appearance-none"></textarea><br />
                        <button type="submit" className="bg-[#4b5563] text-white py-2.5 px-3 border-solid rounded-3xl hover:border-none">Send Message</button>
                    </htmlForm>
                </div>
                <br /><br /><br /><br />
            </div>
        </>
    )
}

export default Contact