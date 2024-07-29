<x-app-layout>
    <div class="flex w-full max-w-7xl mx-auto">
        <!-- Navigation -->
        <nav class="w-64 p-4 sticky top-0 h-screen hidden lg:block">
            <div class="flex justify-center items-center">
                <x-application-logo></x-application-logo>
                <h1 class="text-2xl font-bold mb-4 text-primary">LaraSync</h1>
            </div>
            <ul class="space-y-2">
                <li class="hover:bg-base-300 p-2 rounded-full cursor-pointer"><i class="fas fa-home mr-2"></i>Home</li>
                <li class="hover:bg-base-300 p-2 rounded-full cursor-pointer"><i class="fas fa-compass mr-2"></i>Explore
                </li>
                <li class="hover:bg-base-300 p-2 rounded-full cursor-pointer"><i
                        class="far fa-bell mr-2"></i>Notifications</li>
                <li class="hover:bg-base-300 p-2 rounded-full cursor-pointer"><i
                        class="far fa-envelope mr-2"></i>Messages</li>
                <li class="hover:bg-base-300 p-2 rounded-full cursor-pointer"><i class="far fa-user mr-2"></i>Profile
                </li>
            </ul>
            <button class="btn btn-primary rounded-full mt-4 w-full">Post</button>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 border-x border-base-300 bg-base-100">
            <div class="sticky top-0 bg-base-100/80 backdrop-blur p-4 border-b border-base-300">
                <h1 class="text-3xl font-bold">News and Updates</h1>
            </div>
            <div class="p-4">
                <!-- Post input -->
                <div class="bg-base-100 p-4 rounded-lg shadow mb-6 border border-gray-200 dark:border-gray-700">
                    <textarea class="bg-base-200 textarea textarea-bordered text-base w-full focus:border-primary" rows="3"
                        placeholder="What's on your mind?"></textarea>
                    <div class="mt-2 flex justify-between items-center">
                        <div>
                            <button class="btn btn-sm">📷 Photo</button>
                            <button class="btn btn-sm ml-2">📍 Location</button>
                        </div>
                        <button class="btn btn-primary">New Post</button>
                    </div>
                </div>

                <!-- Feed items -->
                <div class="space-y-6">
                    <!-- Post 1 -->
                    <div class="bg-base-100 border border-gray-200 dark:border-gray-700 p-4 rounded-lg shadow">
                        <div class="flex items-center mb-4">
                            <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-semibold">John Doe</p>
                                <p class="text-sm text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <p class="mb-4">Just finished a great workout! 💪 Feeling energized and ready to tackle the
                            day. #FitnessJourney</p>
                        <img src="https://placehold.co/600x400" alt="Post image" class="w-full rounded-lg mb-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <button class="btn btn-sm">👍 Like</button>
                                <button class="btn btn-sm ml-2">💬 Comment</button>
                            </div>
                            <span class="text-sm text-gray-500">23 likes • 5 comments</span>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="bg-base-100 border border-gray-200 dark:border-gray-700 p-4 rounded-lg shadow">
                        <div class="flex items-center mb-4">
                            <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-semibold">Jane Smith</p>
                                <p class="text-sm text-gray-500">5 hours ago</p>
                            </div>
                        </div>
                        <p class="mb-4">Just launched my new website! Check it out and let me know what you think. 🚀
                            #WebDevelopment #Coding</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <button class="btn btn-sm">👍 Like</button>
                                <button class="btn btn-sm ml-2">💬 Comment</button>
                            </div>
                            <span class="text-sm text-gray-500">45 likes • 12 comments</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="w-80 p-4 sticky top-0 h-screen hidden xl:block">
            <div class="bg-base-200 p-4 rounded-lg mb-4">
                <h2 class="text-xl font-bold mb-2">Trending</h2>
                <ul class="space-y-2">
                    <li>#TechNews</li>
                    <li>Global Climate Summit</li>
                    <li>New Movie Release</li>
                    <li>#WellnessWednesday</li>
                </ul>
            </div>
            <div class="bg-base-200 p-4 rounded-lg">
                <h2 class="text-xl font-bold mb-2">Suggested Follows</h2>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <img src="https://placehold.co/40x40" alt="Tech Insider Avatar" class="rounded-full mr-2">
                        <div>
                            <p class="font-bold">Tech Insider</p>
                            <p class="text-sm text-gray-500">@techinsider</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <img src="https://placehold.co/40x40" alt="Nature Lover Avatar" class="rounded-full mr-2">
                        <div>
                            <p class="font-bold">Nature Lover</p>
                            <p class="text-sm text-gray-500">@naturelover</p>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</x-app-layout>
