/* Button "Enter more titles" that transforms <input> of "Page title:" field into <textarea>
	(this allows to submit multiple titles at the same time).
*/

// Position the cursor at the end of the input field.
function focus_input( $input ) {
	var value = $input.val();
	$input.focus().val( '' ).val( value );
}

$(function() {
	var $input = $('#crOrigTitle').find( 'input' ).first();

	if ( $input[0].tagName == "TEXTAREA" ) {
		return; // Already in multiline mode
	}

	focus_input( $input );

	$input.after( $('<input/>')
		.attr( 'type', 'button' )
		.val( mw.msg( 'createredirect-enable-multiline' ) )
		.attr( 'class', 'createredirect-multiline' )
		.click( function() {
			$(this).hide();

			$ta = $( '<textarea/>' )
				.attr( 'id', 'crOrigTitle2' )
				.attr( 'name', $input.attr( 'name' ) )
				.text( $input.val() + "\n" );

			$input.replaceWith( $ta );
			focus_input( $ta );
		} )
	);
});
