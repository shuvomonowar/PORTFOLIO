<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
<div id="projects" class="font-serif text-white">
    <div class="mx-[20rem] text-4xl">
        <h1 class="pb-2.5">{{ 'PROJECTS' }}</h1>
        <hr class="mr-[43.6rem]">
    </div>
    <br><br>
    <div class="grid grid-rows-2 grid-cols-3 grid-flow-row-dense mx-[20rem] gap-10">
        <a href="https://github.com/shuvomonowar/PORTFOLIO" target="_blank" class="bg-[#374151] box-content p-10 rounded-2xl hover:bg-[#6b21a8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
            <div class="flex flex-nowrap gap-2 text-center">
                <img src="{{ asset('images/project/project.png') }}" alt="" class="h-7 w-7">
                <span>PORTFOLIO</span>
            </div>
            <br>
            <hr>
            <br>
            <div>
                <span><span class="font-bold">Stack: </span><span class="font-thin">PHP, JavaScript, Laravel, Alpine.js, Tailwind CSS</span></span>
            </div>
        </a>
        <a href="https://github.com/shuvomonowar/Library-Accountant" target="_blank" class="bg-[#374151] box-content p-10 rounded-2xl hover:bg-[#6b21a8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
            <div class="flex flex-nowrap gap-2 text-center">
                <img src="{{ asset('images/project/project.png') }}" alt="" class="h-7 w-7">
                <span>LIBRARY-ACCOUNTANT</span>
            </div>
            <br>
            <hr>
            <br>
            <div>
                <span><span class="font-bold">Stack: </span><span class="font-thin">PHP, JavaScript, MySQL</span></span>
            </div>
        </a>
        <a href="https://github.com/shuvomonowar/AIUB-Library" target="_blank" class="bg-[#374151] box-content p-10 rounded-2xl hover:bg-[#6b21a8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
            <div class="flex flex-nowrap gap-2 text-center">
                <img src="{{ asset('images/project/project.png') }}" alt="" class="h-7 w-7">
                <span>AIUB-LIBRARY</span>
            </div>
            <br>
            <hr>
            <br>
            <div>
                <span><span class="font-bold">Stack: </span><span class="font-thin">Java, Spring MVC, MySQL</span></span>
            </div>
        </a>
        <a href="https://github.com/shuvomonowar/Uni-Cafe" target="_blank" class="bg-[#374151] box-content p-10 rounded-2xl hover:bg-[#6b21a8] shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
            <div class="flex flex-nowrap gap-2 text-center">
                <img src="{{ asset('images/project/project.png') }}" alt="" class="h-7 w-7">
                <span>UNI-CAFE</span>
            </div>
            <br>
            <hr>
            <br>
            <div>
                <span><span class="font-bold">Stack: </span><span class="font-thin">C#, Microsoft SQL Server</span></span>
            </div>
        </a>
        <a href="https://github.com/shuvomonowar/Laravel-Career-Path/tree/assignment_6/Assignment/6/barta-app" target="_blank" class="bg-[#374151] box-content p-10 rounded-2xl hover:bg-[#6b21a8] col-span-2 shadow-md hover:shadow-zinc-200 transition delay-100 duration-100 ease-in-out hover:scale-105">
            <div class="flex flex-nowrap gap-2 text-center">
                <img src="{{ asset('images/project/project.png') }}" alt="" class="h-7 w-7">
                <span>BARTA-APP</span>
            </div>
            <br>
            <hr>
            <br>
            <div>
                <span><span class="font-bold">Stack: </span><span class="font-thin">PHP, JavaScript, Laravel, Alpine.js, Tailwind CSS, MySQL</span></span>
            </div>
        </a>
    </div>
    <br><br><br>
    <div>
        <hr class="h-0.5 bg-gray-300 mx-[20rem]">
    </div>
    <br><br><br><br>
</div>
</body>
</html>
