<?php

namespace App\Repositories\Subscriptions;

use App\Models\Subscriptions\Package;

class PackageRepository
{
    public function CreatePackage($data)
    {
        $package = Package::create($data);

        return $package;
    }

    public function PackagesList()
    {
        $packages = Package::all();

        return $packages;
    }

    public function UpdatePackage($data)
    {
        $package = Package::find($data['id'])->update($data['update']);

        return $package;
    }
}
