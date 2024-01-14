<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class UploadPhoto extends Component
{
    use WithFileUploads;
    public $photo;

    public function render()
    {
        return view('livewire.user.upload-photo');
    }

    public function storagePhoto()
    {
        $this->validate([
            'photo' => 'required|image|max:10240',
        ]);

        $user = auth()->user();

        //cutomizar um nome para salvar o arquivo de foto
        $nameFile = Str::slug($user->name) . '.' . $this->photo->getClientOriginalExtension();

        if ($phath = $this->photo->storeAs('users',  $nameFile)) {
            $user->update([
                'profile_photo_path' => $phath,
            ]);
        }

        return redirect()->route('tweets.index');
    }
}
