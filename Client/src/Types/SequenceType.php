<?php

// Mollie Shopware Plugin Version: 1.4.3

namespace Mollie\Api\Types;

class SequenceType
{
    /**
     * Sequence types.
     *
     * @see https://docs.mollie.com/guides/recurring
     */
    const SEQUENCETYPE_ONEOFF = "oneoff";
    const SEQUENCETYPE_FIRST = "first";
    const SEQUENCETYPE_RECURRING = "recurring";
}
