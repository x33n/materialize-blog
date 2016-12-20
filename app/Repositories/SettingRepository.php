<?php
namespace App\Repositories;

use App\Models\Link;

class SettingRepository
{
    /**
     * Get all friend links.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFriendLinks()
    {
        return Link::all();
    }

    /**
     * Create a new link.
     *
     * @param $inputs
     * @return Link
     */
    public function createLink($inputs)
    {
        return Link::create($inputs);
    }

    /**
     * Update
     *
     * @param $id
     * @param $inputs
     * @return boolean
     */
    public function updateLink($id, $inputs)
    {
        return Link::where('id', $id)->update($inputs);
    }

    /**
     * Destroy
     *
     * @param $id
     * @return int
     */
    public function destroyLink($id)
    {
        return Link::destroy($id);
    }

}
