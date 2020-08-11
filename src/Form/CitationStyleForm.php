<?php

namespace Drupal\citations\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CitationStyleForm.
 */
class CitationStyleForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $citation_style = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $citation_style->label(),
      '#description' => $this->t("Label for the Citation style."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $citation_style->id(),
      '#machine_name' => [
        'exists' => '\Drupal\citations\Entity\CitationStyle::load',
      ],
      '#disabled' => !$citation_style->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $citation_style = $this->entity;
    $status = $citation_style->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Citation style.', [
          '%label' => $citation_style->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Citation style.', [
          '%label' => $citation_style->label(),
        ]));
    }
    $form_state->setRedirectUrl($citation_style->toUrl('collection'));
  }

}
