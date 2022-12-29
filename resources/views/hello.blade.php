<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - {{ $profile['name'] }}</title>
    @vite('resources/css/app.css')
</head>
<body class='bg-slate-200 text-black dark:bg-[#202020] dark:text-slate-200 md:grid md:grid-cols-3 lg:grid-cols-4 gap-5 p-5 md:p-0'>
    <header class='flex py-6 w-full md:hidden'>
        <button class='hover:text-indigo-600 w-1/3 text-start'>Hamburger</button>
        <div id="hideTresholds" class='w-2/3 transition-opacity'>Welcome, <span class='opacity-100 transition-opacity '>{{ $profile['name'] }}</span></div>
    </header>
    <section class='h-screen max-w-[300px] hidden md:flex flex-col col-span-1 bg-[#ffffff05] rounded-r-[3.5rem] shadow-md'>
        <nav class='h-full py-5 pr-10 flex flex-col gap-4'>
            <div class='text-center'>Why alwasy note taking app?</div>
            <div class='flex p-5 items-center justify-start h-12 gap-4'>
                <div class='rounded-full p-[2px] ring-2 ring-neutral-500'>
                    <span class='flex items-center justify-center text-center rounded-full w-8 h-8 bg-purple-900'>B</span>
                </div>
                {{ $profile['name'] }}
            </div>
            <a href='/' class='flex p-5 items-center justify-start h-12 hover:bg-[#ffffff2e]'>
                Home
            </a>
            <a href='settings' class='flex p-5 items-center justify-start h-12 hover:bg-[#ffffff2e]'>
                Settings
            </a>
            <a href='about' class='flex p-5 items-center justify-start h-12 hover:bg-[#ffffff2e]'>
                About
            </a>
        </nav>
        <div class='self-center text-xs text-gray-500 p-5'>Created by bodybody - 29-12-2022</div>
    </section>
    <div class='flex flex-col col-span-2 lg:col-span-3 md:p-6'>
        <div class="border border-slate-200 my-6 rounded-full py-4 px-8 flex gap-2">
            <input class='border-none w-full bg-transparent  focus:outline-none' />
            <span>
                Search
            </span>
        </div>
        <div class='flex gap-4 justify-items-stretch items-start content-center'>
            @foreach ($data as $item)
            <a href='note/{{$item["id"]}}' style="background-color: {{ $item['color'] }}" class="p-4 rounded-3xl min-w-[160px] max-w-[240px] hover:scale-105 ease-in-out cursor-pointer transition-transform">
                <p class='font-bold text-xl mb-2'>{{ $item['title'] }}</p>    
                @if ( count($item['description']) > 1 ) 
                <ul class='list-disc pl-4'>
                    @foreach($item['description'] as $desc)
                    <li>{{ $desc }}</li>  
                    @endforeach
                </ul> 
                @else
                <p>{{ $item['description'][0] }}</P>
                @endif

                <div class='text-[#ffffff9e] text-xs mt-3'>{{ date('d-m-Y h:i A', strtotime($item['createdAt'])) }}</div>
            </a>
            @endforeach
        </div>
    </div>

    <a href='/create' class='fixed bottom-6 right-6 aspect-square shadow-2xl bg-[#ffffff05] text-center flex justify-center items-center p-4 rounded-3xl'>
        Create
    </a>

    <script>
        const getElement = document.getElementById("hideTresholds")

        setTimeout(() => {
            getElement.style.opacity = 0;
        }, 2000);
        setTimeout(() => {
            getElement.remove();
        }, 2150);
    </script>
</body>
</html>