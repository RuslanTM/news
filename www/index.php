<?php

require __DIR__ . '/../models/article.php';
$articles = article_getAll();
include __DIR__ . '/../views/index.php';

