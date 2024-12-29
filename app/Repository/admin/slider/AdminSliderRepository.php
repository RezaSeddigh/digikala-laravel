<?php

namespace App\Repository\admin\slider;

use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminSliderRepository implements AdminSliderRepositoryInterface
{
    public function submit($formData,$image)
    {

        $imageFilename = pathinfo($image->hashName(), PATHINFO_FILENAME) . '.' . $image->extension();

        Slider::query()->create([
            'title' => $formData['title'],
            'link' => $formData['link'],
            'image' => $imageFilename,
        ]);
        Storage::disk('public')->put('sliders', $image);
    }
    public function delete($slider)
    {
        $image = $slider->image;
        File::delete('sliders/' . $image);
        $slider->delete();
    }
    public function changeStatus($slider)
    {
        if ($slider->status) {
            $slider->update(['status' => false]);
        } else {
            $slider->update(['status' => true]);
        }
    }
}
