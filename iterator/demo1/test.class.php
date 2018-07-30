<?php
class test implements Iterator  
{  
    public $a = 'a';  
    private $data = array('apple','banlance','current');  
    private $point = 0;  
    public function __construct()  
    {  
        $this->point = 0;  
    }  
    public function current()  
    {  
        return $this->data[$this->point];  
    }  
    public function key()  
    {  
        return $this->point;  
    }  
    public function next()  
    {  
        ++$this->point;  
    }  
    public function rewind()  
    {  
        $this->point=0;  
    }  
    public function valid()  
    {  
        return isset($this->data[$this->point]);  
    }  
}  
$t = new test();  
print_r($t);

foreach($t as $val)  
{  
    print_r($val);  
    echo '<br>';  
}  