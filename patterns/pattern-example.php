<?php
/**
 * Title: Pattern Example - Theme Test
 * Slug: blockcraft/pattern-example
 * Categories: blockcraft-category
 *
 * @package blockcraft
 */

return <<<EOD
<!-- wp:group {"metadata":{"name":"Pattern Example"},"className":"pattern-example","layout":{"type":"constrained"}} -->
<div class="wp-block-group pattern-example"><!-- wp:cover {"overlayColor":"vivid-red","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-vivid-red-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading -->
<h2 class="wp-block-heading">This could be a heading</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph -->
<p>Some Content Added</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
EOD;
