<!-- Navigation -->
<nav class="py-4 px-2 sticky top-0 h-screen hidden md:block shrink-0 ">
    <div class="p-4">
        <a href="/" class="shrink-0">
            <div class="flex items-center justify-center gap-3">
                <x-application-logo class="block h-7 w-auto fill-current base-content" />
                <span class="hidden xl:block text-lg">LaraSync</span>
            </div>
        </a>
    </div>
    <ul class="mt-4 space-y-3">
        <li>
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="block p-1 mx-2 rounded hover:bg-base-200">
                <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3 text-base-content">
                    @if (request()->routeIs('home'))
                        {{-- SVG fill --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M11.003 2.388a1.5 1.5 0 0 0-2.005 0l-5.5 4.942A1.5 1.5 0 0 0 3 8.445V15.5A1.5 1.5 0 0 0 4.5 17h2A1.5 1.5 0 0 0 8 15.5v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 0 1.5 1.5h2a1.5 1.5 0 0 0 1.5-1.5V8.445a1.5 1.5 0 0 0-.497-1.115z" />
                        </svg>
                    @else
                        {{-- SVG outline --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M8.998 2.388a1.5 1.5 0 0 1 2.005 0l5.5 4.942A1.5 1.5 0 0 1 17 8.445V15.5a1.5 1.5 0 0 1-1.5 1.5H13a1.5 1.5 0 0 1-1.5-1.5V12a.5.5 0 0 0-.5-.5H9a.5.5 0 0 0-.5.5v3.5A1.5 1.5 0 0 1 7 17H4.5A1.5 1.5 0 0 1 3 15.5V8.445c0-.425.18-.83.498-1.115zm1.336.744a.5.5 0 0 0-.668 0l-5.5 4.942A.5.5 0 0 0 4 8.445V15.5a.5.5 0 0 0 .5.5H7a.5.5 0 0 0 .5-.5V12A1.5 1.5 0 0 1 9 10.5h2a1.5 1.5 0 0 1 1.5 1.5v3.5a.5.5 0 0 0 .5.5h2.5a.5.5 0 0 0 .5-.5V8.445a.5.5 0 0 0-.166-.371z" />
                        </svg>
                    @endif

                    <p class="hidden xl:block 2xl:block {{ request()->routeIs('posts.index') ? 'font-bold' : '' }}">
                        Home
                    </p>
                </div>
            </x-nav-link>

        </li>
        <li>
            <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')" class="block p-1 mx-2 rounded hover:bg-base-200">
                <div
                    class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3 text-base-content">
                    @if (request()->routeIs('profile'))
                        {{-- SVG fill --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 48 48">
                            <g fill="none">
                                <path d="M0 0h48v48H0z" />
                                <path fill="currentColor" d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M23.184 43.984C12.517 43.556 4 34.772 4 24C4 12.954 12.954 4 24 4s20 8.954 20 20s-8.954 20-20 20h-.274q-.272 0-.542-.016M11.166 36.62a3.028 3.028 0 0 1 2.523-4.005c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 2.498 4.002A17.94 17.94 0 0 0 42 24c0-9.941-8.059-18-18-18S6 14.059 6 24c0 4.916 1.971 9.373 5.166 12.621"
                                    clip-rule="evenodd" />
                            </g>
                        </svg>
                    @else
                        {{-- SVG outline --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 48 48">
                            <g fill="none">
                                <path d="M0 0h48v48H0z" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M24 27a8 8 0 1 0 0-16a8 8 0 0 0 0 16m0-2a6 6 0 1 0 0-12a6 6 0 0 0 0 12"
                                    clip-rule="evenodd" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M44 24c0 11.046-8.954 20-20 20S4 35.046 4 24S12.954 4 24 4s20 8.954 20 20M33.63 39.21A17.9 17.9 0 0 1 24 42a17.9 17.9 0 0 1-9.831-2.92q-.36-.45-.73-.93A2.14 2.14 0 0 1 13 36.845c0-1.077.774-1.98 1.809-2.131c6.845-1 11.558-.914 18.412.035A2.08 2.08 0 0 1 35 36.818c0 .48-.165.946-.463 1.31q-.461.561-.907 1.082m3.355-2.744c-.16-1.872-1.581-3.434-3.49-3.698c-7.016-.971-11.92-1.064-18.975-.033c-1.92.28-3.335 1.856-3.503 3.733A17.94 17.94 0 0 1 6 24c0-9.941 8.059-18 18-18s18 8.059 18 18a17.94 17.94 0 0 1-5.015 12.466"
                                    clip-rule="evenodd" />
                            </g>
                        </svg>
                    @endif

                    <p class="hidden xl:block 2xl:block {{ request()->routeIs('profile') ? 'font-font' : '' }}">
                        Profile
                    </p>
                </div>
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" class="block p-1 mx-2 rounded hover:bg-base-200">
                <div
                    class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3 text-base-content">
                    @if (request()->routeIs('profile.edit'))
                        {{-- SVG fill --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m10.135 21l-.362-2.892q-.479-.145-1.035-.454q-.557-.31-.947-.664l-2.668 1.135l-1.865-3.25l2.306-1.739q-.045-.27-.073-.558q-.03-.288-.03-.559q0-.252.03-.53q.028-.278.073-.626L3.258 9.126l1.865-3.212L7.771 7.03q.448-.373.97-.673q.52-.3 1.013-.464L10.134 3h3.732l.361 2.912q.575.202 1.016.463t.909.654l2.725-1.115l1.865 3.211l-2.382 1.796q.082.31.092.569t.01.51q0 .233-.02.491q-.019.259-.088.626l2.344 1.758l-1.865 3.25l-2.681-1.154q-.467.393-.94.673t-.985.445L13.866 21zm1.838-6.5q1.046 0 1.773-.727T14.473 12t-.727-1.773t-1.773-.727q-1.052 0-1.776.727T9.473 12t.724 1.773t1.776.727" />
                        </svg>
                    @else
                        {{-- SVG outline --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m10.135 21l-.362-2.892q-.479-.145-1.035-.454q-.557-.31-.947-.664l-2.668 1.135l-1.865-3.25l2.306-1.739q-.045-.27-.073-.558q-.03-.288-.03-.559q0-.252.03-.53q.028-.278.073-.626L3.258 9.126l1.865-3.212L7.771 7.03q.448-.373.97-.673q.52-.3 1.013-.464L10.134 3h3.732l.361 2.912q.575.202 1.016.463t.909.654l2.725-1.115l1.865 3.211l-2.382 1.796q.082.31.092.569t.01.51q0 .233-.02.491q-.019.259-.088.626l2.344 1.758l-1.865 3.25l-2.681-1.154q-.467.393-.94.673t-.985.445L13.866 21zM11 20h1.956l.369-2.708q.756-.2 1.36-.549q.606-.349 1.232-.956l2.495 1.063l.994-1.7l-2.189-1.644q.125-.427.166-.786q.04-.358.04-.72q0-.38-.04-.72t-.166-.747l2.227-1.683l-.994-1.7l-2.552 1.07q-.454-.499-1.193-.935q-.74-.435-1.4-.577L13 4h-1.994l-.312 2.689q-.756.161-1.39.52q-.633.358-1.26.985L5.55 7.15l-.994 1.7l2.169 1.62q-.125.336-.175.73t-.05.82q0 .38.05.755t.156.73l-2.15 1.645l.994 1.7l2.475-1.05q.589.594 1.222.953q.634.359 1.428.559zm.973-5.5q1.046 0 1.773-.727T14.473 12t-.727-1.773t-1.773-.727q-1.052 0-1.776.727T9.473 12t.724 1.773t1.776.727M12 12" />
                        </svg>
                    @endif

                    <p class="hidden xl:block 2xl:block {{ request()->routeIs('profile.edit') ? 'font-font' : '' }}">
                        Settings
                    </p>
                </div>
            </x-nav-link>
        </li>
        <li>
            <x-nav-link class="block p-1 mx-2 rounded hover:bg-base-300">
                <div
                    class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3 text-base-content">
                    {{-- SVG outline --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M178 42c-21 0-39.26 9.47-50 25.34C117.26 51.47 99 42 78 42a60.07 60.07 0 0 0-60 60c0 29.2 18.2 59.59 54.1 90.31a334.7 334.7 0 0 0 53.06 37a6 6 0 0 0 5.68 0a334.7 334.7 0 0 0 53.06-37C219.8 161.59 238 131.2 238 102a60.07 60.07 0 0 0-60-60m-50 175.11c-16.41-9.47-98-59.39-98-115.11a48.05 48.05 0 0 1 48-48c20.28 0 37.31 10.83 44.45 28.27a6 6 0 0 0 11.1 0C140.69 64.83 157.72 54 178 54a48.05 48.05 0 0 1 48 48c0 55.72-81.59 105.64-98 115.11" />
                    </svg>
                    <p class="hidden xl:block 2xl:block">
                        Favorites
                    </p>
                </div>
            </x-nav-link>
        </li>
        <li>
            <x-nav-link class="block p-1 mx-2 rounded hover:bg-base-300">
                <div
                    class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3 text-base-content">
                    {{-- SVG outline --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                    </svg>
                    <p class="hidden xl:block 2xl:block">
                        Github
                    </p>
                </div>
            </x-nav-link>
        </li>
        <li>
            <x-nav-link class="block p-1 mx-2 rounded">
                <button class="btn btn-outline btn-primary dark:text-gray-300" onclick="createPostModal.showModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 21 21">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M10 4.5H5.5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V11" />
                            <path
                                d="M17.5 3.467a1.462 1.462 0 0 1-.017 2.05L10.5 12.5l-3 1l1-3l6.987-7.046a1.409 1.409 0 0 1 1.885-.104zm-2 2.033l.953 1" />
                        </g>
                    </svg>
                    <p class="hidden xl:inline">Post
                    </p>
                </button>
            </x-nav-link>
        </li>
    </ul>
    <div class="mt-auto p-4 mb-10">
        <div class="flex items-center justify-center">
            <div class="hidden xl:block p-2">
                <label class="flex cursor-pointer gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5" />
                        <path
                            d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                    </svg>
                    <input type="checkbox" value="synthwave" class="toggle theme-controller" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </label>
            </div>
            <div class="block xl:hidden">
                <label class="swap swap-rotate">
                    <input type="checkbox" class="theme-controller" value="synthwave" />
                    <svg class="swap-off h-7 w-7 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                    </svg>

                    <!-- moon icon -->
                    <svg class="swap-on h-7 w-7 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                    </svg>
                </label>
            </div>
        </div>
    </div>
    <x-nav-link>
        <div class="mt-auto p-4 mb-5 fixed bottom-0">
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" title="Logout"
                    class="flex items-center justify-center 2xl:justify-left w-full text-left bg-transparent hover:bg-base-200 focus:outline-none rounded p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"
                        class="">
                        <path fill="currentColor"
                            d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h6.403v1H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h6.404v1zm10.846-4.461l-.702-.72l2.319-2.319H9.192v-1h8.887l-2.32-2.32l.702-.718L20 12z" />
                    </svg>
                    <p class="hidden xl:inline">Log Out
                    </p>
                </button>
            </form>
        </div>
    </x-nav-link>

</nav>
