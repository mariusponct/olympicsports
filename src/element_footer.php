<?php
echo <<<EOL
<div class="footer fixed-bottom w-100">
	<svg viewBox="0 0 1000 50">
	   	<g>
	   	  <image x="0" y="0" width="100%" stroke="transparent" xlink:href="images/svg/footer_shape.svg" />
	   	</g>
	   	<g>
EOL;
echo		'<text x="790" y="40" font-size="10px" fill="#3aafa9" >© '. date("Y"). ' Ionut&Marius | All rights reserved</text>';
echo <<<EOL
	   	</g>
	</svg>
</div>
EOL;
?>