<dialog id="createPostModal" class="modal overflow-y-scroll">
    <div class="modal-box w-11/12 max-w-2xl border border-base-300 dark:border-gray-800">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold pb-4">Create Post!</h3>

        <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Title</span>
                    </div>
                </label>
                <input type="text" name="title" placeholder="Anything on your mind?" class="input input-bordered w-full" required />
            </div>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Description</span>
                </div>
                <textarea class="textarea textarea-bordered h-24" name="description" placeholder="Describe it" required></textarea>
            </label>

            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text-alt">Upload Image or Video (optional)</span>
                    </div>
                </label>
                <div class="flex items-center justify-between bg-base-200 p-1 rounded">
                    <div class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8" />
                        </svg>
                    </div>
                    <input name="media" type="file" accept="image/*,video/*" class="cursor-pointer block w-full text-sm text-base-content file:mr-4 file:py-2 file:px-4 file:border-0 file:border-base-300 file:text-sm file:font-semibold file:bg-base-300 file:text-base-content hover:file:bg-base-100 file:cursor-pointer file:rounded" onchange="previewImage(event)" />
                </div>
                <div class="flex pt-4 justify-end">
                    <button class="btn btn-primary">
                        <p class="text-white">Create Post</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
