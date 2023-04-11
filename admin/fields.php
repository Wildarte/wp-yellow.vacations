<?php

function add_new_menu_items()
    {
        //Add um item de menu. This is a top level menu item i.e., this menu item can have sub menus
        add_menu_page(
            "Configuração Geral", //Required. esse é o título da página do menu
            "Configuração do site", //Required. Texto do menu
            "manage_options", //Required. The required capability of users to access this menu item.
            "theme-options", //Required. identificador único desse menu
            "theme_options_page", //Optional. This callback outputs the content of the page associated with this menu item.
            "", //Optional. The URL to the menu item icon.
            100 //Optional. Position of the menu item in the menu.
        );

        add_submenu_page(
            "theme-options", //Required. Slug of top level menu item
            "Redes Sociais", //Required. Text to be displayed in title.
            "Redes sociais", //Required. Text to be displayed in menu.
            "manage_options", //Required. The required capability of users.
            "options_atendimento", //Required. A unique identifier to the sub menu item.
            "atendimento_options_page", //Optional. This callback outputs the content of the page associated with this menu item.
            "" //Optional. The URL of the menu item icon
        );

    }
    add_action("admin_menu", "add_new_menu_items");

    function theme_options_page()
    {
        ?>
        <div class="wrap">
            <div id="icon-options-general" class="icon32"></div><!-- run the settings_errors() function here. -->
            <?php settings_errors(); ?>
            <h1>Configurações Gerais do Site</h1>
            <form method="post" action="options.php">
                <?php
               
                    //add_settings_section callback is displayed here. For every new section we need to call settings_fields.
                    settings_fields("header_section");
                   
                    // all the add_settings_field callbacks is displayed here
                    do_settings_sections("theme-options");
               
                    // Add the submit button to serialize the options
                    //submit_button();
                   
                ?>         
            </form>
        </div>

        <?php
        
    }

    function atendimento_options_page(){
        ?>

        <div class="wrap">
            <div id="icon-options-general" class="icon32"></div><!-- run the settings_errors() function here. -->
            <?php settings_errors(); ?>
            <h1>Redes Sociais</h1>
            <form method="post" action="options.php">
                <?php
               
                    //add_settings_section callback is displayed here. For every new section we need to call settings_fields.
                    settings_fields("atendimento_section");
                   
                    // all the add_settings_field callbacks is displayed here
                    do_settings_sections("options_atendimento");
               
                    // Add the submit button to serialize the options
                    submit_button();
                   
                ?>         
            </form>
        </div>

        <?php

    }


    function display_options(){

        add_settings_section("atendimento_section", "Redes sociais do Portal", "display_option_header_atendimento", "options_atendimento");

        add_settings_field("facebook_empresa", "Facebook", "display_input_facebook", "options_atendimento", "atendimento_section");
        add_settings_field("linkedin_empresa", "Linkedin", "display_input_linkedin", "options_atendimento", "atendimento_section");
        add_settings_field("instagram_empresa", "Instagram", "display_input_instagram", "options_atendimento", "atendimento_section");
        add_settings_field("twitter_empresa", "Twitter", "display_input_twitter", "options_atendimento", "atendimento_section");
        add_settings_field("youtube_empresa", "YouTube", "display_input_youtube", "options_atendimento", "atendimento_section");
        //add_settings_field("whatsapp_empresa", "whatsapp", "display_input_whatsapp", "options_atendimento", "atendimento_section");
        add_settings_field("tiktok_empresa", "tiktok", "display_input_tiktok", "options_atendimento", "atendimento_section");

        register_setting("atendimento_section", "facebook_empresa");
        register_setting("atendimento_section", "linkedin_empresa");
        register_setting("atendimento_section", "instagram_empresa");
        register_setting("atendimento_section", "twitter_empresa");
        register_setting("atendimento_section", "youtube_empresa");
        //register_setting("atendimento_section", "whatsapp_empresa");
        register_setting("atendimento_section", "tiktok_empresa");
    }

    function display_option_header_atendimento(){
        echo "Coloque aqui as redes sociais do Portal";
    }

    function display_input_facebook(){
        ?>
            <input type="url" name="facebook_empresa" id="facebook_empresa" value="<?= get_option('facebook_empresa'); ?>">
            <small>Coloque aqui o facebook da empresa</small>
        <?php
    }
    function display_input_linkedin(){
        ?>
            <input type="url" name="linkedin_empresa" id="linkedin_empresa" value="<?= get_option('linkedin_empresa'); ?>">
            <small>Coloque aqui o linkedin da empresa</small>
        <?php
    }
    function display_input_instagram(){
        ?>
            <input type="url" name="instagram_empresa" id="instagram_empresa" value="<?= get_option('instagram_empresa'); ?>">
            <small>Coloque aqui o instagram da empresa</small>
        <?php
    }
    function display_input_twitter(){
        ?>
            <input type="url" name="twitter_empresa" id="twitter_empresa" value="<?= get_option('twitter_empresa'); ?>">
            <small>Coloque aqui o Twitter da empresa</small>
        <?php
    }
    function display_input_youtube(){
        ?>
            <input type="url" name="youtube_empresa" id="youtube_empresa" value="<?= get_option('youtube_empresa'); ?>">
            <small>Coloque aqui o YouTube da empresa</small>
        <?php
    }
    /*
    function display_input_whatsapp(){
        ?>
            <input type="url" name="whatsapp_empresa" id="whatsapp_empresa" value="<?= get_option('whatsapp_empresa'); ?>">
            <small>Coloque aqui o whatsapp da empresa</small>
        <?php
    }
    */
    function display_input_tiktok(){
        ?>
            <input type="url" name="tiktok_empresa" id="tiktok_empresa" value="<?= get_option('tiktok_empresa'); ?>">
            <small>Coloque aqui o tiktok da empresa</small>
        <?php
    }

    add_action("admin_init", "display_options");