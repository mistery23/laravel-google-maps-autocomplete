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
 * Class AutocompletePlace
 */
class AutocompletePlace
{
    public const ZERO_RESULTS = 'ZERO_RESULTS';

    /**
     * @param string $input
     * @param array $params
     * @return array|bool
     */
    public function autocomplete(string $input, array $params = [])
    {
        $endpoint = "https://maps.googleapis.com/maps/api/place/autocomplete/json";
        $client = new \GuzzleHttp\Client();
        $query = [
            'key'       => config('google-autocomplete.api_key'),
            'input'     => $input,
        ];

        $response = $client->request('GET', $endpoint, ['query' => array_merge(
            $query,
            $params
        )]);

        $responseData = json_decode($response->getBody());

        if (isset($responseData->error_message)) {
            throw new \RuntimeException(json_decode($response->getBody())->error_message);
        }

        return $this->transform($responseData);
    }

    /**
     * @param $data
     * @return array|bool
     */
    private function transform($data)
    {
        if ($data->status === AutocompletePlace::ZERO_RESULTS) {
            return false;
        }

        foreach ($data->predictions as $prediction) {
            $result[] = new Place(
                $prediction->id,
                $prediction->description,
                $prediction->place_id,
                $prediction->structured_formatting->main_text,
                $prediction->structured_formatting->secondary_text,
                $prediction->terms,
                $prediction->matched_substrings
            );

            unset($place);
        }

        return $result;
    }
}