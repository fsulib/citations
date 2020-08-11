<?php

namespace Drupal\citations\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Entity metadata mapping entity.
 *
 * @ConfigEntityType(
 *   id = "entity_metadata_mapping",
 *   label = @Translation("Entity metadata mapping"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\citations\EntityMetadataMappingListBuilder",
 *     "form" = {
 *       "add" = "Drupal\citations\Form\EntityMetadataMappingForm",
 *       "edit" = "Drupal\citations\Form\EntityMetadataMappingForm",
 *       "delete" = "Drupal\citations\Form\EntityMetadataMappingDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\citations\EntityMetadataMappingHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "entity_metadata_mapping",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/entity_metadata_mapping/{entity_metadata_mapping}",
 *     "add-form" = "/admin/structure/entity_metadata_mapping/add",
 *     "edit-form" = "/admin/structure/entity_metadata_mapping/{entity_metadata_mapping}/edit",
 *     "delete-form" = "/admin/structure/entity_metadata_mapping/{entity_metadata_mapping}/delete",
 *     "collection" = "/admin/structure/entity_metadata_mapping"
 *   }
 * )
 */
class EntityMetadataMapping extends ConfigEntityBase implements EntityMetadataMappingInterface {

  /**
   * The Entity metadata mapping ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Entity metadata mapping label.
   *
   * @var string
   */
  protected $label;

}
