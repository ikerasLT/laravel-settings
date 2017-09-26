<?php

namespace Ikeraslt\Settings;


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Password;

class Settings
{
    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
        if (in_array(Cache::getDefaultDriver(), ['file', 'database'])) {
            $setting = Cache::rememberForever('settings.' . $key, function () use ($key) {
                return Setting::where('key', '=', $key)->first()->value;
            });
        } else {
            $setting = Cache::tags(['settings'])->rememberForever($key, function () use ($key) {
                return Setting::where('key', '=', $key)->first()->value;
            });
        }

        return $setting;
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @return \Ikeraslt\Settings\Setting
     */
    public function set($key, $value)
    {
        $setting = Setting::updateOrCreate(['key' => $key], ['value' => $value]);

        if (in_array(Cache::getDefaultDriver(), ['file', 'database'])) {
            Cache::forget('settings.all');
            Cache::forever('settings.' . $setting->key, $setting->value);
        } else {
            Cache::tags(['settings'])->flush();
            Cache::tags(['settings'])->forever($setting->key, $setting->value);
        }

        return $setting;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Ikeraslt\Settings\Setting[]
     */
    public function getAll()
    {
        if (in_array(Cache::getDefaultDriver(), ['file', 'database'])) {
            $settings = Cache::rememberForever('settings.all', function () {
                return Setting::all();
            });
        } else {
            $settings = Cache::tags(['settings'])->rememberForever('all', function () {
                return Setting::all();
            });
        }

        return $settings;
    }
}