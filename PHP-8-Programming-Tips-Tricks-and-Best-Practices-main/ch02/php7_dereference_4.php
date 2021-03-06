<?php
// /repo/ch02/php7_dereference_4.php
class JsonResponse
{
    public static function render($data)
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
class SerialResponse
{
    public static function render($data)
    {
        return serialize($data);
    }
}
class Test
{
    const JSON = ['JsonResponse'];
    const TEXT = 'SerialResponse';
    public static function getJson($data)
    {
        echo self::JSON[0]::render($data);
    }
    // doesn't work!
    /*
    public static function getText($data)
    {
        echo self::TEXT::render($data);
    }
    */
}

$data = ['A' => 111, 'B' => 222, 'C' => 333];
// works:
echo Test::getJson($data);
echo "\n";
// does not work!
//echo Test::getText($data);
//echo "\n";

