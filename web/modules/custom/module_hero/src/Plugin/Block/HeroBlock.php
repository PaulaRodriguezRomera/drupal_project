<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called Example hero block.
 *
 * @Block(
 *  id = "module_hero_hero",
 *  admin_label = @Translation("Example hero block")
 * )
 */
class HeroBlock extends BlockBase{

  /**
   * {@inheritdoc}
   */
  public function build() {
    $heroes = [
      ['hero_name' => 'Green Lantern', 'real_name' => 'David Banner'],
      ['hero_name' => 'Captain America', 'real_name'=> 'Thor Odinson'],
      ['hero_name' => 'Wonder Woman', 'real_name'=> 'Tony Stark'],
      ['hero_name' => 'Iron Man', 'real_name'=> 'Carl Lucas'],
      ['hero_name' => 'Wolverine','real_name'=> 'Natalia Romanova'],
      ['hero_name' => 'Superman','real_name'=> 'Matthew Murdock'],
      ['hero_name' => 'Spider-Man','real_name'=> 'Steven Rogers'],
      ['hero_name' => 'Batman', 'real_name'=> 'James Howlett']
    ];

    $table = [
      '#type' => 'table',
      '#header' => [
        $this->t('Hero name'),
        $this->t('Real name'),
      ]
    ];

    foreach($heroes as $hero){
      $table[] = [
        'hero_name' => [
          '#type' => 'markup',
          '#markup' => $hero['hero_name'],
        ],
        'real_name' => [
          '#type' => 'markup',
          '#markup' => $hero['real_name'],
        ],
      ];
    }

    return $table;
  }
}
