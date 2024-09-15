<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Model\News;

class HomeController extends Controller
{
    public function index(): void
    {
        $page = $_GET['page'] ?? 1;
        $newsModel = new News($this->db());
        $newsList = $newsModel->getNewsList((int)$page, 4);
        $latestNews = $newsModel->getLatestNews();

        $this->view('home', [
            'newsList' => $newsList,
            'latestNews' => $latestNews,
            'currentPage' => $page,
            'totalPages' => $newsModel->getTotalPages(4),
        ]);
    }
}
