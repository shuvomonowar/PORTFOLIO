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
<div id="education" class="font-serif text-white">
    <div class="mx-[20rem] text-4xl">
        <h1 class="pb-2.5">{{ 'EDUCATION' }}</h1>
        <hr class="mr-[41.6rem]">
    </div>
    <br><br>
    <div class="mx-[20rem] flex flex-row space-x-10 shadow-2xl pl-7 py-5 rounded-lg transition ease-in-out delay-200 duration-200 hover:scale-105 hover:border-b hover:border-amber-50 bg-[#374151]">
        <div>
            <br>
            <img src="{{ asset('images/education/AIUB-Logo.png') }}" alt="{{ 'school logo' }}" class="h-[4rem] w-[4rem]">
        </div>
        <div>
            <h1 class="text-2xl font-bold">{{ 'American International University-Bangladesh' }}</h1>
            <p class="text-lg font-bold">{{ 'Bachelor of Science in Computer Science and Engineering' }}</p>
            <p class="text-lg">{{ 'January, 2020 - Present' }}</p>
            <p class="text-lg">{{ 'Dhaka, Bangladesh' }}</p>
        </div>
    </div>
    <br><br>
    <div class="mx-[20rem] flex flex-row space-x-10 shadow-2xl pl-7 py-5 rounded-lg transition ease-in-out delay-200 duration-200 hover:scale-105 hover:border-b hover:border-amber-50 bg-[#374151]">
        <div>
            <br>
            <img src="{{ asset('images/education/CPSCM-Logo.png') }}" alt="{{ 'school logo' }}" class="h-[4rem] w-[4rem]">
        </div>
        <div>
            <h1 class="text-2xl font-bold">{{ 'Cantonment Public School and College, Mymensingh' }}</h1>
            <p class="text-lg font-bold">{{ 'Higher Secondary School' }}</p>
            <p class="text-lg">{{ 'July, 2016 - August, 2018' }}</p>
            <p class="text-lg">{{ 'Mymensingh, Bangladesh' }}</p>
        </div>
    </div>
    <br><br>
    <div class="mx-[19.2rem] flex flex-row space-x-7 shadow-2xl pl-7 py-5 rounded-lg transition ease-in-out delay-200 duration-200 hover:scale-105 hover:border-b hover:border-amber-50 bg-[#374151]">
        <div>
            <br>
            <img src="{{ asset('images/education/NGPHS-Logo.png') }}" alt="{{ 'school logo' }}" class="h-[5rem] w-[5.5rem]">
        </div>
        <div>
            <h1 class="text-2xl font-bold">{{ 'Nakla Govt. Pilot High School' }}</h1>
            <p class="text-lg font-bold">{{ 'Secondary School' }}</p>
            <p class="text-lg">{{ 'January, 2011 - May, 2016' }}</p>
            <p class="text-lg">{{ 'Nakla, Sherpur, Bangladesh' }}</p>
        </div>
    </div>
    <br><br><br>
    <div>
        <hr class="h-0.5 bg-gray-300 mx-[20rem]">
    </div>
    <br><br><br><br>
</div>
</body>
</html>
