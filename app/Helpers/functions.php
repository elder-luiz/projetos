<?php
// Function getSupportStatusEnum value

use App\Enums\SupportStatusEnum;

if (!function_exists('getSupportStatusEnum')) {
    function getSupportStatusEnum(string $status): string {
        return SupportStatusEnum::fromValue($status);
    }
}
?>