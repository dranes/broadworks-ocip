<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Types;


/**
 * Class SimpleContent - Contains extensions or restrictions on a text-only complex type or on a simple type as content and contains no elements.
 *
 * @package BroadworksOCIP\Builder\Types
 */
class SimpleContent extends SimpleType
{

    /**
     * @param mixed $elementValue
     */
    public function __construct($elementValue = null)
    {
        $this->setElementValue($elementValue);
    }
}