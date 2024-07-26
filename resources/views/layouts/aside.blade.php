<aside
    class="w-16 xl:w-64 shrink-0 bg-base-100 border-l border-gray-200 dark:border-gray-700 h-full fixed right-0 flex flex-col">
    <div class="p-4">
        <div class="flex items-center justify-center mb-4">
            <a href="#" class="shrink-0">
                <div class="avatar">
                    <div class="w-12 xl:w-16 rounded-full">
                        <img src="https://placehold.co/100x100" alt="User Avatar" />
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center hidden xl:block">
            <p class="font-bold text-xl">Jane Doe</p>
            <p class="text-sm text-gray-500">@janedoe</p>
        </div>
    </div>

    <div class="hidden xl:block px-4 mt-6">
        <h3 class="font-semibold mb-2">Trending Topics</h3>
        <ul class="space-y-2">
            <li><a href="#" class="text-blue-500">#WebDevelopment</a></li>
            <li><a href="#" class="text-blue-500">#ArtificialIntelligence</a></li>
            <li><a href="#" class="text-blue-500">#ClimateAction</a></li>
        </ul>
    </div>

    <div class="hidden xl:block px-4 mt-6">
        <h3 class="font-semibold mb-2">Suggested Follows</h3>
        <ul class="space-y-3">
            <li class="flex items-center">
                <img src="https://placehold.co/32x32" alt="User" class="w-8 h-8 rounded-full mr-2">
                <span>Alice Johnson</span>
            </li>
            <li class="flex items-center">
                <img src="https://placehold.co/32x32" alt="User" class="w-8 h-8 rounded-full mr-2">
                <span>Bob Williams</span>
            </li>
        </ul>
    </div>

    <div class="mt-auto p-4 mb-10">
        <div class="flex items-center justify-center xl:justify-start p-2 rounded hover:bg-base-300">
            <form method="POST" action="{{ route('logout') }}" class="w-full flex items-center">
                @csrf
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h6.403v1H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h6.404v1zm10.846-4.461l-.702-.72l2.319-2.319H9.192v-1h8.887l-2.32-2.32l.702-.718L20 12z" />
                </svg>
                <button type="submit" class="ml-2 hidden xl:block w-full text-left">Log Out</button>
            </form>
        </div>
    </div>

</aside>
