<?php
include_once 'api_variables.php';

if (!is_array($request) || count($request) == 0) { // !is_array() - utvrđuje da li to nije niz;  count() - broji elemente niza
    error('Poziv nije u formi (/services.php/articles[/123])', 400);
}

if (($method == 'POST' || $method == 'DELETE') && 
    (count($request) < 2 || empty($request[1])))  { // empty() - utvrđuje da li je varijabla prazna, da li je element iz niza varijable prazan niz
    error('Za POST i DELETE metode, id artikla je obavezan (/services.php/articles/:articleId)', 405);
}

if (in_array($method, ['POST', 'PUT']) && (!is_array($input) || count($input) == 0)) { // in_aray() - ispituje da li se vrijednost nalazi u nizu 
    error('Za PUT i POST metode obavezno je slanje podataka', 405);
}

$service = $request[0];
if ($service !== 'articles') {
    error('Podrzavamo samo articles servis (/services.php/articles)', 404);
}

error_log("called method: {$method} with service {$service}"); // error_log() - šalje "error" poruku na serverov dnevnik ili na drugu željenu destinaciju

switch ($method) {
    case 'GET':
        get(count($request) >= 2 ? $request[1] : null);
        break;
    case 'POST':
        post($request[1], $input);
        break;
    case 'PUT':
        put($input);
        print_r($input); // print_r - štampa čitljive informacije o varijabli
        break;
    case 'DELETE':
        delete($request[1]);
        break;
    default:
        error('invalid API method, allowed are GET, POST, PUT and DELETE!', 405);
}

function get($articleId = null) {
    $articles = getData();

    if ($articles == null || !is_array($articles) || count($articles) == 0) {
        error('Article not found', 404);
    }

    if ($articleId === null) {
        return respond($articles);
    }
    foreach ($articles as $article) {
        if ($article->id == $articleId) {
            respond($article);
        }
    }

    error('Article not found', 404);
}

function post($articleId, $article) {
    $articles = getData();
    $article['id'] = $articleId;

    if ($articles == null || !is_array($articles) || count($articles) == 0) {
        error('Article not found', 404);
    }

    if ($articleId === null) {
        error('Missing article Id', 400);
    }

    foreach ($articles as $key => $currentArticle) {
        if ($currentArticle->id == $articleId) {
            $articles[$key] = $article;
            saveData($articles);
            respond(false, 201);
            break;
        }
    }

    error('Article not found', 404);
}

function put($article) {
    $articles = getData();

    if (!is_array($articles))
        $articles = [];

    $articles[] = $article;

    saveData($articles);

    respond(false, 200);
}

function delete($articleId) {


    $articles = getData();

    if ($articles == null || !is_array($articles) || count($articles) == 0) {
        error('Article not found', 404);
    }

    foreach ($articles as $key => $currentArticle) {
        if ($currentArticle->id == $articleId) {
            unset($articles[$key]);
            saveData($articles);
            respond(false, 200);
            break;
        }
    }

    error('Article not found', 404);
}

function getData() {
    global $dbFile;

    if (!file_exists($dbFile)) { // !file_exists() - provjerava da li ne potoji kao fajl ili direktorijum
        error('db file not exist', 500);
    }

    return json_decode(file_get_contents($dbFile)); // json_decode() - uzima JSON kodirani niz i pretvara ga u PHP varijablu; 
} // file_get_contents() - prikazuje zadatu datoteku kao string

function saveData($data) {
    global $dbFile;

    if (!file_exists($dbFile)) {
        error('db file not exist', 500);
    }

    file_put_contents($dbFile, json_encode($data)); // file_put_contents() - Ako ne postoji datoteka, ona se kreira i u nju se upisuju podatci. U suprotnom novi podatci se zapisuju umjesto starih, osim ako nije navedeno da se striktno DODAJU (FILE_APPEND)
} // json_encode() - konvertuje iz PHP-a u JSON

function respond($result, $code = 200) {
    http_response_code($code); // http_response_code() - postavlja HTTP kod statusa
    
    if ($result) {
        echo json_encode($result);
    }

    exit();
}

function error($message, $code) {
    http_response_code($code);
    
    if (!$message)
        $message = 'Internal error.';
    echo json_encode(['error' => $message]);

    exit();
}


/*

$_SERVER - varijabla sa kojom se dolazi do informacija o korisniku, IP adresi i portu koje korisnik koristi

$_GET - podatke prikupljene GET metodom prosljeđuje do servera kao dio URL-a i mogu se viljivi su u adress bar-u.
Poželjno ukoliko se radi o maloj količini podataka koji je zahtjevaju veliku sigurnost. 

$_POST - prikuplja podatke POST metodom koji nisu vidljivi u komandnoj liniji, šalju se transparetno kroz header HTTP zahjeva.

*/