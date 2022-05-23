<div class="wrap">
    <h1>Sendinblue Email plugin settings</h1>

    <form method="post" action="options.php">
        <?php settings_fields( \Hyperion\Sendinblue\Admin\Settings::SETTINGS_GROUP ); ?>
        <?php do_settings_sections( \Hyperion\Sendinblue\Admin\Settings::SETTINGS_GROUP ); ?>
        <table class="form-table">
            <tr>
                <th scope="row">Sendinblue API Key</th>
                <td><input type="text" name="<?php echo \Hyperion\Sendinblue\Plugin::SENDINBLUE_APIKEY_OPTION; ?>" value="<?php echo esc_attr( get_option(\Hyperion\Sendinblue\Plugin::SENDINBLUE_APIKEY_OPTION) ); ?>" /></td>
            </tr>
            <tr>
                <th scope="row">Sendinblue client Key</th>
                <td><input type="text" name="<?php echo \Hyperion\Sendinblue\Plugin::SENDINBLUE_CLIENTKEY_OPTION; ?>" value="<?php echo esc_attr( get_option(\Hyperion\Sendinblue\Plugin::SENDINBLUE_CLIENTKEY_OPTION) ); ?>" /></td>
            </tr>
        </table>

        <?php submit_button(); ?>

    </form>
</div>