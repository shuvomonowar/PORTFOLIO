<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="font-serif text-base font-thin">
        <nav class="flex justify-between bg-[#111827] text-white py-4">
            <div class="flex items-center ml-[6rem] mt-3 gap-[0.7vw] text-[#9333ea] text-2xl font-extralight">
                <a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt="logo" class="object-scale-down h-[2rem] w-[2rem]"></a>
                <a href="/">ShuvoMonowar</a>
            </div>
            <div class="mt-4">
                <ul class="flex items-center gap-[1vw] mr-[19.6rem]">
                    <li>
                        <a href="/" class="hover:bg-[#7e22ce] hover:text-white hover:rounded-3xl p-2.5 font-extrabold">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="hover:bg-[#7e22ce] hover:text-white hover:rounded-3xl p-2.5 font-extralight">About me</a>
                    </li>
                    <li>
                        <a href="#education" class="hover:bg-[#7e22ce] hover:text-white hover:rounded-3xl p-2.5 font-extralight">Education</a>
                    </li>
                    <li>
                        <a href="#skills" class="hover:bg-[#7e22ce] hover:text-white hover:rounded-3xl p-2.5 font-extralight">Skills</a>
                    </li>
                    <li>
                        <a href="#projects" class="hover:bg-[#7e22ce] hover:text-white hover:rounded-3xl p-2.5 font-extralight">Projects</a>
                    </li>
                    <li>
                        <a href="#contact" class="hover:bg-[#7e22ce] hover:text-white hover:rounded-3xl p-2.5 font-extralight">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>
