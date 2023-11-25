<?php
namespace App\Enums;

enum SupportStatusEnum: string
{
    case A = "Open";
    case C = "Closed";
    case P = "Pending";

    public static function fromValue(string $status) : string {
        foreach (self::cases() as $case){
            if($case->name === $status){
                return $case->value;
            }
        }
        throw new \ValueError("$status is not a valid.");
    }
}
?>
