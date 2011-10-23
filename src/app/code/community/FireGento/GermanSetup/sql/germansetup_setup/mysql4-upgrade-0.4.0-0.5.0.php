<?php
/**
 * This file is part of the FIREGENTO project.
 *
 * FireGento_GermanSetup is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_GermanSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2011 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     0.5.0
 */
/**
 * Setup script; Adds the delivery_time attribute for products
 *
 * @category  FireGento
 * @package   FireGento_GermanSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2011 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     0.5.0
 */

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;
$installer->startSetup();
$installer->addAttribute(
    'catalog_product',
    'meta_autogenerate',
    array(
        'label'                         => 'Auto-Generate Meta-Information',
        'input'                         => 'select',
        'source'                        => 'eav/entity_attribute_source_boolean',
        'required'                      => false,
        'user_defined'                  => true,
        'default'                       => '0',
        'group'                         => 'Meta Information',
        'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'                       => true,
        'filterable'                    => false,
        'searchable'                    => false,
        'comparable'                    => false,
        'visible_on_front'              => false,
        'visible_in_advanced_search'    => false,
        'used_in_product_listing'       => false,
        'is_html_allowed_on_front'      => false,
    )
);
$installer->endSetup();
