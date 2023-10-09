<?php

return function(array $args){
dump($args);
if($args['page']['node_depth'] > 0) {
  $args['classes'][] = 'dropdown';
}
};