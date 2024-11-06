<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-teal-400">
    <div class="flex justify-center items-center h-svh">
        <div class="bg-white p-5 w-80 h-80 shadow-xl rounded-md flex justify-center items-center">
            <div>
                <p class="text-center md:text-2xl font-bold text-slate-800">Login</p>
                <form action="/" method="post" class="mt-3 p-2 ">
                    @csrf
                    <label for="email" class="text-yellow-400 font-semibold">Email:</label>
                    <input type="email" name="email" id="email"
                        class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                    <label for="password" class="text-yellow-400 font-semibold">password:</label>
                    <input type="password" name="password" id="password"
                        class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                    <button class="px-3 py-2 bg-yellow-300 rounded-md font-bold text-white">Login</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
