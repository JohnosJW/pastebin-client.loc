<?php

namespace App\Controllers;

use App\Models\ApiPastebin;

class ApiPastebinController extends BaseController {

    public function store()
    {
        $newPaste = $_POST['new_paste'] ? $_POST['new_paste'] : 'test string';

        $apiPastebin = new ApiPastebin();

        $response = $apiPastebin->create($newPaste);

        if ($response->error) {
            return 'Error: ' . $response->errorCode . ': ' . $response->errorMessage . "\n";
        }
print_r($response->response);die;
        $response->close();

        self::redirect();
    }

    public function listing()
    {
        $apiPastebin = new ApiPastebin();

        $response = $apiPastebin->listing();

        if ($response->error) {
            return 'Error: ' . $response->errorCode . ': ' . $response->errorMessage . "\n";
        }

        $pastes = simplexml_load_string('<xml>' . $response->response . '</xml>') or die("Error: Cannot create object");

        $response->close();

        ApiPastebinController::createView('main', $pastes);
    }

    public function destroy()
    {
        $deletePaste = $_GET['paste_key'] ? $_GET['paste_key'] : '';

        $apiPastebin = new ApiPastebin();

        $response = $apiPastebin->destroy($deletePaste);

        if ($response->error) {
            return 'Error: ' . $response->errorCode . ': ' . $response->errorMessage . "\n";
        }

        $response->close();

        self::redirect();
    }

    public function get()
    {
        $getPaste = $_GET['paste_key'] ? $_GET['paste_key'] : '';

        $apiPastebin = new ApiPastebin();

        $response = $apiPastebin->get($getPaste);

        $results = $response->error
            ? 'Error: ' . $response->errorCode . ': ' . $response->errorMessage . "\n"
            : $response->response;

        $response->close();

        print($results);
    }

}