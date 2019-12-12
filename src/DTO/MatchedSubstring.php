<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete\DTO
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete\DTO;


class MatchedSubstring
{

    /**
     * @var int
     */
    public $length;
    /**
     * @var int
     */
    public $offset;


    /**
     * MatchedSubstring constructor.
     * @param int $length
     * @param int $offset
     */
    public function __construct(int $length, int $offset)
    {
        $this->length = $length;
        $this->offset = $offset;
    }
}