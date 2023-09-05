<?php

declare(strict_types=1);

namespace App\Services;

use App\ValueObject\DocumentVo;
use Illuminate\Support\Facades\Storage;

final class GetContentDocumentService
{

    /**
     * Devuelve el contenido de un fichero
     *
     * @param string $folder carpeta donde se aloja el documento.
     * @param string $document nombre del documento.
     *
     * @return string
     */
    public function __invoke(string $folder, string $document): string
    {
        $path = DocumentVo::of($folder, $document);
        return  Storage::url($path->value());
    }
}
