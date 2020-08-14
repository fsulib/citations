<?php

namespace Drupal\citations\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;

/**
 * Provides a 'NodeStaticCitationBlock' block.
 *
 * @Block(
 *  id = "node_static_citation_block",
 *  admin_label = @Translation("Node static citation block"),
 * )
 */
class NodeStaticCitationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $content = '';
    return [
      '#markup' => Markup::create($content),
    ];
  }

}
