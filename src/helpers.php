<?php

/**
 * @param string $key
 * @param string|null $value
 *
 * @return \Ikeraslt\Settings\Setting
 */
function settings($key, $value = null)
{
    $settings = new Ikeraslt\Settings\Settings();

    if ($value) {
        return $settings->set($key, $value);
    }

    return $settings->get($key);
}