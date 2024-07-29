<x-app-layout>
    <div class="sticky top-0 bg-base-100/80 backdrop-blur p-4 border-b border-base-300  z-50">
        <h1 class="text-xl font-bold">Settings</h1>
    </div>
    <div class="flex-grow p-4">
        <div class="bg-base-100">
            <div class="flex flex-col md:flex-row justify-center min-h-screen">
                <div class="w-full p-4 bg-base-100 border-b md:border-b-0 md:border-r border-base-300">
                    <!-- Column 1 Content -->
                    <div class="flex items-center justify-center">
                        <div class="join join-vertical w-full h-full">
                            <div class="collapse collapse-arrow join-item border-base-300 border">
                                <input type="radio" name="my-accordion-4" checked="checked" />
                                <div class="collapse-title">
                                    <p class="text-lg font-bold">
                                        Edit Information</p>
                                </div>
                                <div class="collapse-content">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                            </div>
                            <div class="collapse collapse-arrow join-item border-base-300 border">
                                <input type="radio" name="my-accordion-4" />
                                <div class="collapse-title text-lg font-bold">Update Password</div>
                                <div class="collapse-content">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>
                            <div class="collapse collapse-arrow join-item border-base-300 border">
                                <input type="radio" name="my-accordion-4" />
                                <div class="collapse-title text-lg font-bold">Delete Account</div>
                                <div class="collapse-content">
                                    @include('profile.partials.delete-user-form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
