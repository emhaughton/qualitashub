<?php

namespace App\ValueObject;

use Exception;
use Illuminate\Support\Facades\Storage;

class DocumentVo
{
    private string $value;

    public function __construct(string $folder, string $document)
    {
        $path = $folder.'/'.$document;
        if (!Storage::exists($folder)) {
            throw new Exception('Folder not found');
        }

        if (!Storage::disk('s3')->exists($path)) {
            throw new Exception('File not found');
        }
        $this->value = $path;
    }

    public static function of(string $folder, string $document): self
    {
        return new self($folder,$document);
    }

    public function value(): string
    {
        return $this->value;
    }
}
