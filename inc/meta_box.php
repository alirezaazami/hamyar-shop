<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
                                  'key' => 'group_607b352316adc',
                                  'title' => 'contact us',
                                  'fields' => array(
                                      array(
                                          'key' => 'field_607b358207ec2',
                                          'label' => 'google map',
                                          'name' => 'google_map',
                                          'type' => 'text',
                                          'instructions' => '',
                                          'required' => 1,
                                          'conditional_logic' => 0,
                                          'wrapper' => array(
                                              'width' => '',
                                              'class' => '',
                                              'id' => '',
                                          ),
                                          'default_value' => '',
                                          'placeholder' => '',
                                          'prepend' => '',
                                          'append' => '',
                                          'maxlength' => '',
                                      ),
                                      array(
                                          'key' => 'field_607b359d07ec3',
                                          'label' => 'contact with manager',
                                          'name' => 'contact_with_manager',
                                          'type' => 'wysiwyg',
                                          'instructions' => '',
                                          'required' => 0,
                                          'conditional_logic' => 0,
                                          'wrapper' => array(
                                              'width' => '',
                                              'class' => '',
                                              'id' => '',
                                          ),
                                          'default_value' => '',
                                          'tabs' => 'all',
                                          'toolbar' => 'full',
                                          'media_upload' => 0,
                                          'delay' => 0,
                                      ),
                                      array(
                                          'key' => 'field_607b35bc07ec4',
                                          'label' => 'contact with customer section',
                                          'name' => 'contact_with_customer_section',
                                          'type' => 'wysiwyg',
                                          'instructions' => '',
                                          'required' => 0,
                                          'conditional_logic' => 0,
                                          'wrapper' => array(
                                              'width' => '',
                                              'class' => '',
                                              'id' => '',
                                          ),
                                          'default_value' => '',
                                          'tabs' => 'all',
                                          'toolbar' => 'full',
                                          'media_upload' => 1,
                                          'delay' => 0,
                                      ),
                                  ),
                                  'location' => array(
                                      array(
                                          array(
                                              'param' => 'page_template',
                                              'operator' => '==',
                                              'value' => 'templates/contact.php',
                                          ),
                                      ),
                                  ),
                                  'menu_order' => 0,
                                  'position' => 'normal',
                                  'style' => 'default',
                                  'label_placement' => 'top',
                                  'instruction_placement' => 'label',
                                  'hide_on_screen' => array(
                                      0 => 'the_content',
                                      1 => 'excerpt',
                                      2 => 'discussion',
                                      3 => 'comments',
                                      4 => 'revisions',
                                      5 => 'author',
                                      6 => 'format',
                                      7 => 'featured_image',
                                      8 => 'categories',
                                      9 => 'tags',
                                      10 => 'send-trackbacks',
                                  ),
                                  'active' => true,
                                  'description' => '',
                              ));

endif;