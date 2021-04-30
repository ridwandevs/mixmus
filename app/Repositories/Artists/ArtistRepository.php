<?php

namespace App\Repositories\Artists;

use App\Models\Artists\Artist;

class ArtistRepository
{
    public function CreateArtist($data)
    {
        $artist = Artist::create();
    }

    public function Artists()
    {

    }
}

