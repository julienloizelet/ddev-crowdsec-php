<?php
/**
 * #ddev-generated
 * ddev manages this file and may delete or overwrite it unless the above line is removed.
 * This file comes from "ddev get julienloizelet/ddev-crowdsec-php"
 *
 */
/**
 * This script is aimed to test image upload
 * @see https://gist.github.com/wpscholar/7309412
 *
 */
// Make sure required $_FILES values are set before trying to load WordPress
if ( isset( $_FILES['file'] ) ) {

    // Load WordPress
    require( strstr( dirname( __FILE__ ), 'wp-content', true ) . 'wp-load.php' );

    // Load additional required files since we did a short init

    require( ABSPATH . 'wp-admin/includes/media.php' ); // Required to use the media_handle_upload() function
    require( ABSPATH . 'wp-admin/includes/image.php' ); // Required to use the wp_read_image_metadata() function
    require( ABSPATH . 'wp-admin/includes/file.php' ); // Required to use the wp_handle_upload() function

    // Define WP_CONTENT_URL to avoid PHP notice
    if ( ! defined( 'WP_CONTENT_URL' ) ) {
        define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
    }

    /**
     * Class Redactor_Image_Upload_For_WordPress
     */
    class Redactor_Image_Upload_For_WordPress {

        /**
         * Handles the upload if a file is available and is of the correct mime type.  On success, a JSON object is
         * returned to Redactor containing the image URL.
         */
        public function __construct ( $file_handle ) {
            $url = $this->upload_image( $file_handle );
            if ( $url ) {
                wp_send_json( array( 'filelink' => $url ) );
            }
        }

        /**
         * Upload an image
         *
         * @param array $file_handle
         * @return string The image URL
         */
        public function upload_image ( $file_handle ) {
            $upload = media_handle_upload(
                $file_handle,
                0,
                array(),
                array(
                    'test_form' => false,
                    'mimes'     => $this->get_image_mime_types(),
                )
            );
            $attachment_id = is_wp_error( $upload ) ? 0 : (int) $upload;
            $url = $attachment_id ? wp_get_attachment_url( $attachment_id ) : '';
            return $url;
        }

        /**
         * Get a list of allowable image mime types.
         * NOTE: The normal WordPress mime type filter is applied here, so use the 'upload_mimes' filter to customize.
         *
         * @return array
         */
        public function get_image_mime_types () {
            $all_mime_types = get_allowed_mime_types();
            $mime_type_matches = wp_match_mime_types( 'image', $all_mime_types );
            $image_mime_types = array_intersect( $all_mime_types, (array) array_shift( $mime_type_matches ) );
            return $image_mime_types;
        }

    }

    // Let our class do all the work
    new Redactor_Image_Upload_For_WordPress( 'file' );

}
