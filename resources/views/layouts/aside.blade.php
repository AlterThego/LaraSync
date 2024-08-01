<!-- Sidebar -->
<aside class="w-80 p-4 sticky top-0 h-screen hidden lg:block">
    <div class="bg-base-200 p-4 rounded-xl mb-4">
        <ul class="space-y-2">
            <li class="flex justify-between items-center">
                <p class="text-sm text-gray-500">{{ '@' . Auth::user()->username }}
                </p>
                <form class="text-xs text-base-content">
                    <select id="countries" class="bg-transparent w-full">
                        <option class="bg-base-100" selected>Status</option>
                        <option class="bg-base-100" value ="online">Online</option>
                        <option class="bg-base-100" value="offline">Offlne</option>
                        <option class="bg-base-100" value="away">Away</option>
                    </select>
                </form>
            </li>
            <li>
                <a href="/profile" class="flex items-center gap-2">
                    <div class="avatar">
                        <div class="w-12 rounded-full bg-black dark:bg-gray-700"">
                            <img id="avatar-preview" src="{{ Auth::user()->avatar_url }}"
                                alt="Profile Picture Preview" />
                        </div>
                    </div>
                    <div class="pr-10">
                        <p class="font-bold break-words">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                </a>
            </li>

            <li class="flex items-center justify-start">
                <span class="break-all">
                    {{ Auth::user()->note }}
                </span>
            </li>

            <li>
                <div class="flex items-center gap-2">
                    <button class="flex w-2/3 btn btn-outline btn-success" onclick="noteModal.showModal()">
                        <p class="dark:text-base-content">Edit Note</p>
                    </button>
                    <form action="{{ route('notes.destroy', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <form action="{{ route('notes.destroy', Auth::user()->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            @if (Auth::user()->note == 'Share a note..')
                                <button type="submit" class="flex flex-1 btn btn-disabled" disabled>Delete Note
                                </button>
                            @else
                                <button type="submit" class="flex flex-1 btn btn-error btn-outline">Delete Note
                                </button>
                            @endif



                        </form>
                    </form>
                </div>
            </li>


            <dialog id="noteModal" class="modal">
                <div class="modal-box">
                    <form action="{{ route('notes.update', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
                            onclick="document.getElementById('noteModal').close()">✕</button>
                        <h3 class="text-lg font-bold">Edit Note</h3>
                        <div class="flex justify-between items-center mt-4">
                            <input type="text" placeholder="{{ Auth::user()->note }}"
                                class="input input-bordered w-full max-w-xs" name="note" id="note" required
                                autocomplete="off" />
                            <button type="submit" class="btn btn-primary">
                                <p class="dark:text-gray-100">Update Note</p>
                            </button>
                        </div>
                    </form>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>

        </ul>
    </div>
    <div class="bg-base-200 p-4 rounded-xl mb-4">
        <h2 class="text-xl font-bold mb-2">Trending</h2>
        <ul class="space-y-2">
            <li>#TechNews</li>
            <li>Global Climate Summit</li>
            <li>New Movie Release</li>
            <li>#WellnessWednesday</li>
        </ul>
    </div>
    <div class="bg-base-200 p-4 rounded-xl">
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
