<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Catalog\Model\ProductLink;

use Magento\Catalog\Api\Data\ProductLinkTypeInterface;

/**
 * @codeCoverageIgnore
 */
class Type extends \Magento\Framework\Api\AbstractExtensibleObject implements ProductLinkTypeInterface
{
    /**#@+
     * Constants
     */
    const KEY_CODE = 'code';
    const KEY_NAME = 'name';
    /**#@-*/

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->_get(self::KEY_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->_get(self::KEY_NAME);
    }

    /**
     * Set link type code
     *
     * @param int $code
     * @return $this
     */
    public function setCode($code)
    {
        return $this->setData(self::KEY_CODE, $code);
    }

    /**
     * Set link type name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::KEY_NAME, $name);
    }
}
