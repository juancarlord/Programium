var $state = $( '#state' ),
		$city = $( '#city' ),
    $options = $city.find( 'option' );
    
$state.on( 'change', function() {
	$city.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );