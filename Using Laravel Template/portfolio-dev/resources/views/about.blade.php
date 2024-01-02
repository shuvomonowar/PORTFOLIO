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
<div id="about" class="font-serif text-white">
    <div class="inline-block mt-20 mx-[20rem]">
        <h1 class="text-2xl font-thin">{{ "Hi, I'm" }} <span class="font-bold text-4xl">{{ "Monowar Hossain Shuvo" }}</span><span>{{ "." }}</span></h1>
        <h1 class="text-lg text-justify">{{ "A highly motivated computer science student with a passion for developing innovative and user-friendly applications. Currently, seeking an internship or full-time job in a dynamic and fast-paced environment where I can use my skills to learn and grow as a software engineer." }}</h1>
        <h1 class="inline text-lg font-bold">{{ "Interested in -" }}</h1>
        <h1 class="inline text-lg">{{ "Software Engineering, Full-Stack Software Development, Cloud Computing" }}</h1>
    </div>
    <br><br>
    <div class="mx-[20rem]">
        <button class="bg-[#7e22ce] text-white p-2.5 border-solid rounded-3xl hover:scale-105 hover:bg-[#581c87] hover:text-white hover:border-none">{{ 'Download Resume' }}</button>
    </div>
    <br><br>
    <div>
        <hr class="h-0.5 bg-gray-300 mx-[20rem]">
    </div>
    <br><br><br><br>
</div>
</body>
</html>
