<?php

namespace Drupal\citations\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;

/**
 * Provides a 'NodeDynamicCitationBlock' block.
 *
 * @Block(
 *  id = "node_dynamic_citation_block",
 *  admin_label = @Translation("Node dynamic citation block"),
 * )
 */
class NodeDynamicCitationBlock extends BlockBase {

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
