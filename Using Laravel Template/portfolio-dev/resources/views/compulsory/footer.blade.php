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
    <div class="bg-[#1e293b] font-serif text-white">
        <div class="flex flex-row gap-2 py-5 pl-[6rem]">
            <a href="#" class="bg-amber-50 p-2 rounded-3xl hover:bg-[#4c1d95] shadow shadow-zinc-200 hover:shadow-[#5b21b6] social-media">
                <img src="{{ asset('images/footer/github.png') }}" alt="GitHub" class="w-5 h-5 social-icon">
            </a>
            <a href="#" class="bg-amber-50 p-2 rounded-3xl hover:bg-[#4c1d95] shadow shadow-zinc-200 hover:shadow-[#5b21b6] social-media">
                <img src="{{ asset('images/footer/linkedin.png') }}" alt="Linkedin" class="w-5 h-5 social-icon">
            </a>
            <a href="#" class="bg-amber-50 p-2 rounded-3xl hover:bg-[#4c1d95] shadow shadow-zinc-200 hover:shadow-[#5b21b6] social-media" >
                <img src="{{ asset('images/footer/x.png') }}" alt="X" class="w-5 h-5 social-icon">
            </a>
            <a href="#" class="bg-amber-50 p-2 rounded-3xl hover:bg-[#4c1d95] shadow shadow-zinc-200 hover:shadow-[#5b21b6] social-media">
                <img src="{{ asset('images/footer/facebook.png') }}" alt="Facebook" class="w-5 h-5 social-icon">
            </a>
            <a href="#" class="bg-amber-50 p-2 rounded-3xl hover:bg-[#4c1d95] shadow shadow-zinc-200 hover:shadow-[#5b21b6] social-media">
                <img src="{{ asset('images/footer/leetcode.png') }}" alt="LeetCode" class="w-5 h-5 social-icon">
            </a>
            <a href="#" class="bg-amber-50 p-2 rounded-3xl hover:bg-[#4c1d95] shadow shadow-zinc-200 hover:shadow-[#5b21b6] social-media">
                <img src="{{ asset('images/footer/codeforces.png') }}" alt="Codeforces" class="w-5 h-5 social-icon">
            </a>
            <div class="pl-[42rem] pt-2 t text-[#9333ea] text-md font-thin"> &copy; All Rights Reserved 2022-2023 | ShuvoMonowar</div>
        </div>
    </div>
</body>
</html>
