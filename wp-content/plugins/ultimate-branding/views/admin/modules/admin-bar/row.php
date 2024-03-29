<div class="sui-builder-field" data-nonce="<?php echo esc_attr( $nonce ); ?>" data-id="<?php echo esc_attr( $id ); ?>">
	<div class="sui-builder-field-label"><?php
	$is_url = filter_var( $title , FILTER_VALIDATE_URL );
	if ( $is_url ) {
		printf(
			'<img src="%s" class="branda-image" title="%s" />',
			esc_url( $title ),
			esc_attr( $title )
		);
	} else {
		if ( ! empty( $icon ) ) {
			printf( '<span class="dashicons dashicons-%s"></span>', esc_attr( $icon ) );
		}
		echo esc_attr( $title );
	}
?></div>
	<div class="sui-button-icon sui-button-red sui-hover-show">
		<i class="sui-icon-trash" aria-hidden="true" data-a11y-dialog-show="<?php echo esc_attr( $this->get_name( 'delete' ) ); ?>"></i>
		<span class="sui-screen-reader-text"><?php esc_html_e( 'Remove item', 'ub' ); ?></span>
	</div>
	<span class="sui-builder-field-border sui-hover-show" aria-hidden="true"></span>
	<div class="sui-button-icon">
		<i class="sui-icon-widget-settings-config" aria-hidden="true" data-a11y-dialog-show="<?php echo esc_attr( $this->get_name( 'edit' ) ); ?>"></i>
	</div>
</div>
