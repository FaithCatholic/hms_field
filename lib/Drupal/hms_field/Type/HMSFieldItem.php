<?php

/**
 * @file
 * Contains \Drupal\hms_field\Type\HMSFieldItem.
 */

namespace Drupal\hms_field\Type;

use Drupal\Core\Entity\Field\FieldItemBase;

/**
 * Defines the 'hms_field' entity field item.
 */
class HMSFieldItem extends FieldItemBase {

  /**
   * Definitions of the contained properties.
   *
   * @see HMSFieldItem::getPropertyDefinitions()
   *
   * @var array
   */
  static $propertyDefinitions;

  /**
   * Implements ComplexDataInterface::getPropertyDefinitions().
   */
  public function getPropertyDefinitions() {

    if (!isset(static::$propertyDefinitions)) {
      static::$propertyDefinitions['value'] = array(
        'type' => 'integer',
        'label' => t('HMS value'),
      );
    }
    return static::$propertyDefinitions;
  }
}
