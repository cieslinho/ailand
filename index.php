<?php
/**
 * @package ailand Opole
 */
get_header();
?>



<?php 
if(is_page(174)) {
   get_footer('shop');
} elseif (is_page(15)){
    get_footer('shop');
} 
elseif (is_page(14)){
    get_footer('shop');
} 
elseif (is_page(183)){
    get_footer('shop');
} 
else {
   get_footer();
}
?>