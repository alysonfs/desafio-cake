<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Cliente extends Entity
{
  protected $_accessible = [
    '*' => true,
    'id' => false,
    'name' => true,
    'email' => true    
  ];
}
