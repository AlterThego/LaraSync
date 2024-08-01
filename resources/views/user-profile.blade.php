<x-app-layout>
    <div class="sticky top-0 bg-base-100/80 backdrop-blur p-4 border-b border-base-300  z-50">
        <h1 class="text-xl font-bold">Profile</h1>
    </div>
    <div class="flex-grow p-4">
        <!-- Post input -->
        <div class="bg-base-100 p-4 rounded-lg mb-3 shadow border border-base-300">
            <section class="max-w-xl mx-auto">
                <form method="post" action="{{ route('user-profile.update') }}" class="space-y-8"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="flex flex-col items-center">
                        <div class="relative group">
                            <img id="avatar-preview"
                                src="{{ $user->avatar ? Storage::url($user->avatar) : asset('images/default-avatar.png') }}"
                                alt="{{ Auth::user()->username }}'s Profile Picture"
                                class="object-cover rounded-full h-32 w-32 sm:h-40 sm:w-40 transition-all duration-300 group-hover:opacity-75 bg-black" />

                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <label for="avatar"
                                    class="bg-black bg-opacity-50 text-white py-2 px-4 rounded-full cursor-pointer">
                                    Change Photo
                                </label>
                                <input id="avatar" name="avatar" type="file" class="hidden" accept="image/*"
                                    onchange="handleImageUpload(event)" />
                            </div>
                        </div>

                        <h2 class="mt-4 text-2xl font-bold">
                            {{ Auth::user()->username }}
                        </h2>
                    </div>

                    <div id="save-button-container" class="flex justify-center" style="display: none;">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-full transition duration-300">
                            Save Changes
                        </button>
                    </div>

                    @if (session('status') === 'profile-updated')
                        <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-center text-green-600">
                            Profile updated successfully!
                        </div>
                    @endif
                </form>
            </section>


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
    {{-- <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('avatar-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> --}}

    <script>
        function handleImageUpload(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('avatar-preview');
                preview.src = reader.result;

                // Show the save button
                document.getElementById('save-button-container').style.display = 'flex';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</x-app-layout>
