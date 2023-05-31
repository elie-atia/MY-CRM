<?php
class ConstantsProcessor
{
    private $all_constants;
    const NEW_LINE = '<br/>';

    public function __construct()
    {
        $this->all_constants = get_defined_constants();
    }

    private function process_item($item, $key)
    {
        return "The value of {$key} is: {$item}";
    }

    private function process_array($arr, $sort)
    {
        if ($sort === "keys") {
            ksort($arr);
        } else {
            asort($arr);
        }
        return array_map([$this, 'process_item'], $arr, array_keys($arr));
    }

    public function process($sort)
    {
        $processedConstants = $this->process_array($this->all_constants, $sort);

        $output = "The total number of constant is: " . count($processedConstants) . self::NEW_LINE;

        foreach ($processedConstants  as $c) {
            $output .= $c . self::NEW_LINE;
        };
        return $output;
    }

}
