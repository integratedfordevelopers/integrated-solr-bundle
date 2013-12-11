<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Bundle\SolrBundle\Mapping\Driver\Metadata;

/**
 * Interface for mapping drivers
 *
 * @author Jeroen van Leeuwen <jeroen@e-active.nl>
 */
interface DriverInterface
{
    /**
     * @param \ReflectionClass $class
     * @return mixed
     */
    public function loadMetadataForClass(\ReflectionClass $class);
}