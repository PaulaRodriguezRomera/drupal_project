<?php

namespace Drupal\module_hero;
use Drupal\Core\Entity\Query\QueryFactory;

/**
 * Our hero article service class.
 */
class HeroArticleService {

  private $entityQuery;

  public function _construct(QueryFactory $entityQuery) {
    $this->entityQuery = $entityQuery;
  }




  /**
   * Method for getting articles, regarding heroes.
   */

  public function getHeroArticles()
  {
    $articles = ['Hulk is green!', 'Flash is red!'];

    kint($this->entityQuery);

    return $articles;
  }
}
