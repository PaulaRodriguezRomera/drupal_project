<?php

/**
namespace Drupal\module_hero;
use Drupal\Core\Entity\EntityFieldManager;
use Drupal\Core\Entity\EntityTypeManager;

/**
 * Our hero article service class.
 */

/**
class HeroArticleService {
  private $entityFieldManager;
  private $entityTypemanager;



  public function __construct(EntityFieldManager $entityFieldManager, EntityTypeManager $entityTypeManager) {
    $this->entityFieldManager = $entityFieldManager;
    $this->entityTypemanager = $entityTypeManager;
  }

  /**
   * Method for getting articles, regarding heroes.
   */

/**
  public function getHeroArticles() {
    $articles = ['Hulk is green!', 'Flash is red!'];

    kint($this->entityFieldManager);
    kint($this->entityTypemanager);

    return $articles;
  }
}
