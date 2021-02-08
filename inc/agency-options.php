<?php

if(class_exists('CSF')){

    $prefix = 'agency_options';

    CSF::createOptions($prefix, array(
        'menu_title' => __('agency Options', 'agency'),
        'menu_slug' => 'agency-options',
        'framework_title' => 'Agency Options - <small>Masum Billah</small>',
        'menu_parent' => 'themes.php',
        'menu_type' => 'submenu'
    ));

    // Header Options
    CSF::createSection($prefix, array(
        'id' => 'header_options',
        'title' => 'Header Options',
        'icon' => 'fas fa-address-card'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_options',
        'title' => __('Header Left', 'agency'),
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'header_email',
                'type' => 'text',
                'title' => __('Email Address', 'agency')
            ),
            array(
                'id' => 'header_phone',
                'type' => 'text',
                'title' => __('Phone Number', 'agency')
            )
        )

    ));

    CSF::createSection($prefix, array(
        'title' => 'Header Icons',
        'parent' => 'header_options',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'header_icons',
                'title'=> __('Header Icons', 'agency'),
                'type' => 'group',
                'button_title' => __('Add New Social Box', 'agency'),
                'fields' => array(
                    array(
                        'id' => __('social_title', 'agency'),
                        'type' => 'text',
                        'title' => 'Social Title'
                    ),
                    array(
                        'id' => 'social_link',
                        'type' => 'text',
                        'title' => __('Social Link', 'agency')
                    ),
                    array(
                        'id' => 'social_icon',
                        'type' => 'icon',
                        'title' => __('Social Icon', 'agency')
                    )
                )
            )
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_options',
        'title' => 'Logo',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'logo',
                'type' => 'media',
                'title' => __('Upload Logo', 'agency')
            ),
            array(
                'id' => 'favicon',
                'type' => 'media',
                'title' => __('Upload Favicon', 'agency')
            )
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_options',
        'icon' => 'fas fa-arrow-right',
        'title' => __('Header Styleing', 'agency'),
        'fields' => array(
            array(
                'id' => 'header_background',
                'type' => 'background',
                'title' => __('Header Background Color / Image', 'agency'),
                'output' => array('.header-top')
            ),
            array(
                'id' => 'header_color',
                'type' => 'color',
                'title' => __('Header Color', 'agency'),
                'output' => array('.header-top a')
            ),
            array(
                'id' => 'header_typography',
                'type' => 'typography',
                'title' => __('Header Typography', 'agency'),
                'output' => array('.header-top a')
            ),
            array(
                'id' => 'header__link_hover',
                'type' => 'color',
                'title' => __('Header Link Hover', 'agency'),
                'output' => array('.header-top a:hover')
            )
        )
    ));

    // About Options
    CSF::createSection($prefix, array(
        'id' => 'about_options',
        'title' => __('About Section', 'agency'),
        'icon' => 'fas fa-arrow-right',
    ));

    // About Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => __('About Section Title', 'agency'),
        'fields' => array(
            array(
                'id' => 'about_sec_subtitle',
                'title' => __('Sub Title', 'agency'),
                'type' => 'text',
                'desc' => __('Write About Section Subtitle Here', 'agency')
            ),
            array(
                'id' => 'about_sec_title',
                'title' => __('Title', 'agency'),
                'type' => 'text'
            ),
            array(
                'id' => 'about_sec_des',
                'title' => __('Description', 'agency'),
                'type' => 'textarea'
            )
        )
    ));

    // About Page Content
    CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => __('About Page Content', 'agency'),
        'fields' => array(
            array(
                'id' => 'about_page_title',
                'title' => __('Title', 'agency'),
                'type' => 'text',
                'desc' => __('Write About Page Title Here', 'agency')
            ),
            array(
                'id' => 'about_page_desc',
                'title' => __('About Page Description', 'agency'),
                'type' => 'textarea'
            ),
            array(
                'id' => 'about_page_btn',
                'title' => __('About Page Link', 'agency'),
                'type' => 'text'
            )
        )
    ));

     // About Page Features
     CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => __('About Page Features', 'agency'),
        'fields' => array(
            array(
                'id' => 'about_page_features',
                'title' => __('About Features', 'agency'),
                'type' => 'group',
                'button_title' => __('Add New Feature', 'agency'),
                'desc' => __('Write About Page Title Here', 'agency'),
                'fields' => array(
                    array(
                        'id' => 'features_title',
                        'title' => __('About Feature Title', 'agency'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'features_icon',
                        'title' => __('About Feature Icon', 'agency'),
                        'type' => 'icon'
                    ),
                    array(
                        'id' => 'features_des',
                        'title' => __('About Feature Description', 'agency'),
                        'type' => 'textarea'
                    )
                )
            )
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'about_options',
        'title' => __('About FAQ', 'agency'),
        'fields' => array(
            array(
                'id' => 'about_faq_list',
                'title' => __('About Faq', 'agency'),
                'type' => 'group',
                'button_title' => __('Add New FAQ', 'agency'),
                'fields' => array(
                    array(
                        'id' => 'faq_title',
                        'title' => __('Faq Title', 'agency'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'faq_des',
                        'title' => __('Faq Description', 'agency'),
                        'type' => 'textarea'
                    )
                )
            )
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'about_options',
        'title' => __('About Skills', 'agency'),
        'fields' => array(
            array(
                'id' => 'about_skills_list',
                'title' => __('About Skills', 'agency'),
                'type' => 'group',
                'button_title' => __('Add New Skill', 'agency'),
                'fields' => array(
                    array(
                        'id' => 'skill_title',
                        'title' => __('Skill Title', 'agency'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'skill_number',
                        'title' => __('Skill Number', 'agency'),
                        'type' => 'text'
                    )
                )
            )
        )
    ));

    // Counter Options

    CSF::createSection($prefix, array(
        'id' => 'counter_options',
        'title' => __('Counter Options'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'counter_lists',
                'title' => __('Counter Lists'),
                'type' => 'group',
                'button_title' => __('Add New Counter'),
                'fields' => array(
                    array(
                        'id' => 'counter_title',
                        'type' => 'text',
                        'title' => __('Counter Title')
                    ),
                    array(
                        'id' => 'counter_number',
                        'type' => 'number',
                        'title' => __('Counter Number')
                    ),
                    array(
                        'id' => 'counter_icon',
                        'type' => 'icon',
                        'title' => __('Counter Icon')
                    ),
                )
            )
        )
    ));

    // CTA Options

    CSF::createSection($prefix, array(
        'id' => 'cta_options',
        'title' => __('CTA Options'),
        'icon' => 'fas fa-bullhorn',
        'fields' => array(
            array(
                'id' => 'cta_switch',
                'type' => 'switcher',
                'title' => __('Show CTA?', 'agency'),
                'default' => true
            ),
            array(
                'id' => 'cta_title',
                'type'=> 'text',
                'title' => __('CTA Title', 'agency'),
                'default' => __('best solution for your business', 'agency'),
                'help' => __('Write CTA Title Here', 'agency'),
                'dependency' => array('cta_switch', '==', 'true')
            ),
            array(
                'id' => 'cta_subtitle',
                'type'=> 'textarea',
                'title' => __('CTA SubTitle', 'agency'),
                'default' => __('the can be used on larger scale projectss as well as small scale projectss', 'agency'),
                'dependency' => array('cta_switch', '==', 'true')
            ),
            array(
                'id' => 'cta_btn_txt',
                'type'=> 'text',
                'title' => __('CTA Button Text', 'agency'),
                'default' => __('contact us', 'agency'),
                'dependency' => array('cta_switch', '==', 'true')
            ),
            array(
                'id' => 'cta_btn_url',
                'type'=> 'text',
                'title' => __('CTA Button Url', 'agency'),
                'default' => 'https://www.google.com',
                'dependency' => array('cta_switch', '==', 'true')
            )
        )
    ));

    // Contact Options
    CSF::createSection($prefix, array(
        'id' => 'contact_options',
        'title' => __('Contact Options', 'agency'),
        'icon' => 'fas fa-bullhorn',
        'fields' => array(
            array(
                'id' => 'contact_info',
                'title' => __('Contact Info', 'agency'),
                'type' => 'group',
                'button_title' => __('Add New Concatc Items', 'agency'),
                'fields' => array(
                    array(
                        'id' => 'contact_info_title',
                        'type' => 'text',
                        'title' => __('Contact Info Title', 'agency')
                    ),
                    array(
                        'id' => 'contact_info_icon',
                        'type' => 'icon',
                        'title' => __('Contact Info Icon', 'agency')
                    ),
                    array(
                        'id' => 'contact_info_des',
                        'type' => 'text',
                        'title' => __('Contact Info Description', 'agency')
                    )
                )
            ),
            array(
                'id' => 'contact_map',
                'type' => 'map',
                'title' => __('Contact Map', 'agency')
            )

        )
    ));


    // Footer Options
    CSF::createSection($prefix, array(
        'id' => 'footer_options',
        'title' => __('Footer Options', 'agency'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'footer_text',
                'type' => 'text',
                'title' => __('Copyright Text' , 'agency'),
                'default' => __('&copy; All Rights Reserved 2020' ,'agency')
            ),
            array(
                'id' => 'footer_social',
                'type' => 'group',
                'title' => __('Footer Social Links', 'agency'),
                'button_title' => __('Add New Link', 'agency'),
                'fields' => array(
                    array(
                        'id' => 'footer_social_title',
                        'type' => 'text',
                        'title' => __('Footer Link Title', 'agency')
                    ),
                    array(
                        'id' => 'footer_social_icon',
                        'type' => 'icon',
                        'title' => __('Footer Link Icon', 'agency')
                    ),
                    array(
                        'id' => 'footer_social_url',
                        'type' => 'text',
                        'title' => __('Footer Link URL', 'agency')
                    )
                )
            ),
            array(
                'id' => 'footer_link_target',
                'type' => 'select',
                'title' => __('Select Link Target', 'agency'),
                'options' => array(
                    '_self' => __('Open in Same Tab', 'agency'),
                    '_blank' => __('Open in New Tab', 'agency'),
                    '_window' => __('Open in New Window', 'agency'),
                ),
                'default' => '_blank'
            )
        )
    ));

}