<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function Diagnosa()
    {
        echo view("Diagnosa");
    }

    public function Kerusakan()
    {
        echo view("Kerusakan");
    }

    public function Penanganan()
    {
        echo view("Penanganan");
    }

    public function Tentang()
    {
        echo view("Tentang");
    }

}

?>