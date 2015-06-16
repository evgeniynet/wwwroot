<?php
/*
Plugin Name: Iframely
Plugin URI: http://wordpress.org/plugins/iframely/
Description: Iframely for WordPress. Embed anything, with responsive widgets.
Author: Itteco Corp.
Version: 0.2.6
Author URI: https://iframely.com/?from=wp
*/

# Define iframely plugin path
if ( !defined( 'IFRAMELY_URL' ) ) {
  define( 'IFRAMELY_URL', WP_PLUGIN_URL.'/iframely' );
}

# Always add Iframely as provider. Last to the list. If not 'only_shortcode', then this provider will disable all default ones

# Add iframely as oembed provider for ANY url, yes it will process any url on separate line with wp oembed functions
wp_oembed_add_provider( '#https?://[^\s]+#i', iframely_create_api_link(), true );

# Make the Iframely endpoint to be the first in queue, otherwise default regexp are precedent
add_filter( 'oembed_providers', 'maybe_reverse_oembed_providers');

# Always add iframely as oembed provider for any iframe.ly short link
wp_oembed_add_provider( '#https?://iframe\.ly/.+#i', iframely_create_api_link(), true );

function maybe_reverse_oembed_providers ($providers) {

    # iframely_only_shortcode option is unset in shortcode, so that the filter can work. Then returned back.
    if ( !get_site_option( 'iframely_only_shortcode' ) ) {
        return array_reverse($providers);
    }
    else {
        return $providers;
    }
}

# Register [iframely] shortcode
add_shortcode( 'iframely', 'embed_iframely' );

# Function to process content in iframely shortcode, ex: [iframely]http://anything[/iframely]
function embed_iframely( $atts, $content = '' ) {

    # Read url from 'url' attribute if not empty
    if ( !empty( $atts['url'] ) ) $content = $atts['url'];
    $content = str_replace( '&#038;', '&amp;', trim( $content ) );
    $content = str_replace( '&amp;', '&', $content );

    # Get global WP_Embed class, to use 'shortcode' method from it
    global $wp_embed;

    # With API key we can use iframely as provider for any url inside our shortcode
    # Add handler, if it wasn't added before
    $only_shortcode_before = get_site_option( 'iframely_only_shortcode' );

    if ($only_shortcode_before) {
        iframely_update_option('iframely_only_shortcode', null);
    }

    # Get embed code for the url using internal wp embed object (it cache results for the post automatically)
    $code = $wp_embed->shortcode( $atts, $content );

    # return only_shortcode option to what it was before
    if ($only_shortcode_before) {
        iframely_update_option('iframely_only_shortcode', $only_shortcode_before);
    }

    # Return code to embed for the url inside shortcode
    return $code;
}

# Create link to iframely API backend
function iframely_create_api_link () {

    # Read url of the current blog
    $blog_name = preg_replace( '#^https?://#i', '', get_bloginfo( 'url' ) );
    # Read API key from plugin options
    $api_key = trim( get_site_option( 'iframely_api_key' ) );

    $link = $api_key ? 'http://iframe.ly/api/oembed?origin=' . $blog_name : 'http://open.iframe.ly/api/oembed?origin=' . $blog_name;

    # Append API key
    if ( $api_key ) {
        $link .= '&api_key=' . $api_key;
    }

    return $link;
}

# Create oembed link, to be included into page's head of individual posts
function iframely_publish_oembed_links () {

    if ( is_single() ) {

        $publish = get_site_option( 'iframely_publish' );

        if ($publish) {

            $promo = get_site_option( 'iframely_promo' );

            $oembed_link = iframely_create_api_link ();
            $page_url = urlencode( get_permalink () );

            if ($promo) $oembed_link .= "&promo=true";
            $oembed_link .= "&url=";

            echo '<link rel="alternate" type="application/json+oembed" href="' . $oembed_link . $page_url . '" />' . "\n";
            echo '<link rel="alternate" type="application/json+xml" href="' . $oembed_link . $page_url . "&format=xml". '" />' . "\n";
        }
    }
}
# Add oembed publishing hook
add_action( 'wp_head', 'iframely_publish_oembed_links' );


# Create iframely settings menu for admin
add_action( 'admin_menu', 'iframely_create_menu' );
add_action( 'network_admin_menu', 'iframely_network_admin_create_menu' );

# Create link to plugin options page from plugins list
function iframely_plugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=iframely_settings_page">Settings</a>';
    array_push( $links, $settings_link );
    return $links;
}

$iframely_plugin_basename = plugin_basename( __FILE__ );
add_filter( 'plugin_action_links_' . $iframely_plugin_basename, 'iframely_plugin_add_settings_link' );

# Create new top level menu for sites
function iframely_create_menu() {
    add_menu_page('Iframely Options', 'Iframely', 'install_plugins', 'iframely_settings_page', 'iframely_settings_page');
}

# Create new top level menu for network admin
function iframely_network_admin_create_menu() {
    add_menu_page('Iframely Options', 'Iframely', 'manage_options', 'iframely_settings_page', 'iframely_settings_page');
}


function iframely_update_option($name, $value) {
    return is_multisite() ? update_site_option($name, $value) : update_option($name, $value);
}

