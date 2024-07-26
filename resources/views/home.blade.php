<x-app-layout>

    <div class="flex flex-col min-h-screen">
        <div class="flex flex-grow">
            <!-- Aside Section -->

            <!-- Main Content -->
            <main class="mx-auto">
                <div class="p-5">
                    <h1 class="text-2xl font-bold">Main Content</h1>
                    <div class="card lg:card-side bg-base-100 shadow-xl rounded-none">
                        <figure>
                            <img src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                alt="Album" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">New album is released!</h2>
                            <p>Click the button to listen on Spotiwhy app.</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Listen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>


        </div>

    </div>

    <div class="block md:hidden lg:hidden">
        <div class="flex btm-nav btm-nav-sm w-full fixed bottom-0">
            <button>
                <img src="images/settings-outline.svg" alt="">
            </button>
            <button>
                <img src="images/profile-outline.svg" alt="">
            </button>
            <button class="active">
                <img src="images/home-outline.svg" alt="">
            </button>
            <button>
                <img src="images/heart-outline.svg" alt="">
            </button>
            <button>
                <img src="images/github.svg" alt="">
            </button>
            <button>
                <img src="images/logout.svg" alt="">
            </button>
        </div>
    </div>

</x-app-layout>
