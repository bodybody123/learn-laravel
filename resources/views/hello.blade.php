

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class='bg-slate-200 text-black dark:bg-[#0a0814] dark:text-slate-200 m-auto p-5 max-w-xl'>
    <header class='flex py-6 w-full'>
        <button class='hover:text-indigo-600 w-1/3 text-start'>Hamburger</button>
        <div id="hideTresholds" class='w-2/3 transition-opacity'>Welcome, <span class='opacity-100 transition-opacity '>{{ $profile['name'] }}</span></div>
    </header>
    <div class='flex self-center flex-col'>
        <div class="border border-slate-200 my-6 rounded-full py-4 px-8 flex gap-2">
            <input class='border-none w-full bg-transparent  focus:outline-none' />
            <span>
                Search
            </span>
        </div>
        <div class='grid grid-cols-2 md:grid-cols-3 justify-center items-start content-center'>
            @foreach ($data as $item)
            <div>
                <p>{{ $item['title'] }}</p>    
                @if ( count($item['description']) > 1 ) 
                <ul class='list-disc pl-4'>
                    @foreach($item['description'] as $desc)
                    <li>{{ $desc }}</li>  
                    @endforeach
                </ul> 
                @else
                <p>{{ $item['description'][0] }}</P>
                @endif
            </div>
            @endforeach
        </div>
    </div>

    <a class='fixed bottom-6 right-6 aspect-square shadow-2xl bg-[#201b3a] flex justify-center items-center p-4 rounded-3xl'>
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