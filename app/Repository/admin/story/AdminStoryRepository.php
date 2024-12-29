<?php

namespace App\Repository\admin\story;

use App\Models\Story;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminStoryRepository implements AdminStoryRepositoryInterface
{
    public function submit($formData,$thumbnail,$story)
    {
        $thumbnailFilename = pathinfo($thumbnail->hashName(), PATHINFO_FILENAME) . '.' . $thumbnail->extension();
        $storyFilename = pathinfo($story->hashName(), PATHINFO_FILENAME) . '.' . $story->extension();

        Story::query()->create([
            'title' => $formData['title'],
            'thumbnail' => $thumbnailFilename,
            'story' => $storyFilename,
            'admin_id' => null,
        ]);

        Storage::disk('public')->put('stories/thumbnail', $thumbnail);
        Storage::disk('public')->put('stories/story', $story);
    }
    public function delete($story)
    {
        $thumbnail = $story->thumbnail;
        $storyFile = $story->story;

        File::delete('stories/thumbnail/' . $thumbnail);
        File::delete('stories/story/' . $storyFile);
        $story->delete();
    }
    public function changeStatus($story)
    {
        if ($story->status) {
            $story->update(['status' => false]);
        } else {
            $story->update(['status' => true]);
        }
    }
}
