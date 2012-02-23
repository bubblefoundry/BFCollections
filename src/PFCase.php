<?php
namespace bubblefoundry\BFCollections;

class PFCase {
  var $condition, $f;
  
  function __construct($condition, $f) {
    if (!is_callable($f)) {
      throw new Error('$f must be a function');
    }
    $this->condition = $condition;
    $this->f = $f;
  }
}

function pfCase($condition, $f) {
  return new PFCase($condition, $f);
}

?>