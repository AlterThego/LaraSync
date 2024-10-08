<!-- Sidebar -->
<aside class="w-80 p-4 sticky top-0 h-screen hidden lg:block">
    <div class="bg-base-200 p-4 rounded-xl mb-4">
        <ul class="space-y-4">
            <!-- User Status -->
            <form class="text-xs text-base-content">
                <!-- Status Indicator -->
                <div >
                    <span id="status-color" class="w-3 h-3 rounded-full "></span>
                </div>
                <!-- Status Dropdown -->
                <select id="status" class="bg-transparent w-full p-1 border rounded" onchange="updateStatus()">
                    <option value="online" {{ Auth::user()->status === 'online' ? 'selected' : '' }}>Online</option>
                    <option value="offline" {{ Auth::user()->status === 'offline' ? 'selected' : '' }}>Offline</option>
                    <option value="away" {{ Auth::user()->status === 'away' ? 'selected' : '' }}>Away</option>
                </select>
            </form>

            <!-- Profile -->
            <li>
                <a href="/profile" class="flex items-center gap-2 p-2 hover:bg-base-300 rounded-lg transition duration-300">
                    <div class="relative">
                        <div class="relative w-12 h-12 rounded-full border-2 border-black bg-black dark:bg-transparent">
                        <img id="avatar-preview" src="{{ Auth::user()->avatar_url }}" alt="Profile Picture Preview"
                            class="w-full h-full object-cover rounded-full border-2 border-black" />
                    </div>
                        <!-- Status Indicator on Profile Picture -->
                        <span id="status-color-profile" class="absolute bottom-0 right-0 w-4 h-4 rounded-full border-2 border-white {{ Auth::user()->status === 'online' ? 'bg-green-500' : (Auth::user()->status === 'offline' ? 'bg-gray-500' : 'bg-yellow-500') }}"></span>
                    </div>
                    <div class="flex-1 pr-2">
                        <p class="font-bold break-words text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ '@' . Auth::user()->username }}</p>
                    </div>
                </a>
            </li>

            <!-- Note -->
            <li class="flex items-center justify-start p-1">
                <span class="break-all text-sm text-gray-700 dark:text-gray-300">
                    {{ Auth::user()->note }}
                </span>
            </li>

             <!-- Actions -->
            <li>
    <div class="flex items-center gap-2 p-2">
        <!-- Conditionally Render Button -->
        @if (Auth::user()->note == 'Share a note..' || Auth::user()->note == '')
            <!-- Create Note Button -->
            <button class="flex-1 btn btn-outline btn-primary flex items-center justify-center space-x-2" onclick="document.getElementById('noteModal').showModal()">
                <svg class="w-5 h-5 text-blue-600 dark:text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <p class="text-blue-600 dark:text-blue-600 text-center">Create a Note</p>
            </button>
        @else
            <!-- Edit Note Button -->
            <button class="flex-1 btn btn-outline btn-primary flex items-center justify-center space-x-2" onclick="document.getElementById('noteModal').showModal()">

                <p class="text-blue-600 dark:text-blue-600 text-center">Edit Note</p>
            </button>
        @endif

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
    });
</script>

<script>
    function updateStatus() {
        const statusDropdown = document.getElementById('status');
        const statusColor = document.getElementById('status-color');
        const statusColorProfile = document.getElementById('status-color-profile');
        const statusText = document.getElementById('status-text');

        const selectedStatus = statusDropdown.value;
        let colorClass = '';
        let text = '';

        switch (selectedStatus) {
            case 'online':
                colorClass = 'bg-green-500';
                text = 'Online';
                break;
            case 'offline':
                colorClass = 'bg-gray-500';
                text = 'Offline';
                break;
            case 'away':
                colorClass = 'bg-yellow-500';
                text = 'Away';
                break;
        }

        statusColor.className = `w-3 h-3 rounded-full ${colorClass}`;
        statusColorProfile.className = `absolute bottom-0 right-0 w-4 h-4 rounded-full border-2 border-white ${colorClass}`;
        statusText.textContent = text;

        // Optionally, you can make an AJAX request to save the new status on the server.
        fetch('/update-status', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ status: selectedStatus })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Status updated successfully:', data);
        })
        .catch(error => {
            console.error('Error updating status:', error);
        });
    }

    document.getElementById('prevButton').addEventListener('click', () => {
        document.querySelector('.carousel-inner').scrollBy({
            left: -300, // Adjust value as needed
            behavior: 'smooth'
        });
    });

    document.getElementById('nextButton').addEventListener('click', () => {
        document.querySelector('.carousel-inner').scrollBy({
            left: 300, // Adjust value as needed
            behavior: 'smooth'
        });
    });
</script>