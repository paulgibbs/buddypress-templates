<?php
/**
 * Member messages
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<div class="nav-list no-ajax" id="nav-secondary" role="navigation">
	<ul>
		<?php bp_get_options_nav(); ?>

		<li id="members-order-select" class="last filter">
			<?php bp_notifications_sort_order_form(); ?>
		</li>
	</ul>
</div>

<?php
switch ( bp_current_action() ) :

	// Unread
	case 'unread' :
		bp_get_template_part( 'members/single/notifications/unread' );
		break;

	// Read
	case 'read' :
		bp_get_template_part( 'members/single/notifications/read' );
		break;

	// Any other
	default :
		bp_get_template_part( 'members/single/plugins' );
		break;
endswitch;

