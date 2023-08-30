<?php
function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}
add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

$message = '<p>Name:' . $_POST['name'] . '</p><p>Email:' . $_POST['email'] . '</p><p>Subject:' . $_POST['subject'] . '</p><p>Message:' . $_POST['message'];
$result = wp_mail('evangelinebrightreflections@gmail.com', 'New mail', $message);
remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
?>