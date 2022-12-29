<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - {{ $profile['name'] }}</title>
    @vite('resources/css/app.css')
</head>
<body class='bg-slate-200 text-black dark:bg-[#202020] dark:text-slate-200 p-5 md:p-16 min-h-screen flex flex-col'>
    <a href='/'>Back</a>
    <div class='rounded-3xl border border-slate-200 h-full p-8 flex flex-col'>
        <input class='outline-0 bg-transparent border-b py-2' placeholder='Title goes here'/>
        <button class='place-self-end my-4'>add another</button>
        <input class='outline-0 bg-transparent border-b py-2' placeholder='di malam hari'/>
    </div>
</body>
</html>