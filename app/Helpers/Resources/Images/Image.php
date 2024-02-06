<?php

namespace App\Helpers\Resources\Images;

class Image
{
    protected $file;
    protected $imageStub = "/images/image_stub.png";

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return string
     */
    public function getImageStub(): string
    {
        return $this->imageStub;
    }
}
