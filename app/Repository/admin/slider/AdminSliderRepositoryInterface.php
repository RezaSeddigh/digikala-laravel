<?php

namespace App\Repository\admin\slider;

interface AdminSliderRepositoryInterface
{
    public function submit($formData,$image);
    public function delete($slider);
    public function changeStatus($slider);
}
