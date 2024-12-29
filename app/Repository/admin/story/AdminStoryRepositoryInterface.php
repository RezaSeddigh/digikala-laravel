<?php

namespace App\Repository\admin\story;


interface AdminStoryRepositoryInterface
{
    public function submit($formData,$thumbnail,$story);
    public function delete($story);
    public function changeStatus($story);
}
