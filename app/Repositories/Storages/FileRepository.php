<?php

namespace App\Repositories\Storages;

class FileRepository
{
    protected $file;
    protected $filename;
    protected $extension;

    public function __construct($file)
    {
        $this->file = $file;
        $this->filename = $file->getClientOriginalName();
        $this->extension = $file->getClientOriginalExtension();
    }

    public function rename()
    {
        $uniq = uniqid();

        $rename = $uniq.'.'.$this->extension;

        return [
            'name' => $rename
        ];
    }
}
