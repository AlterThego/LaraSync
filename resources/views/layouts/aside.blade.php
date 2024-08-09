<!-- Sidebar -->
<aside class="w-80 p-4 sticky top-0 h-screen hidden lg:block">
    <div class="bg-base-200 p-4 rounded-xl mb-4">
        <ul class="space-y-4">
            <!-- User Status -->
            <li class="flex justify-between items-center">
                <p class="text-sm text-gray-500">{{ '@' . Auth::user()->username }}</p>
                <form class="text-xs text-base-content">
                    <select id="status" class="bg-transparent w-full p-1 border rounded">
                        <option value="online" {{ Auth::user()->status === 'online' ? 'selected' : '' }}>Online</option>
                        <option value="offline" {{ Auth::user()->status === 'offline' ? 'selected' : '' }}>Offline</option>
                        <option value="away" {{ Auth::user()->status === 'away' ? 'selected' : '' }}>Away</option>
                    </select>
                </form>
            </li>

            <!-- Profile -->
            <li>
                <a href="/profile" class="flex items-center gap-2 p-2 hover:bg-base-300 rounded-lg transition duration-300">
                    <div class="avatar">
                        <div class="w-12 rounded-full bg-black dark:bg-transparent border-2 border-black">
                            <img id="avatar-preview" src="{{ Auth::user()->avatar_url }}" alt="Profile Picture Preview" />
                        </div>
                    </div>
                    <div class="flex-1 pr-2">
                        <p class="font-bold break-words text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                    </div>
                </a>
            </li>

            <!-- Note -->
            <li class="flex items-center justify-start p-2">
                <span class="break-all text-sm text-gray-700 dark:text-gray-300">
                    {{ Auth::user()->note }}
                </span>
            </li>

            <!-- Actions -->
        <li>
            <div class="flex items-center gap-2 p-2">
                <!-- Create Note Button -->
                <button class="flex-1 btn btn-outline btn-primary flex items-center justify-center space-x-2" onclick="document.getElementById('noteModal').showModal()">
                    
                    <p class="text-blue-600 dark:text-blue-600 text-center"> + Create a Note</p>
                </button>

                <!-- Delete Note Button -->
                <form id="delete-note-form" action="{{ route('notes.destroy', Auth::user()->id) }}" method="POST" class="flex-shrink-0">
                    @csrf
                    @method('DELETE')
                    @if (Auth::user()->note == 'Share a note..' || Auth::user()->note == '')
                        <button type="submit" class="btn btn-disabled hidden" disabled>Delete Note</button>
                    @else
                        <button type="submit" class="btn btn-outline btn-primary">Delete Note</button>
                    @endif
                </form>
            </div>
        </li>



        </ul>
    </div>

    <!-- Stories -->
    <div class="bg-base-200 p-4 rounded-xl mb-4">
        <div class="flex items-center justify-between mb-3 pr-3">
            <h2 class="text-xl font-bold mb-2">Stories</h2>
            <div class="flex items-center btn btn-outline btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                </svg>
            </div>
        </div>

         <div class="carousel-container relative">
            <div class="carousel rounded-box w-64 overflow-hidden bg-gray-950 border-neutral">
                <div class="carousel-inner flex transition-transform duration-500  opacity-90 dark:opacity-70">
                    <div class="carousel-item w-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp"
                            class="w-full" alt="Tailwind CSS Carousel component" />
                    </div>
                    <div class="carousel-item w-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp"
                            class="w-full" alt="Tailwind CSS Carousel component" />
                    </div>
                    <div class="carousel-item w-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp"
                            class="w-full" alt="Tailwind CSS Carousel component" />
                    </div>
                    <div class="carousel-item w-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp"
                            class="w-full" alt="Tailwind CSS Carousel component" />
                    </div>
                    <div class="carousel-item w-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp"
                            class="w-full" alt="Tailwind CSS Carousel component" />
                    </div>
                    <div class="carousel-item w-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp"
                            class="w-full" alt="Tailwind CSS Carousel component" />
                    </div>
                    <div class="carousel-item w-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp"
                            class="w-full" alt="Tailwind CSS Carousel component" />
                    </div>
                </div>
            </div>
            <div class="absolute left-2 right-2 top-1/2 flex -translate-y-1/2 transform justify-between opacity-70">
                <a id="prevButton" class="btn btn-circle">❮</a>
                <a id="nextButton" class="btn btn-circle">❯</a>
            </div>
        </div>

    </div>

    <!-- Suggested Follows -->
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

<!-- Note Modal -->
<dialog id="noteModal" class="modal">
    <div class="modal-box">
        <form action="{{ route('notes.update', Auth::user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="button" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
                onclick="document.getElementById('noteModal').close()">✕</button>
            <h3 class="text-lg font-bold mb-4">Edit Note</h3>
            <div class="form-group">
                <label for="note" class="block text-sm font-medium text-gray-700 mb-2">Your Note</label>
                <textarea placeholder="{{ Auth::user()->note }}" class="textarea textarea-bordered w-full" name="note" id="note" required autocomplete="off"></textarea>
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" class="btn btn-secondary mr-2" onclick="document.getElementById('noteModal').close()">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Note</button>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carouselInner = document.querySelector(".carousel-inner");
        const carouselItems = document.querySelectorAll(".carousel-item");
        const prevButton = document.getElementById("prevButton");
        const nextButton = document.getElementById("nextButton");
        const totalItems = carouselItems.length;
        let currentIndex = 0;

        function updateCarouselPosition() {
            const offset = -currentIndex * 100; // Calculate the offset for the transform
            carouselInner.style.transform = `translateX(${offset}%)`;
        }

        prevButton.addEventListener("click", function() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems; // Move to previous item
            updateCarouselPosition();
        });

        nextButton.addEventListener("click", function() {
            currentIndex = (currentIndex + 1) % totalItems; // Move to next item
            updateCarouselPosition();
        });

        // Show or hide the delete note section based on the user's note content
        const noteContent = "{{ Auth::user()->note }}";
        if (noteContent === 'Share a note..' || noteContent === '') {
            document.querySelector('#delete-note-form button').classList.add('hidden');
        }
    });
</script>
