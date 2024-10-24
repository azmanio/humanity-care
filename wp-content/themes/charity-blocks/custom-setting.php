<?php 

function charity_blocks_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'charity-blocks-theme-settings', // Menu slug
        'charity_blocks_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'charity_blocks_add_admin_menu' );

function charity_blocks_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'charity-blocks' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'charity_blocks_settings_group' );
            do_settings_sections( 'charity-blocks-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function charity_blocks_register_settings() {
    register_setting( 'charity_blocks_settings_group', 'charity_blocks_enable_animations' );

    add_settings_section(
        'charity_blocks_settings_section',
        __( 'Animation Settings', 'charity-blocks' ),
        null,
        'charity-blocks-theme-settings'
    );

    add_settings_field(
        'charity_blocks_enable_animations',
        __( 'Enable Animations', 'charity-blocks' ),
        'charity_blocks_enable_animations_callback',
        'charity-blocks-theme-settings',
        'charity_blocks_settings_section'
    );
}
add_action( 'admin_init', 'charity_blocks_register_settings' );

function charity_blocks_enable_animations_callback() {
    $checked = get_option( 'charity_blocks_enable_animations', true );
    ?>
    <input type="checkbox" name="charity_blocks_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

