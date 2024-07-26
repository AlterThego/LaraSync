<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div
            class="max-w-7xl mx-auto sm:p-6 lg:p-8 space-y-6 bg-base-300 w-full h-full rounded-md bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-40">
            <div class="flex items-center justify-center">
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

            <div class="bg-base-100">
                <div class="flex flex-col md:flex-row justify-center min-h-screen">
                    <div class="w-full md:w-2/6 p-4 bg-base-100 border-b md:border-b-0 md:border-r border-base-300">
                        <!-- Column 1 Content -->
                        <div class="flex items-center justify-center">
                            <div class="join join-vertical w-full h-full">
                                <div class="collapse collapse-arrow join-item border-base-300 border">
                                    <input type="radio" name="my-accordion-4" checked="checked" />
                                    <div class="collapse-title">
                                        <p class="text-xl font-medium">
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
                                        <p class="text-xl font-medium">
                                            Edit Information</p>
                                    </div>
                                    <div class="collapse-content">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>
                                <div class="collapse collapse-arrow join-item border-base-300 border">
                                    <input type="radio" name="my-accordion-4" />
                                    <div class="collapse-title text-xl font-medium">Update Password</div>
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
                    <div class="w-full md:w-4/6 p-4 bg-base-100">
                        <!-- Column 2 Content -->
                        <h2 class="text-xl font-semibold pb-4">Recent Activity</h2>
                        <div class="card lg:card-side bg-base-100 shadow-xl">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
