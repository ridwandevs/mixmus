<?php

namespace App\Repositories\Storages;

use Illuminate\Support\Facades\Storage;

class FileUploadRepository
{
    protected $file;
    protected $directory;
    protected $disk;

    public function __construct($file)
    {
        $this->file = $file['file'];
        $this->directory = $file['directory'];
        $this->disk = $file['disk'];
    }

    public function storeFile($rename)
    {
        $store = Storage::putFileAs($this->directory, $this->file, $rename);

    }
}
