<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete\DTO;

/**
 * Class Place
 */
class Place
{

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $placeId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $secondaryText;

    /**
     * @var array
     */
    public $terms;

    /**
     * @var array
     */
    public $matchedSubstrings;


    /**
     * Place constructor.
     *
     * @param string $id
     * @param string $description
     * @param string $placeId
     * @param string $name
     * @param string $secondaryText
     * @param array  $terms
     * @param array  $matchedSubstrings
     */
    public function __construct(
        string $id,
        string $description,
        string $placeId,
        string $name,
        string $secondaryText,
        array  $terms,
        array  $matchedSubstrings
    ) {
        $this->id                = $id;
        $this->description       = $description;
        $this->placeId           = $placeId;
        $this->name              = $name;
        $this->secondaryText     = $secondaryText;

        foreach ($terms as $term){
            $this->terms[] = new Term($term->offset, $term->value);
        }

        foreach ($matchedSubstrings as $matched_substring){
            $this->matchedSubstrings[] = new MatchedSubstring($matched_substring->length, $matched_substring->offset);
        }
    }
}