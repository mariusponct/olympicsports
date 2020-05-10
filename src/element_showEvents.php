<?php
require '../src/element_showEventsTitle.php';

echo '<div class="row justify-content-center text-center">'.
			'<div class="col-md-3 h6 pb-md-5  mb-md-5"';

			require 'element_showMenEvents.php';

echo		'</div>'.
			'<div class="col-md-3 h6 pb-md-5 mb-md-5"';

			require 'element_showWomenEvents.php';

echo		'</div>'.
	 '</div>';
?>