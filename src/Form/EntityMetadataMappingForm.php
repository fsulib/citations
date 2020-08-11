<?php

namespace Drupal\citations\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class EntityMetadataMappingForm.
 */
class EntityMetadataMappingForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $entity_metadata_mapping = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $entity_metadata_mapping->label(),
      '#description' => $this->t("Label for the Entity metadata mapping."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $entity_metadata_mapping->id(),
      '#machine_name' => [
        'exists' => '\Drupal\citations\Entity\EntityMetadataMapping::load',
      ],
      '#disabled' => !$entity_metadata_mapping->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity_metadata_mapping = $this->entity;
    $status = $entity_metadata_mapping->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Entity metadata mapping.', [
          '%label' => $entity_metadata_mapping->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Entity metadata mapping.', [
          '%label' => $entity_metadata_mapping->label(),
        ]));
    }
    $form_state->setRedirectUrl($entity_metadata_mapping->toUrl('collection'));
  }

}
