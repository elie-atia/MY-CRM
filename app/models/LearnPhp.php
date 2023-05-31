<?php
class ConstantsProcessor
{
    private $constants;
    public $len_all_constants;
    const NEW_LINE = '<br/>';

    public function __construct($length)
    {
        $all_constants = get_defined_constants();
        $this->len_all_constants = count($all_constants);
        $this->constants = array_slice($all_constants,0,$length);
    }

    private function process_item($item, $key)
    {
        return "The value of {$key} is: {$item}";
    }

    private function check_item($value){
        return !( is_float($value) &&    is_nan($value) || is_resource($value) || (is_object($value) && !method_exists($value, '__toString')));

    }

    public function convert_item($value){
        if (is_object($value) && method_exists($value, '__toString')) {
            return $value->__toString();
        }
        return $value;
    }

    private function process_array($arr, $sort)
    {
        if ($sort === "keys") {
            ksort($arr);
        } else {
            asort($arr);
        }
        $arr = array_filter($arr,[$this,'check_item']);

        $arr = array_map([$this,'convert_item'], $arr);

        return $arr;
        
    }

    public function process($sort) 
    {
        $processedConstants = $this->process_array($this->constants, $sort);

        // $output = "The total number of constant is: " . count($processedConstants) . self::NEW_LINE;

        // foreach ($processedConstants  as $c) {
        //     $output .= $c . self::NEW_LINE;
        // };
        return $processedConstants;
    }

}
