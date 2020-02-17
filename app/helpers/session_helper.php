<?php
    session_start();
    /**
     * Flash message helper
     */
    function flash($name = '', $message = '', $class = 'alert alert-success'){
        if(!empty($name)){ // If there is a value passed in the name argument.
            // I there is a message passed in and we don't have a session set for the given user.
            if(!empty($message) && empty($_SESSION[$name])){
                // If we have any sessions defined for these params, unset them.
                if(!empty($_SESSION[$name])) unset($_SESSION[$name]);
                if(!empty($_SESSION[$name . '_class'])) unset($_SESSION[$name . '_class']);

                // Set the new sessions.
                $_SESSION[$name] = $message;
                $_SESSION[$name . '_class'] = $class;
            // If we have a session but no message yet.
            }elseif(empty($message) && !empty($_SESSION[$name])){
                $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
                echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
                unset($_SESSION[$name]);
                unset($_SESSION[$name . '_class']);
            }
        }
    }

?>