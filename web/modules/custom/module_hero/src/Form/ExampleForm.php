<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Render\Element\Form;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Example form.
 */

class ExampleForm extends FormBase {

  /**
   * (@inheritdoc)
   */
  public function getFormId() {
    return 'module_hero_exampleform';
  }

  /**
   * (@inheritdoc)
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    return $form;
  }

  /**
   * (@inheritdoc)
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Submitting our form...');
  }
}
