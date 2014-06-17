<div class="wrap">
    <h2>Mixitup Options</h2>

    <form method="post" action="options.php">
        <?php settings_fields('mixit-options-group'); ?>
        <?php do_settings_sections('mixit-options-group'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">New Option Name</th>
                <td><input type="text" name="new_option_name" value="<?php echo get_option('new_option_name'); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">Some Other Option</th>
                <td><input type="text" name="some_other_option" value="<?php echo get_option('some_other_option'); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">Options, Etc.</th>
                <td><input type="text" name="option_etc" value="<?php echo get_option('option_etc'); ?>" /></td>
            </tr>
        </table>

        <?php submit_button(); ?>

    </form>
</div>