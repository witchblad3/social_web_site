<?php

namespace App\Helpers\Resources\Images;

use App\Models\Picture;

class Avatar extends Image
{
    public function __construct(?Picture $file)
    {
        $this->file = $file;
        parent::__construct();
    }

    public function toResponse(): array
    {
        return is_null($this->file) ? $this->getAvatarStub() : $this->getAvatar();
    }

    public function getAvatarStub(): array
    {
        return [
            'id' => 0,
            'path' => $this->getImageStub()
        ];
    }

    public function getAvatar(): array
    {
        $img = $this->getFile();
        return [
            'id' => $img->id,
            'path' => '/storage/' . $img->path
        ];
    }
}
