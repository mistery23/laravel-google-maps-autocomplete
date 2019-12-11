<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete;


class AutocompleteWidget
{
    public static function renderInput(string $inputId, string $inputName, string $inputLabel, string $types)
    {
        return view('autocomplete-input', [
            'id' => $inputId,
            'name' => $inputName,
            'types' => $types,
            'label' => $inputLabel,
        ]);
    }
}