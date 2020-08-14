<?php

namespace Drupal\citations;

use Drupal\node\Entity\Node;
use Seboettg\CiteProc\StyleSheet; use Seboettg\CiteProc\CiteProc;

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

  public function getStylePath($style) {
  }
 
  public function getStyleMetadata($style) {
    $style_path = \Drupal::service('citations.default')->getStylePath($style);
    $xml = simplexml_load_file($style_path);    
    $style_metadata['path'] = $style_path;
    $style_metadata['title'] = (string) $xml->info->title;    
    foreach ($xml->info->link as $link) {    
      switch ((string) $link['rel']) {    
      case 'self':    
        $style_metadata['url'] = (string) $link['href'];    
        break;    
      case 'documentation':    
        $style_metadata['documentation'] = (string) $link['href'];    
        break;    
      }    
    }    
    return $style_metadata;
  }

}
