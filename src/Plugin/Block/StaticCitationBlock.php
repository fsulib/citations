<?php

namespace Drupal\citations\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'StaticCitationBlock' block.
 *
 * @Block(
 *  id = "static_citation_block",
 *  admin_label = @Translation("Static citation block"),
 * )
 */
class StaticCitationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'static_citation_block';
     $build['static_citation_block']['#markup'] = 'Implement StaticCitationBlock.';

    return $build;
  }

}
