<x-app-layout>
    <div class="flex-grow mr-16 md:mx-32 lg:mx-48 xl:mx-64 2xl:mx-56 py-6 px-6">
        <h1 class="text-3xl font-bold mb-6">News and Updates</h1>

        <!-- Post input -->
        <div class="bg-base-100 p-4 rounded-lg shadow mb-6 border border-gray-200 dark:border-gray-700 ">
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
</x-app-layout>
