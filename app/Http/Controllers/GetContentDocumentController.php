<?php

namespace App\Http\Controllers;

use App\Services\GetContentDocumentService;
use Exception;

final class GetContentDocumentController
{
    public function __construct(
        private GetContentDocumentService $getContentDocumentService
    ) {
    }

    /**
     * Devuelve el contenido de un fichero
     *
     * @param string $folder carpeta donde se aloja el documento.
     * @param string $document nombre del documento.
     *
     * @return string
     */
    public function __invoke(string $folder, string $document)
    {
        try {
            $pdfUrl = ($this->getContentDocumentService)($folder, $document);

            return view('document', compact('pdfUrl'));
        } catch (Exception $e) {
            $messageError = $e->getMessage();
            return view('message_error', compact('messageError'));
        }
    }
}
