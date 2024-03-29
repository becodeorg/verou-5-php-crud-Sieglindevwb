<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
    case 'create':
        create();
        break;
    case 'edit':
        edit();
        break;
    case 'delete':
        delete();
        break;
    default:
        overview();
        break;
}

function overview()
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    global $cardRepository;

    $cards = $cardRepository->get();

    require 'overview.php';
}

function create()
{
    global $cardRepository;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cardRepository->create();

        header('location: ./');
        exit;

    }

    require 'create.php';
}

function edit() 
{
    $id = (int)$_GET['id'] ?? 0;
    global $cardRepository;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $color = $_POST['color'] ?? '';
        
        $cardRepository->update($name, $color, $id);
        overview();

        header('location: ./');
        exit;
    } 
    $card = $cardRepository->find($id);

    if (!$card) {
        echo "Card not found";
        exit;
    }
    require 'edit.php';
}


function delete()
{
    {
    $id = (int)$_GET['id'] ?? 0;
    global $cardRepository;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
        $cardRepository->delete($id);

        header('Location: ./');
        exit;
    }

    $card = $cardRepository->find($id);
    if (!$card) {
        echo "Card not found";
        exit;
    }

    require 'delete.php';
}
}