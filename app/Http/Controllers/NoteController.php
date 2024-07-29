<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function create()
    {
        return view('home');
    }


    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'note' => [
                'required',
                'string',
                'max:255',
            ],
        ]);

        if ($validator->fails()) {
            flash()->error('Validation failed: ' . $validator->errors()->first());
            return redirect()->route('home')->withErrors($validator)->withInput();
        }

        try {
            $user->note = $request->note;
            $user->save();

            flash()->success('Note updated successfully.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            flash()->error('An error occurred while updating the note.');
            return redirect()->route('home');
        }
    }



    // Remove the specified note from storage
    public function destroy(User $user)
    {
        try {
            // Reset the user's note
            $user->note = 'Share a note..';
            $user->save();

            // Flash success message and redirect
            flash()->success('Note deleted successfully.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Flash error message and redirect
            flash()->error('An error occurred while deleting the note.');
            return redirect()->route('home');
        }
    }

}
