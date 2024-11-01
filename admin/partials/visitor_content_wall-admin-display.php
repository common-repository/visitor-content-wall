<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://creativepatriot.org
 * @since      1.0.0
 *
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php $animationValue = get_option( 'vcw-animation-type' );  ?>

<h2>Visitor Content Wall Options</h2>
<p><strong>Add Shortcode:</strong> [visitor-content-wall] <br> Add the shortcode to any posts you want to block visitors that are not signed up for your site.</p>
<?php if ( get_transient( 'vcw_success' )): ?>
    <div class="notice notice-success is-dismissble">
        <?php echo esc_html(get_transient( 'vcw_success' )); ?>
    </div>
    <?php endif; ?>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <div>
        <label for="">Change Message</label>
    </div>
    <div>
        <textarea  name="msg" id="" cols="30" rows="5"><?php echo esc_html(get_option('vcw-msg')) ?></textarea>
    </div>
    <div>
        <label for="">Background Color:</label>
        <input type="color" name="bg-color" value="<?php echo esc_html(get_option('vcw-bgcolor')) ?>">
    </div>
    <div>
        <label for="">Text Color:</label>
        <input type="color" name="txt-color" value="<?php echo esc_html(get_option('vcw-txtcolor')) ?>">
    </div>
    <div>
        <label for="">Animation Type:</label>
        <select name="animation_type" id="">
            <option <?php if ($animationValue == "scale-up-center") echo esc_html("selected='selected'");  ?>  value="scale-up-center">scale-up-center</option>
            <option <?php if ($animationValue == "scale-up-top") echo esc_html("selected='selected'");  ?> value="scale-up-top">scale-up-top</option>
            <option <?php if ($animationValue == "scale-up-bottom") echo esc_html("selected='selected'");  ?> value="scale-up-bottom">'scale-up-bottom</option>
            <option <?php if ($animationValue == "slide-top") echo esc_html("selected='selected'");  ?> value="slide-top">slide-top</option>
            <option <?php if ($animationValue == "slide-bottom") echo esc_html("selected='selected'");  ?> value="slide-bottom">Slide Bottom</option>
            <option <?php if ($animationValue == "jello-horizontal") echo esc_html("selected='selected'");  ?> value="jello-horizontal">Jello Horizontal</option>
            <option <?php if ($animationValue == "jello-vertical") echo esc_html("selected='selected'");  ?> value="jello-vertical">Jello Vertical</option>
            <option <?php if ($animationValue == "jello-diagonal") echo esc_html("selected='selected'");  ?> value="jello-diagonal">Jello Diagonal</option>
            <option <?php if ($animationValue == "rotate-top") echo esc_html("selected='selected'");  ?> value="rotate-top">Rotate Top</option>
            <option <?php if ($animationValue == "rotate-scale-up") echo esc_html("selected='selected'");  ?> value="rotate-scale-up">Rotate Scale Up</option>
            <option <?php if ($animationValue == "blur-in") echo esc_html("selected='selected'");  ?> value="blur-in">Blur In</option>
            <option <?php if ($animationValue == "bounce-top") echo esc_html("selected='selected'");  ?> value="bounce-top">Bounce Top</option>
        </select>
    </div>
    <input type="hidden" name="action" value="save_settings">
    <input type="submit" class="button"  value="Submit" />
</form>