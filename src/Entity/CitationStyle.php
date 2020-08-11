<?php

namespace Drupal\citations\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Citation style entity.
 *
 * @ConfigEntityType(
 *   id = "citation_style",
 *   label = @Translation("Citation style"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\citations\CitationStyleListBuilder",
 *     "form" = {
 *       "add" = "Drupal\citations\Form\CitationStyleForm",
 *       "edit" = "Drupal\citations\Form\CitationStyleForm",
 *       "delete" = "Drupal\citations\Form\CitationStyleDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\citations\CitationStyleHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "citation_style",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/citation_style/{citation_style}",
 *     "add-form" = "/admin/structure/citation_style/add",
 *     "edit-form" = "/admin/structure/citation_style/{citation_style}/edit",
 *     "delete-form" = "/admin/structure/citation_style/{citation_style}/delete",
 *     "collection" = "/admin/structure/citation_style"
 *   }
 * )
 */
class CitationStyle extends ConfigEntityBase implements CitationStyleInterface {

  /**
   * The Citation style ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Citation style label.
   *
   * @var string
   */
  protected $label;

}
