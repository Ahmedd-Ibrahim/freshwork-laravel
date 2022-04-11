<?php
namespace Freshwork;

use Illuminate\Support\Str;

class Freshwork
{
    public static function __callStatic(string $name, array $arguments = [])
    {
        try {
            $name = 'Freshwork\\modules\\Api\\' . Str::studly($name);
            if (class_exists($name)) {
                return new $name;
            }
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
