<?php

namespace Ikeraslt\Settings;


class Settings
{
    /**
     * @param string $key
     *
     * @return \Ikeraslt\Settings\Setting
     */
    public function get($key)
    {
        return Setting::where('key', '=', $key)->first();
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