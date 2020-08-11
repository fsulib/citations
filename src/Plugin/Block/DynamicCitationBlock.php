<?php

namespace Drupal\citations\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DynamicCitationBlock' block.
 *
 * @Block(
 *  id = "dynamic_citation_block",
 *  admin_label = @Translation("Dynamic citation block"),
 * )
 */
class DynamicCitationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'dynamic_citation_block';
     $build['dynamic_citation_block']['#markup'] = 'Implement DynamicCitationBlock.';

    return $build;
  }

}
