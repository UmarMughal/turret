<?php

$code = '/* Orientation */
@portrait: ~"(orientation: portrait)";
@landscape: ~"(orientation: landscape)";

/* Small */
@small: ~"(max-width: @{screen-small-max})";
@small-up: ~"(only screen)";

/* Medium */
@medium: ~"(max-width:  @{screen-medium-max})";
@medium-up: ~"(min-width: @{screen-medium})";
@medium-only: ~"(min-width: @{screen-medium}) and (max-width: @{screen-medium-max})";
@medium-portrait: ~"(max-width:  @{screen-medium-max}) and (orientation: portrait)";
@medium-landscape: ~"(min-width: @{screen-medium}) and (max-width: @{screen-medium-max}) and (orientation: landscape)";

/* Large */
@large: ~"(min-width: @{screen-large})";
@large-only: ~"(min-width: @{screen-large-min}) and (max-width: @{screen-large-max})";

/* Extra Large */
@extra-large: ~"(min-width: @{screen-extra-large})";

/* Retina */
@retina: ~"only screen and (-webkit-min-device-pixel-ratio: 1.5)",
~"only screen and (min--moz-device-pixel-ratio: 1.5)",
~"only screen and (-o-min-device-pixel-ratio: 3/2)",
~"only screen and (min-device-pixel-ratio: 1.5)";

/* IE Media Queries */
@ie6-7: screen\9;
@ie8: \0screen;
@oldIE: ~"@{ie8}\,@{ie6-7}";
@ie9-10: ~"screen and (min-width:0\0)";';
?>

<section id="media-queries" class="section">
	<h2 class="section-title">Media Queries</h2>
	<p>Turret uses the following media queries in LESS files to create the key breakpoints.</p>
	<pre class="language-css"><code class="language-css"><?php echo htmlentities($code); ?></code></pre>
</section>