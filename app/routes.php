<?php

// Home page
$app->get('/', "magasinAPI\Controller\HomeController::indexAction");

// Detailed info about an article
$app->match('/article/{id}', "magasinAPI\Controller\HomeController::articleAction");

// Login form
$app->get('/login', "magasinAPI\Controller\HomeController::loginAction")
->bind('login');  // named route so that path('login') works in Twig templates

// Admin zone
$app->get('/admin', "magasinAPI\Controller\AdminController::indexAction");

// Add a new article
$app->match('/admin/article/add', "magasinAPI\Controller\AdminController::addArticleAction");

// Edit an existing article
$app->match('/admin/article/{id}/edit', "magasinAPI\Controller\AdminController::editArticleAction");

// Remove an article
$app->get('/admin/article/{id}/delete', "magasinAPI\Controller\AdminController::deleteArticleAction");

// Edit an existing comment
$app->match('/admin/comment/{id}/edit', "magasinAPI\Controller\AdminController::editCommentAction");

// Remove a comment
$app->get('/admin/comment/{id}/delete', "magasinAPI\Controller\AdminController::deleteCommentAction");

// Add a user
$app->match('/admin/user/add', "magasinAPI\Controller\AdminController::addUserAction");

// Edit an existing user
$app->match('/admin/user/{id}/edit', "magasinAPI\Controller\AdminController::editUserAction");

// Remove a user
$app->get('/admin/user/{id}/delete', "magasinAPI\Controller\AdminController::deleteUserAction");

// API : get all articles
$app->get('/api/articles', "magasinAPI\Controller\ApiController::getArticlesAction");

// API : get an article
$app->get('/api/article/{id}', "magasinAPI\Controller\ApiController::getArticleAction");

// API : create an article
$app->post('/api/article', "magasinAPI\Controller\ApiController::addArticleAction");

// API : remove an article
$app->delete('/api/article/{id}', "magasinAPI\Controller\ApiController::deleteArticleAction");
