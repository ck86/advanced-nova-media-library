<?php

namespace Ebess\AdvancedNovaMediaLibrary\Fields;

/**
 * Class Files
 *
 * @package Ebess\AdvancedNovaMediaLibrary\Fields
 */
class Files extends Images
{
    protected $defaultValidatorRules = [];

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->withMeta(['type' => 'file']);

        $this->hideFromIndex();
    }
}
