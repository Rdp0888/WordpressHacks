// Check the dependent plugins
add_action('admin_notices', "displayPluginDeactivationNotice");

function displayPluginDeactivationNotice()
{
    // Dependent plugins
    $dependent_plugins = array(
        "WooCommerce" => "woocommerce/woocommerce.php",
        "Another Wordpress Classifieds Plugin" => 'another-wordpress-classifieds-plugin/awpcp.php',
        "Dokan" => 'dokan/dokan.php',
        "Paid Membership Pro" => 'paid-memberships-pro/paid-memberships-pro.php',
        "Mymber" => "mymber-backend/mymber-backend.php",
        "Quick Paypal Payments" => "quick-paypal-payments/quick-paypal-payments.php"
        );

    $deactivate = false;
    // Check if a dependent plugin is deactivated
    foreach ($dependent_plugins as $key => $value) {
        if (!in_array($value, apply_filters('active_plugins', get_option('active_plugins')))) {
            $class = 'notice notice-error';
            $message = sprintf(__('The <b>Multi Level Marketing plugin</b> requires <b>%s</b> to work properly. Please activate it first. Thank You.', 'wdm-mlm'), $key);
            printf('<div class="%1$s"><p>%2$s</p></div>', $class, $message);
            $deactivate = true;
        }
    }

    // Check if any dependent plugin is deactivated
    if ($deactivate) {
        // Deactivate plugin
        deactivate_plugins(plugin_basename(__FILE__));
    } else {
        // Activate Plugin
        mlmActivatePlugin();
        register_activation_hook(__FILE__, 'createDatabase');
    }
}
