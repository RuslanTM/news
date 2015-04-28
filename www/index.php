<?php

require __DIR__ . '/../models/article.php';
$articles = article_getLastArticles();
include __DIR__ . '/../views/index.php';

