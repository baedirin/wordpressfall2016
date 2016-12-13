<?php
function legal_disclaimer(){
  return '<small>Before taking any legal advice you should always consult an
  attorney.</small>';
}
?>
<?php add_shortcode('disclaimer', 'legal_disclaimer'); ?>

