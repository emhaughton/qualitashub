<?php

namespace App\ValueObject;

use Exception;
use Illuminate\Support\Facades\Storage;

class FolderVo {

    private string $value;

    public function __construct(string $folder)
    {
        if (!Storage::exists($folder)) {
            throw new Exception('Folder not found');
        }
        $this->value = $folder;
    }

    public static function of(string $folder): self
    {
        return new self($folder);
    }

    // public function daysQyt(?string $year = null): int
    // {
    //     $date = new DateTime('now');

    //     if (!empty($year)) {
    //         $date = new DateTime("{$year}-{$this->value}-01");
    //     }

    //     $date->modify('last day of '. $date->format('F'));

    //     return $date->format('d');
    // }

    // public function value(): int
    // {
    //     return $this->value();
    // }

    // public function name(): string
    // {
    //     return date('F', mktime(0, null, null, $this->value));
    // }

}
