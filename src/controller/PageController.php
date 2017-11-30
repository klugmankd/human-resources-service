<?php

class PageController {

    public function loginAction() {
        session_start();
        if (!empty($_SESSION['id'])) {
            header("Location: employee");
        }
        include_once ("app/front-end/header.php");
        require_once ("app/front-end/templates/loginTemplate.php");
        include_once ("app/front-end/footer.php");
    }

    public function testAction()
    {
        require_once ("app/front-end/templates/testTemplate.php");
    }
}