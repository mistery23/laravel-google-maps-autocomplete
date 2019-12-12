<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete;

/**
 * Class Place
 * @package Mistery23\GoogleMapsAutocomplete
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
    public $place_id;

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
    public $matched_substrings;
}