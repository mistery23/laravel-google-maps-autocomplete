<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete;

use Mistery23\GoogleMapsAutocomplete\DTO\Place;

/**
 * Class PlaceDataTransformer
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
            $place->matchedSubstrings = $prediction->matched_substrings;
            $place->placeId = $prediction->place_id;
            $place->secondaryText = $prediction->structured_formatting->secondary_text;
            $place->terms = $prediction->terms;

            $result[] = $place;
            unset($place);
        }

        return $result;
    }
}