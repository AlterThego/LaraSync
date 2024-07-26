<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="flex h-full">
        <!-- Left Sidebar -->
        <nav class="w-16 xl:w-64 shrink-0 bg-gray-50 border-r border-gray-300 h-full fixed left-0 overflow-y-auto">
            <div class="flex items-center justify-center p-4">
                <a href="#" class="shrink-0">
                    <img src="https://placehold.co/100x100?text=Logo" alt="Logo" class="w-9 h-9">
                </a>
            </div>
            <ul class="mt-4 space-y-2">
                <li>
                    <a href="#" class="flex items-center p-2 mx-2 rounded hover:bg-gray-200 bg-gray-200">
                        <img src="https://placehold.co/24x24?text=H" alt="Home" class="w-6 h-6">
                        <span class="ml-3 hidden xl:block font-medium">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 mx-2 rounded hover:bg-gray-200">
                        <img src="https://placehold.co/24x24?text=P" alt="Profile" class="w-6 h-6">
                        <span class="ml-3 hidden xl:block">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 mx-2 rounded hover:bg-gray-200">
                        <img src="https://placehold.co/24x24?text=S" alt="Settings" class="w-6 h-6">
                        <span class="ml-3 hidden xl:block">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 mx-2 rounded hover:bg-gray-200">
                        <img src="https://placehold.co/24x24?text=F" alt="Favorites" class="w-6 h-6">
                        <span class="ml-3 hidden xl:block">Favorites</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 mx-2 rounded hover:bg-gray-200">
                        <img src="https://placehold.co/24x24?text=G" alt="Github" class="w-6 h-6">
                        <span class="ml-3 hidden xl:block">Github</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="max-w-6xl mx-auto">
            <div class="flex-grow mx-16 md:mx-32 lg:mx-48 xl:mx-64 2xl:mx-56 py-6 px-6">
                <h1 class="text-3xl font-bold mb-6">Home Feed</h1>

                <!-- Post input -->
                <div class="bg-white p-4 rounded-lg shadow mb-6">
                    <textarea class="w-full p-2 border rounded" rows="3" placeholder="What's on your mind?"></textarea>
                    <div class="mt-2 flex justify-between items-center">
                        <div>
                            <button class="btn btn-sm">📷 Photo</button>
                            <button class="btn btn-sm ml-2">📍 Location</button>
                        </div>
                        <button class="btn btn-primary">Post</button>
                    </div>
                </div>

                <!-- Feed items -->
                <div class="space-y-6">
                    <!-- Post 1 -->
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center mb-4">
                            <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-semibold">John Doe</p>
                                <p class="text-sm text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <p class="mb-4">Just finished a great workout! 💪 Feeling energized and ready to tackle the
                            day.
                            #FitnessJourney</p>
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
                    <div class="bg-white p-4 rounded-lg shadow">
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

        <!-- Right Sidebar -->
        <aside class="w-16 xl:w-64 shrink-0 bg-gray-50 border-l border-gray-300 h-full fixed right-0 flex flex-col">
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

            <div class="mt-auto p-4">
                <a href="#"
                    class="flex items-center justify-center xl:justify-start p-2 rounded hover:bg-gray-200">
                    <img src="https://placehold.co/24x24?text=L" alt="Logout" class="w-6 h-6">
                    <span class="ml-2 hidden xl:block">Logout</span>
                </a>
            </div>
        </aside>
    </div>

    <!-- Mobile Navigation -->
    <div class="block md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-300">
        <div class="flex justify-around">
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=H" alt="Home" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=P" alt="Profile" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=S" alt="Settings" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=F" alt="Favorites" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=G" alt="Github" class="w-6 h-6">
            </button>
        </div>
    </div>
</body>

</html>
