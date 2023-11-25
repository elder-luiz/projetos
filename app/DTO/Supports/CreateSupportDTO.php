<?php
namespace App\DTO\Supports;

use App\Enums\SupportStatusEnum;
use App\Http\Requests\StoreUpdateSupport;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public SupportStatusEnum $status,
        public string $body
    ) {} 

    public static function makeFromRequest(StoreUpdateSupport $request) : self {
        return new self(
            $request->subject,
            SupportStatusEnum::A,
            $request->body
        );
    }
}
?>