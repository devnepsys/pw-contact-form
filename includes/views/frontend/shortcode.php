<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!!' );
$pwcf_settings = get_option( 'pwcf_settings' );
?>
<form class="pwcf-form">
    <div class="pwcf-field-wrap">
        <label><?php echo (!empty( $pwcf_settings['name_field_label'] )) ? esc_html( $pwcf_settings['name_field_label'] ) : 'Your Name'; ?></label>
        <div class="pwcf-field">
            <input type="text" name="name_field"/>
        </div>
    </div>
    <div class="pwcf-field-wrap">
        <label><?php echo (!empty( $pwcf_settings['email_field_label'] )) ? esc_html( $pwcf_settings['email_field_label'] ) : 'Your email'; ?></label>
        <div class="pwcf-field">
            <input type="text" name="email_field"/>
        </div>
    </div>
    <div class="pwcf-field-wrap">
        <label><?php echo (!empty( $pwcf_settings['message_field_label'] )) ? esc_html( $pwcf_settings['message_field_label'] ) : 'Your message'; ?></label>
        <div class="pwcf-field">
            <textarea name="message"></textarea>
        </div>
    </div>
    <div class="pwcf-field-wrap">
        <label></label>
        <div class="pwcf-field">
            <input type="submit" value="<?php echo (!empty( $pwcf_settings['submit_button_label'] )) ? esc_html( $pwcf_settings['submit_button_label'] ) : 'Save Settings'; ?>"/>
        </div>
    </div>
</form>
