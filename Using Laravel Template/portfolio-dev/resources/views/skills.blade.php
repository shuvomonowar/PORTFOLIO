<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div id="skills" class="font-serif text-white">
    <div class="mx-[20rem]">
        <h1 class="text-4xl pb-2.5">{{ 'SKILLS' }}</h1>
        <hr class="mr-[47.3rem]">
        <br>
        <p class="text-lg py-2.5"><span class="text-[#9ca3af]">{{ 'Programming Languages:' }}</span><span class="font-bold pl-3">{{  'C++ | Java | C# | PHP | Python | JavaScript | SQL' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-[#9ca3af]">{{ 'Frontend Technologies:' }}</span><span class="font-bold pl-3">{{  'HTML5 | CSS3 | Tailwind CSS | Blade Templates | Vue.js | React.js' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-[#9ca3af]">{{ 'Backend Technologies:' }}</span><span class="font-bold pl-3">{{  'Laravel | Spring MVC' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-[#9ca3af]">{{ 'Databases:' }}</span><span class="font-bold pl-3">{{  'MySQL | Microsoft SQL Server' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-[#9ca3af]">{{ 'Cloud Computing:' }}</span><span class="font-bold pl-3">{{  'Amazon Web Services (AWS)' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-[#9ca3af]">{{ 'Dev Tools:' }}</span><span class="font-bold pl-3">{{  'Git | GitHub | Docker | Postman | Vite | Composer | VS Code | PhpStorm | IntelliJ IDEA | Slack | Microsoft Teams' }}</span></p>
    </div>
    <br><br>
    <div>
        <hr class="h-0.5 bg-gray-300 mx-[20rem]">
    </div>
    <br><br><br><br>
</div>
</body>
</html>
