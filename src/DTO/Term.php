<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete\DTO
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete\DTO;

/**
 * Class Tesrms
 */
class Term
{

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $value;


    /**
     * Tesrms constructor.
     *
     * @param int $offset
     * @param string $value
     */
    public function __construct(int $offset, string $value)
    {
        $this->offset = $offset;
        $this->value  = $value;
    }
}