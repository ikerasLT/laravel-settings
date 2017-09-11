<?php

namespace Ikeraslt\Settings;


class Settings
{
    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
        return Setting::where('key', '=', $key)->first()->value;
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @return \Ikeraslt\Settings\Setting
     */
    public function set($key, $value)
    {
        return Setting::updateOrCreate(['key' => $key], ['value' => $value]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Ikeraslt\Settings\Setting[]
     */
    public function getAll()
    {
        return Setting::all();
    }
}