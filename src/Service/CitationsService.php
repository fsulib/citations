<?php

namespace Drupal\citations;

use Drupal\node\Entity\Node;
use Seboettg\CiteProc\StyleSheet;
use Seboettg\CiteProc\CiteProc;

/**
 * Class CitationsService.
 */
class CitationsService implements CitationsServiceInterface {

  /**
   * Constructs a new CitationsService object.
   */
  public function __construct() {

  }

  public function renderCitationMetadataFromNode($nid) {
  }

  public function renderFromMetadata($metadata, $style, $mode) {
    $stylesheet = StyleSheet::loadStyleSheet($style);
    $citeProc = new CiteProc($stylesheet);
    return $citeProc->render($metadata, $mode);
  }

  public function renderCitationFromMetadata($metadata, $style) {
    return \Drupal::service('citations.default')->renderFromMetadata($metadata, $style, 'citation');
  }

  public function renderBibliographyFromMetadata($metadata, $style) {
    return \Drupal::service('citations.default')->renderFromMetadata($metadata, $style, 'bibliography');
  }
 
  public function getStyleTitle($style) {
    $xml = simplexml_load_file('acta-polytechnica.csl');    
    $title = (string) $xml->info->title;    
    return $title;
  }

}
