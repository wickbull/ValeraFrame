<?php 

	function ckeditor( $war )
	{

		echo '
			<script>
                CKEDITOR.replace( ' . $war . ' );
            </script>';

	}