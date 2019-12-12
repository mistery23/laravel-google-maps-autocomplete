<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete;

use Mistery23\GoogleMapsAutocomplete\DTO\MatchedSubstring;
use Mistery23\GoogleMapsAutocomplete\DTO\Place;
use Mistery23\GoogleMapsAutocomplete\DTO\Tesrm;

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
            $terms = [];

            foreach ($prediction->terms as $term){
                $terms[] = new Tesrm($term->offset, $term->value);
            }

            $matchedSubstrings = [];

            foreach ($prediction->matched_substrings as $matched_substring){
                $matchedSubstrings[] = new MatchedSubstring($matched_substring->length, $matched_substring->offset);
            }

            $result[] = new Place(
                $prediction->id,
                $prediction->description,
                $prediction->place_id,
                $prediction->structured_formatting->main_text,
                $prediction->structured_formatting->secondary_text,
                $terms,
                $matchedSubstrings
            );

            unset($place);
        }

        return $result;
    }
}