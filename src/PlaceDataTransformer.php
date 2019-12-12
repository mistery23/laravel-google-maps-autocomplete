<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete;

/**
 * Class PlaceDataTransformer
 * @package Mistery23\GoogleMapsAutocomplete
 */
class PlaceDataTransformer
{
    /**
     * @param $data
     * @return array|bool
     */
    public function transform($data)
    {
        if ($data->status === AutocompletePlace::ZERO_RESULTS) {
            return false;
        }

        $result = [];

        foreach ($data->predictions as $prediction){
            $place = new Place();

            $place->name = $prediction->structured_formatting->main_text;
            $place->id = $prediction->id;
            $place->description = $prediction->description;
            $place->matched_substrings = $prediction->matched_substrings;
            $place->place_id = $prediction->place_id;
            $place->secondaryText = $prediction->structured_formatting->secondary_text;
            $place->terms = $prediction->terms;

            $result[] = $place;
            unset($place);
        }

        return $result;
    }
}