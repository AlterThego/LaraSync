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
                        <div class="w-12 rounded-full bg-black dark:bg-transparent 00 border-2 border-black">
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
