<?php
require_once "controller/PbController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
$controler = new PbController();
switch ($url) {
    case '/':
        $controler->listPb();
        break;
    case 'add-pb':
        if (isset($_POST['save'])) {
            $pb = new Pban();
            $pb->add($_POST['name'], $_POST['address'], $_POST['email']);
            header("location: index.php");
        }
        $controler->addPb();
        break;
    case 'update-pb':
        if (isset($_POST['edit'])) {
            $controler->updatePb($_POST['name'], $_POST['address'], $_POST['email']);
            header("location: index.php");
        }
        $controler->viewUpdate();
        break;
        case 'delete-pb':
            $controler->delete();
            break;
    default:
        # code...
        break;
}
