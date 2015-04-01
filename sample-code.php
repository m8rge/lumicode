<?php
$contents = '';
$heredoc = <<< HEREDOC_ID
some $contents
HEREDOC_ID;

function foo() {
    // Sample comment
    return SomeClass::$shared;
}

class MyOwnClass extends One implements Another {
    private $my;
    public static $shared;
    const MAGIC = 9876543210;

    /**
     * Description by <a href="mailto:">user@host.dom</a>
     * @param $abc
     * @param $def
     * @return array
     */
    function doSmth($abc, $def) {
        foo();
        $def .=  self::MAGIC;
        $v = Helper::convert($abc . "\n {$def}");
        $q = new Query( $this->invent(abs(0x80)) );
        return array($v => $q->result);
    }
}

interface Another {
}

include(dirname(__FILE__) . "includes.php");
`rm -r`;