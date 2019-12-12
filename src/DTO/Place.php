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
}