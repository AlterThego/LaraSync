<x-app-layout>
    <div class="sticky top-0 bg-base-100/80 backdrop-blur p-4 border-b border-base-300  z-50">
        <h1 class="text-xl font-bold">Profile</h1>
    </div>
    <div class="flex-grow p-4">
        <!-- Post input -->
        <div class="bg-base-100 p-4 rounded-lg mb-3 shadow border border-base-300">
            <div class="flex items-center justify-center mb-6 ">
                <div class="avatar">
                    <div class="w-44 rounded-full bg-black dark:bg-gray-700"">
                        <img id="avatar-preview" src="{{ Auth::user()->avatar_url }}" alt="Profile Picture Preview" />
                    </div>
                </div>
            </div>
            <div>
                <p class="text-center text-2xl">
                    Jane Doe
                </p>
            </div>
            <div class="divider"></div>
            <div class="bg-base-100">
                <div class="flex flex-col md:flex-row justify-center min-h-screen">
                    <div class="w-full p-4">
                        <div class="space-y-6">
                            <!-- Post 1 -->
                            <div class="bg-base-100 border border-base-300 p-4 rounded-lg shadow">
                                <div class="flex items-center mb-4">
                                    <img src="https://placehold.co/40x40" alt="User"
                                        class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-semibold">John Doe</p>
                                        <p class="text-sm text-gray-500">2 hours ago</p>
                                    </div>
                                </div>
                                <p class="mb-4">Just finished a great workout! 💪 Feeling energized and ready
                                    to
                                    tackle the
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
                            <div class="bg-base-100 border border-gray-200 dark:border-gray-700 p-4 rounded-lg shadow">
                                <div class="flex items-center mb-4">
                                    <img src="https://placehold.co/40x40" alt="User"
                                        class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-semibold">Jane Smith</p>
                                        <p class="text-sm text-gray-500">5 hours ago</p>
                                    </div>
                                </div>
                                <p class="mb-4">Just launched my new website! Check it out and let me know
                                    what you
                                    think. 🚀
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
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
