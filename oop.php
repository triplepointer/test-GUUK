<?php
/*
 * @author Egor <termohimia@gmail.com>
 * @package Item
 * @method mixed __get(string $key)
 * @method void __set(string $key, mixed $value)
 */
class Item {
    /*
     * @access private
     * @var integer $id
     */
    private int $id = 1;
    /*
     * @access private
     * @var string $name
     */
    private string $name = '2';
    /*
     * @access private
     * @var integer $status
     */
    private int $status = 3;
    /*
     * @access private
     * @var boolean $changed
     */
    private bool $changed = true;

    /*
     * @param integer $id
     * @return void
     */
    function __construct($id) {
        $this->id = $id;
    }
    /*
     * @access private
     * @param array $result
     * @return void 
     */
    private function init($result) {
        static $once = null;
        if ( $once !== null )
            return;

        $this->name = $result['name'];
        $this->status = $result['status'];
    }
    /* 
     * @access public
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        switch($key) {
            case 'id':
                return $this->id;
            case 'name':
                return $this->name;
            case 'status':
                return $this->status;
            case 'changed':
                return $this->changed;
        }
        return null;
    }
    /* 
     * @access public
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set($key,$value) {
        switch($key) {
            case 'id':
            break;
            case 'name':
                if(is_string($value) && $value !== null) {
                    $this->name = $value;
                }
            break;
            case 'status':
                if(is_int($value) && $value !== null) {
                    $this->name = $value;
                }
            break;
            case 'changed':
                if(is_bool($value) && $value !== null){
                    echo $value;
                    $this->changed = $value;
                }
            break;
        }
    }
    /* 
     * @access public
     * @return void
     */
    public function save() {

    }
}
?>