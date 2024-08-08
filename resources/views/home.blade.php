<x-app-layout>
    @include('layouts.modal.update-modal')
    <div class="sticky top-0 bg-base-100/80 backdrop-blur p-4 border-b border-base-300 z-50">
        <h1 class="text-xl font-bold">Feed</h1>
    </div>
    <div class="p-6">
        <!-- Post input -->
        <div class="bg-base-100 p-4 rounded-lg mb-6 border border-gray-300 dark:border-gray-700">
            <div class="card bg-base-200 rounded-lg mb-4 border border-gray-300 dark:border-gray-700 cursor-pointer"
                onclick="createPostModal.showModal()">
                <p class="pt-2 pl-4 pb-16 text-gray-400">What's on your mind, {{ Auth::user()->name }}?</p>
            </div>
            <div class="flex justify-between items-center">
                <div>
                    <button class="btn btn-sm" onclick="createPostModal.showModal()"">📷 Photo</button>
                    <button class="btn
                        btn-sm ml-2" onclick="createPostModal.showModal()"">📍
                        Video</button>
                </div>
            </div>
        </div>

        <!-- Feed items -->
        <div class="space-y-6">
            <!-- Post 1 -->
            @if ($posts->isNotEmpty())
                @foreach ($posts as $post)
                    <div class="bg-base-100 border border-gray-200 dark:border-gray-700 p-4 rounded-lg">
                        <div class="flex justify-between">
                            <div class="flex items-center mb-4">
                                {{-- <div class="">
                            <img src="{{ asset('storage/' . $post->user->avatar) }}"
                                alt="{{ $post->user->name }}'s Avatar" class="w-10 h-10 rounded-full mr-3">
                        </div> --}}
                                <div class="avatar">
                                    <div class="w-10 rounded-full mr-3 bg-black">
                                        <img src="{{ asset('storage/' . $post->user->avatar) }}"
                                            alt="{{ $post->user->name }}'s Avatar" class="" />
                                    </div>
                                </div>
                                <div>
                                    <p class="font-extrabold">{{ $post->author }}</p>
                                    <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>

                            <div class="dropdown dropdown-left">
                                <div tabindex="0" role="button" class="btn btn-ghost hover:bg-transparent"
                                    title="Options">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                        viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                            d="M2.5 10h13.528a4.5 4.5 0 0 0 8.945 0H29.5a.5.5 0 0 0 0-1h-4.527a4.5 4.5 0 0 0-8.945 0H2.5a.5.5 0 0 0 0 1m18-4a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7m-4.527 17a4.5 4.5 0 0 1-8.946 0H2.5a.5.5 0 0 1 0-1h4.527a4.5 4.5 0 0 1 8.946 0H29.5a.5.5 0 0 1 0 1zM8 22.5a3.5 3.5 0 1 0 7 0a3.5 3.5 0 0 0-7 0" />
                                    </svg>
                                </div>
                                <ul tabindex="0"
                                    class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow border border-gray-300 dark:border-gray-700">
                                    <li
                                        onclick="openEditModal('{{ $post->id }}', '{{ addslashes($post->title) }}', '{{ addslashes($post->description) }}', '{{ $post->image }}', '{{ $post->video }}')">
                                        <div>
                                            Edit
                                        </div>

                                    </li>

                                    <li onclick="document.getElementById('delete-form-{{ $post->id }}').submit()">
                                        <div class="">
                                            <form id="delete-form-{{ $post->id }}"
                                                action="{{ route('home.destroy', $post) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            Delete
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="mb-2 font-semibold">{{ $post->title }}</p>
                        <p class="mb-4">{{ $post->description }}</p>
                        <div class="bg-gray-950 rounded-lg">
                            @if ($post->image)
                                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                                    class="w-full rounded-lg mb-2 opacity-90 dark:opacity-80">
                            @endif
                        </div>
                        @if ($post->video)
                            <video controls class="w-full rounded-lg mb-2">
                                <source src="{{ Storage::url($post->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                        <div class="flex justify-between items-center">
                            <div class="flex gap-4 items-center">
                                <a href="#"><img src="images/favorites-outline.svg"></a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.42em" height="1em"
                                        viewBox="0 0 29 24">
                                        <path fill="currentColor"
                                            d="M.408 22.528C2.281 15.77 6.08 10.995 11.624 8.434c1.678-.752 3.633-1.353 5.673-1.709l.151-.022c.462 0 .464-.014.464-3.352V0l11.446 11.446l-11.446 11.446V16.19H16.52a24.855 24.855 0 0 0-10.51 2.58l.145-.065a20.31 20.31 0 0 0-4.767 3.825l-.013.015l-1.374 1.454z" />
                                    </svg></a>
                                <button class="btn btn-sm ml-2">💬 Comment</button>
                            </div>
                            <div class="flex justify-end items-center">
                                <span class="text-sm text-gray-500">23 likes • 5 comments</span>
                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <section class="flex items-center justify-center">
                    <p class="text-lg">No posts available.</p>
                </section>
            @endif


            {{-- <div class="bg-base-100 border border-gray-200 dark:border-gray-700 p-4 rounded-lg">
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
            <div class="bg-base-100 border border-gray-200 dark:border-gray-700 p-4 rounded-lg">
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
            </div> --}}
        </div>
    </div>



</x-app-layout>

<script>
    function openEditModal(id, title, description, image, video) {
        const modal = document.getElementById('editPostModal');
        const form = document.getElementById('editPostForm');

        modal.showModal(); // Open the modal

        // Set form action URL with post ID
        form.action = `/home/${id}`;

        // Populate form fields
        document.getElementById('editTitle').value = title;
        document.getElementById('editDescription').value = description;
    }
</script>

<script>
    document.getElementById('media').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const fileType = file.type;
            const validImageTypes = ["image/gif", "image/jpeg", "image/png", "image/webp"];
            const validVideoTypes = ["video/mp4", "video/webm", "video/ogg"];
            if (!validImageTypes.includes(fileType) && !validVideoTypes.includes(fileType)) {
                alert("Please upload a valid image or video file.");
                this.value = ''; // Clear the input
            }
        }
    });
</script>
