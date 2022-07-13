<?php
    add_action('wp_ajax_ajax_form_action_contact_us', 'ajax_action_callback_contact_us');
    add_action('wp_ajax_nopriv_ajax_form_action_contact_us', 'ajax_action_callback_contact_us');

    function ajax_action_callback_contact_us() {
        $errors = [];

        $service = sanitize_text_field($_POST['radio-services']);
        $firstName = sanitize_text_field($_POST['first-name']);
        $lastName = sanitize_text_field($_POST['last-name']);
        $company = sanitize_text_field($_POST['your-company']);
        $email = sanitize_text_field($_POST['your-email']);
        $message = sanitize_text_field($_POST['your-message']);
        $file = sanitize_text_field($_POST['your-file']);

        // If the nonce check fails, then block the send
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die("Data sent from the wrong address");
        }

        if ($errors) {
            wp_send_json_error($errors);

        } else {
            $message_success = 'Sent successfully';

            // Sending a message by mail
            $to = get_option('admin_email');
            $subject = 'Engineering Solutions "Сontact us"';
            // $from = 'Engineering Solutions' . get_option('admin_email');

            // Message
            $message = '<html>
                        <head>
                          <title>Engineering Solutions "Сontact us"</title>
                        </head>
                        <body>
                          <p>Engineering Solutions "Сontact us"</p>
                          <table>
                            <tr>
                              <th>Select services of interest</th>
                              <th>Name</th>
                              <th>Company name</th>
                              <th>Email</th>
                              <th>Message</th>
                            </tr>
                            <tr>
                              <td>' . $service . '</td>
                              <td>' . $firstName . ' ' . $lastName . '</td>
                              <td>' . $company . '</td>
                              <td>' . $email . '</td>
                              <td>' . $message . '</td>
                              <td>' . $file . '</td>
                            </tr>
                          </table>
                          <p>
                          This e-mail was sent from a contact form on 
                           <a href="https://engineering-solutions.org/contacts" target="_blank">Contacts Us</a>
                          </p>
                        </body>
                        </html>';

            // To send an HTML email, the Content-type header must be set
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            mail($to, $subject, $message, implode("\r\n", $headers));

            wp_send_json_success($message_success);
        }

        // kill ajax
        wp_die();
    }