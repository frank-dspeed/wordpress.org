<?php

namespace WP15\Meetup_Events;
defined( 'WPINC' ) || die();

/** @var array $events */

?>

<form id="wp15-events-filter">
	<label>
		<span><?php esc_html_e( 'Search events:', 'wp15' ); ?></span>
		<input id="wp15-events-query" type="text" value="" />
	</label>
</form>

<ul class="wp15-events-list">
	<?php foreach ( $events as $event ) : ?>
		<li data-location="<?php echo esc_attr( $event['location'] ); ?>">
			<h3 class="wp15-event-group">
				<?php echo esc_html( $event['group'] ); ?>
			</h3>

			<p class="wp15-event-title">
				<a href="<?php echo esc_url( $event['event_url'] ); ?>">
					<?php echo esc_html( $event['name'] ); ?>
				</a>
			</p>

			<p class="wp15-event-date-time">
				<?php echo esc_html( $event['time'] ); ?>
			</p>
		</li>
	<?php endforeach; ?>
</ul>