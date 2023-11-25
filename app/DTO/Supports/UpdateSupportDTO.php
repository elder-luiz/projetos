<?php
namespace App\DTO\Supports;

use App\Enums\SupportStatusEnum;
use App\Http\Requests\StoreUpdateSupport;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public SupportStatusEnum $status,
        public string $body
    ) {} 

    public static function makeFromRequest(StoreUpdateSupport $request) : self {
        return new self(
            $request->id,
            $request->subject,
            SupportStatusEnum::A,
            $request->body
        );
    }
}
?>