<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
    <div class="flex-grow mx-16 py-6 px-6">
        <h1 class="text-3xl font-bold mb-6">Profile</h1>

        <!-- Post input -->
        <div class="bg-base-100 p-4 rounded-lg mb-3 shadow border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-center mb-6 ">
                <div class="avatar">
                    <div class="w-44 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
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
                    <div class="w-full md:w-2/6 p-4 bg-base-100 border-b md:border-b-0 md:border-r border-base-300">
                        <!-- Column 1 Content -->
                        <div class="flex items-center justify-center">
                            <div class="join join-vertical w-full h-full">
                                <div class="collapse collapse-arrow join-item border-base-300 border">
                                    <input type="radio" name="my-accordion-4" checked="checked" />
                                    <div class="collapse-title">
                                        <p class="text-lg font-medium">
                                            Profile Information</p>
                                    </div>
                                    <div class="collapse-content">
                                        <p>Person's Bio: </p>
                                        <p>Email: </p>
                                        <p>Hobbies: </p>
                                    </div>
                                </div>
                                <div class="collapse collapse-arrow join-item border-base-300 border">
                                    <input type="radio" name="my-accordion-4" />
                                    <div class="collapse-title">
                                        <p class="text-lg font-medium">
                                            Edit Information</p>
                                    </div>
                                    <div class="collapse-content">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>
                                <div class="collapse collapse-arrow join-item border-base-300 border">
                                    <input type="radio" name="my-accordion-4" />
                                    <div class="collapse-title text-lg font-medium">Update Password</div>
                                    <div class="collapse-content">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>
                                <div class="collapse collapse-arrow join-item border-base-300 border">
                                    <input type="radio" name="my-accordion-4" />
                                    <div class="collapse-title text-xl font-medium">Delete Account</div>
                                    <div class="collapse-content">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-4/6 p-4">
                        <div class="space-y-6">
                            <!-- Post 1 -->
                            <div class="bg-base-100 border border-gray-200 dark:border-gray-700 p-4 rounded-lg shadow">
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

        <!-- Feed items -->
        <div class="space-y-6">
            <!-- Prop 1 -->
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
