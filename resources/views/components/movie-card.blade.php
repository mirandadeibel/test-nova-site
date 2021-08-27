<div class="group relative">
    <div class="w-full min-h-80 bg-gray-500 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
        <a href="#">
            <img src="http://dvdmedia.ign.com/dvd/image/lionkingse_boxlg.jpg" alt="{{ $movie->name }}" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </a>
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-300">
                <a href="#">
                    {{ $movie->name }}
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Directed By <a href="{{ route('movies-by-director', ['director' => $movie->director]) }}" class="hover:text-white transition duration-300">{{ $movie->director->name }}</a></p>
        </div>
    </div>
</div>
