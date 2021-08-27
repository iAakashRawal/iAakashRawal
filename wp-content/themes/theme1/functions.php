<?php

    add_theme_support( 'menus');
    add_theme_support( 'thumbnails' );

    /*
    */
    add_action( 'init', 'mycbfn');


    function mycbfn(){

        // Navigation Menus
        register_nav_menus( array(
            'header_menu' => __( 'Primary Menu' ),
            'footer_menu' => __( 'Secondary Menu' )
        ));

        // Post types
        register_post_type('teacher',
                array(
                    'labels' => array('name' => __('Teacher')),
                    'supports' => array('title','editor','thumbnail'),
                    'public' => true,
                    'show_in_rest' => true,
                    ) 
                );
            }
        register_post_type('students',
                array(
                    'labels' => array('name' => __('students')),
                    'supports' => array('title','editor','thumbnail'),
                    'public' => true,
                    'show_in_rest' => true,
                    ) 
                );
        register_post_type('manager',
        array(
            'labels' => array('name' => __('Manager')),
            'supports' => array('title','editor','thumbnail'),
            'public' => true,
            'show_in_rest' => true,
            ) 
        );
        register_post_type('college',
        array(
            'labels' => array('name' => __('College')),
            'supports' => array('title','editor','thumbnail'),
            'public' => true,
            'show_in_rest' => true,
            ) 
        );
        register_post_type('city',
        array(
            'labels' => array('name' => __('City')),
            'supports' => array('title','editor','thumbnail'),
            'public' => true,
            'show_in_rest' => true,
            ) 
        );
        // Insert the post into the database
        if(!is_admin()){
            //Student
            if(isset($_GET['student_sbmt'])){
                $my_post = array(
                    'post_type' => 'students',
                    'post_title'    => wp_strip_all_tags( $_GET['fname'] ),
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array( 8,39 )
                );
                
                // Insert the post into the database
                wp_insert_post( $my_post );
            }

            //2. 
            if(isset($_GET['teacher_sbmt'])){
                $my_post = array(
                    'post_type' => 'teacher',
                    'post_title'    => wp_strip_all_tags( $_GET['tname'] ),
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array( 8,39 )
                );
                
                // Insert the post into the database
                wp_insert_post( $my_post );
            }
            //3. 
            if(isset($_GET['mngr_sbmt'])){
                $my_post = array(
                    'post_type' => 'manager',
                    'post_title'    => wp_strip_all_tags( $_GET['mname'] ),
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array( 8,39 )
                );
                
                // Insert the post into the database
                wp_insert_post( $my_post );
            }
            //4.
            if(isset($_GET['clg_sbmt'])){
                $my_post = array(
                    'post_type' => 'college',
                    'post_title'    => wp_strip_all_tags( $_GET['cname'] ),
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array( 8,39 )
                );
                
                // Insert the post into the database
                wp_insert_post( $my_post );
            }
                //5.
            if(isset($_GET['ct_sbmt'])){
                $my_post = array(
                    'post_type' => 'city',
                    'post_title'    => wp_strip_all_tags( $_GET['ct_name'] ),
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array( 8,39 )
                );
                
                // Insert the post into the database
                wp_insert_post( $my_post );
            }
        }  

?>