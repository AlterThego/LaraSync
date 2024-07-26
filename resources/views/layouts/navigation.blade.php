<nav
    class="bg-base-100 pt-6 p-1 w-block hidden md:block lg:block md:w-[74px] lg:w-[74px] xl:w-[13.5%] 2xl:w-[13.5%] border border-gray-200 dark:border-gray-700 fixed top-0 left-48 h-screen">
    <div class="flex items-center justify-center p-4">
        <a href="{{ route('dashboard') }}" class="shrink-0">
            <x-application-logo class="block h-9 w-auto fill-current base-content" />
        </a>
    </div>
    <ul class="mt-4 space-y-4">
        <li>
            <a href="#" class="block p-2 mx-2 rounded hover:bg-gray-200">
                <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                    <img src="images/home.svg" alt="">
                    <p class="hidden xl:block 2xl:block font-bold">Home</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#home" class="block p-2 mx-2 rounded hover:bg-gray-200">
                <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                    <img src="images/profile-outline.svg" alt="">
                    <p class="hidden xl:block 2xl:block">Profile</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="block p-2 mx-2 rounded hover:bg-gray-200">
                <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                    <img src="images/settings-outline.svg" alt="">
                    <p class="hidden xl:block 2xl:block">Settings</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#home" class="block p-2 mx-2 rounded hover:bg-gray-200">
                <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                    <img src="images/heart-outline.svg" alt="">
                    <p class="hidden xl:block 2xl:block">Favorites</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#home" class="block p-2 mx-2 rounded hover:bg-gray-200">
                <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                    <img src="images/github.svg" alt="">
                    <p class="hidden xl:block 2xl:block">Github</p>
                </div>
            </a>
        </li>
    </ul>
</nav>