function iframely_settings_page() {

?>

    <style type="text/css">
        .iframely_options_page ul {
            list-style: disc;
            padding-left: 40px;
        }
    </style>

<div class="wrap iframely_options_page">

<h1>How to use Iframely</h1>

<p>Iframely will take URL in your post and replace it with (responsive, if possible) embed code. We cover well over 1600 domains. Plus summary cards for other URLs. <a href="https://iframely.com/domains" target="_blank">See examples</a>.</p>

<ul>
<li><p><strong>URL on a separate line</strong></p></li>
<li><p><strong>With shortcode</strong>: <code>[iframely]http://iframe.ly/bFkV[/iframely]</code></p></li>
</ul>


<p><em>Note</em>: Some people expect Iframely to wrap URLs with <code>&lt;iframe src=...&gt;</code> code. That's not what Iframely is for. It converts original URLs into native embed codes itself.</p>
<p></br></p>

<form method="post" action="">

<h1>Configure Your Options</h1>

    <?php

        if (isset($_POST['_wpnonce']) && isset($_POST['submit'])) {

            iframely_update_option('iframely_api_key', trim($_POST['iframely_api_key']));
            iframely_update_option('iframely_only_shortcode', (isset($_POST['iframely_only_shortcode'])) ? (int)$_POST['iframely_only_shortcode'] : null);
            iframely_update_option('iframely_publish', (isset($_POST['iframely_publish'])) ? (int)$_POST['iframely_publish'] : null);
            iframely_update_option('iframely_promo', (isset($_POST['iframely_promo'])) ? (int)$_POST['iframely_promo'] : null);

        }

        wp_nonce_field('form-settings');
    ?>

    <ul>
        <li>
            <p>Your <strong>optional</strong> Iframely API Key: </p>
            <p><input type="text" style="width: 250px;" name="iframely_api_key" value="<?php echo get_site_option('iframely_api_key'); ?>" /></p>
            <p> Again: it is <strong>optional</strong>. If you have an account with us though, you'll be able to use our hosted iFrames beyond summary cards. Also, you'd get to configure your APIs. </br>
            You can get your <a href="https://iframely.com/signup" target="_blank">API key here</a>. Or just leave it empty.</p>
        </li>

        <li>
            <p><input type="checkbox" name="iframely_only_shortcode" value="1" <?php if (get_site_option('iframely_only_shortcode')) { ?> checked="checked" <?php } ?> /> Do not override default embed providers</p>
            <p>It will block Iframely from intercepting all URLs in your editor that may be covered by other embeds plugins you have installed, e.g. a Jetpack. or default embeds supported by WordPress.<br>
            Although, we should support the same providers and output the same code, just make it responsive.</p>
        </li>
                
    </ul>

<p></br></p>
<h1>Publish Embeds</h1>

<p>You can become embeds publisher with Iframely's <a href="https://iframely.com/embed" target="_blank">summary cards</a> or promo cards.
It will let other sites, for example any other WordPress blog have a card link to your page.
<br>The settings below adds proper embed discovery link into your page's meta. To present give embeds to your visitor for manual copy-paste, use <a href="https://iframely.com/docs/embed-dialog" target="_blank">Embed Dialog</a>.</p>
<p><em>Note</em>: <a href="https://iframely.com/docs/promo-cards" target="_blank">Promo cards</a> let you modify call-to-action any time and require a <a href="https://iframely.com/plans" target="_blank">paid Iframely</a> account and an API key. 
<br>Check how cards would look like for your website here: <a href="https://iframely.com/publish" target="_blank">iframely.com/publish</a></p>
<p></br></p>

    <ul>
        <li>
            <p><input type="checkbox" name="iframely_publish" value="1" <?php if (get_site_option('iframely_publish')) { ?> checked="checked" <?php } ?> /> Yes, let's publish embeds discovery link</p>
        </li>

        <li>
            <p><input type="checkbox" name="iframely_promo" value="1" <?php if (get_site_option('iframely_promo')) { ?> checked="checked" <?php } ?> /> Upgrade it to <a href="https://iframely.com/publish" target="_blank">promo cards</a></p>
            <p>To add media from your post to promo card, configure it on iframely.com/settings.
        </li>
                
    </ul>
    
    <?php submit_button(); ?>
    
</form>
<script type="text/javascript">
    jQuery( '.iframely_options_page form' ).submit( function() {
        var $api_key_input = jQuery(this).find('[name="iframely_api_key"]');
        var $promo = jQuery(this).find('[name="iframely_promo"]');

        function showError () {

            $api_key_input_container = $api_key_input.parent();
            $api_key_input_container.find('.iframely_options_page_error').remove();
            $api_key_input_container.prepend(jQuery('<div style="color: red" class="iframely_options_page_error">Oops, invalid API Key provided.</div>').fadeIn());
        }

        if (!$api_key_input.val().length && !$promo.is(':checked')) {
            return true;
        } else if (!$api_key_input.val().length && $promo.is(':checked')) {
            showError();
            return false;
        }

        var origin = "<?php print( preg_replace( '#^https?://#i', '', get_bloginfo( 'url' ) ) )?>";

        // CHECK HTTPS
        var url = location.protocol + "//iframe.ly/api/oembed?api_key=" + $api_key_input.val() + "&url=https://chrome.google.com/webstore/detail/oajehffbidgccdedglcogjoolbdmpjmm&origin=" + origin;
        var api_key_check = true;
        jQuery.ajax({
            url: url,
            error: function() {
                showError();
                api_key_check = false;
            },
            async: false
        });

        if (!api_key_check) return false;
    });
</script>
</div>
<?php } ?>