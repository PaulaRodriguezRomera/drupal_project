<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Custom hero form.
 */
class HeroForm extends FormBase {

  protected $messenger;

  /**
   * Class constructor.
   */
  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'module_hero_heroform';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['rival_1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Rival one'),
    ];
    $form['rival_2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Rival two'),
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Who will win?'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $winner = rand(1, 2);
    $this->messenger->addMessage(
      $this->t('The winner between @rival1 and @rival2 is: @winner', [
        '@rival1' => $form_state->getValue('rival_1'),
        '@rival2' => $form_state->getValue('rival_2'),
        '@winner' => $form_state->getValue('rival_' . $winner),
      ])
    );
  }
}

