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
<div id="contact" class="font-serif text-white">
    <div class="mx-[20rem] text-4xl">
        <h1 class="pb-2.5">{{ 'CONTACT' }}</h1>
        <hr class="mr-[43.6rem]">
    </div>
    <br><br>
    <div class="mx-[20rem]">
        <form method="post" action="">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required class="mt-4 mb-6 shadow focus:shadow-purple-500 rounded-xl w-full py-2 px-2 text-black text-lg bg-[#cbd5e1] focus:outline-none appearance-none"><br>
            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required class="mt-4 mb-6 shadow focus:shadow-purple-500 rounded-xl w-full py-2 px-2 text-black text-lg bg-[#cbd5e1] focus:outline-none appearance-none"><br>
            <label for="message" class="mt-4">Your Message:</label><br>
            <textarea type="text" id="message" name="message" rows="5" cols="10" required class=" mt-4 mb-7 shadow focus:shadow-purple-500 rounded-xl w-full h-[15rem] py-2 px-2 text-black text-lg bg-[#cbd5e1] focus:outline-none appearance-none"></textarea><br>
            <button type="submit" class="bg-[#7e22ce] text-white p-2.5 border-solid rounded-3xl hover:bg-[#581c87] hover:text-white hover:border-none">Send Message</button>
        </form>
    </div>
    <br><br><br><br>
</div>
</body>
</html>
