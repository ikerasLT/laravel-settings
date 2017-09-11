<?php

/**
 * @param string|null $key
 * @param string|null $value
 *
 * @return \Ikeraslt\Settings\Setting|\Ikeraslt\Settings\Setting[]|\Illuminate\Support\Collection
 */
function settings($key = null, $value = null)
{
    $settings = new Ikeraslt\Settings\Settings();

    if ($key && $value) {
        return $settings->set($key, $value);
    }

    if ($key) {
        return $settings->get($key);
    }

    return $settings->getAll();
}