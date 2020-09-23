<?php

    require 'content/includes/init.php';

    Auth::logout();

    Url::redirect('/index.php');

?>