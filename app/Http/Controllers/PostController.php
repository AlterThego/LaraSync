<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latestFirst()->get();
        return view('home', compact('posts'));
    }

    public function store(Request $request)
    {
        // Define custom validation rules
        $validator = Validator::make($request->all(), [
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'media' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:20480',
        ]);

        if ($validator->fails()) {
            // Flash error message and redirect
            flash()->error('Validation failed: ' . $validator->errors()->first());
            return redirect()->route('home')->withErrors($validator)->withInput();
        }

        try {
            $validated = $validator->validated();

            if ($request->hasFile('media')) {
                $file = $request->file('media');
                $fileType = $file->getMimeType();

                if (strpos($fileType, 'image') !== false) {
                    $validated['image'] = $file->store('images', 'public');
                } elseif (strpos($fileType, 'video') !== false) {
                    $validated['video'] = $file->store('videos', 'public');
                }
            }

            // Add the authenticated user's ID to the validated data
            $validated['user_id'] = Auth::id();

            Post::create($validated);

            // Flash success message and redirect
            flash()->success('Post created successfully.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Flash error message and redirect
            flash()->error('An error occurred while creating the post.');
            return redirect()->route('home');
        }
    }



    public function edit(Post $post)
    {
        return view('home.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // Validate incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'media' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:20480',
        ]);

        // Handle media
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileType = $file->getMimeType();

            // Delete old media if necessary
            if ($post->image && strpos($fileType, 'image') !== false) {
                Storage::disk('public')->delete($post->image);
            } elseif ($post->video && strpos($fileType, 'video') !== false) {
                Storage::disk('public')->delete($post->video);
            }

            // Store new media and update fields
            if (strpos($fileType, 'image') !== false) {
                $validated['image'] = $file->store('images', 'public');
                $validated['video'] = null;
            } elseif (strpos($fileType, 'video') !== false) {
                $validated['video'] = $file->store('videos', 'public');
                $validated['image'] = null;
            }
        } else {
            // Retain existing media if no new file is provided
            $validated['image'] = $post->image;
            $validated['video'] = $post->video;
        }

        // Update the post
        $post->update($validated);
        flash()->success('Note updated successfully.');
        // Redirect to the posts index
        return redirect()->route('home');
    }

    public function destroy(Post $post)
    {




        try {
            // Delete media files if exists
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            if ($post->video) {
                Storage::disk('public')->delete($post->video);
            }

            // Delete author's profile picture if exists
            if ($post->author_profile_picture) {
                Storage::disk('public')->delete($post->author_profile_picture);
            }

            $post->delete();
            // Flash success message and redirect
            flash()->success('Note deleted successfully.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Flash error message and redirect
            flash()->error('An error occurred while deleting the post.');
            return redirect()->route('home');
        }
    }
}
