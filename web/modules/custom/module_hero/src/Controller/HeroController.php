<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
* This is our hero controller.
*/
Class HeroController extends ControllerBase {
  public function heroList() {

    $heroes = [
      ['name' => 'Green Lantern'],
      ['name' => 'Captain America'],
      ['name' => 'Wonder Woman'],
      ['name' => 'Iron Man'],
      ['name' => 'Wolverine'],
      ['name' => 'Superman'],
      ['name' => 'Spider-Man'],
      ['name' => 'Batman']
    ];

    return [
      '#theme' => 'hero_list',
      '#items' => $heroes,
      '#title' => $this->t('Our wonderful heroes list')
    ];
  }
}
