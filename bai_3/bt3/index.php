
<?php

class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";
    public function __construct(){
            
    }

    public function get($propertyName) {
        return $this->$propertyName;
    }
    public function set($propertyName,$propertyValue) {
        $this->$propertyName = $propertyValue;
    }
    public function setSpeed($mode) {
        switch ($mode)
        {
            case "FAST" :
            $this->speed = self::FAST;
            break;
            case "MEDIUM" :
            $this->speed = self::MEDIUM;
            break;
            case "SLOW" :
            $this->speed = self::SLOW;
            break;
        }
    }
    public function toString() {
        if ($this->on) {
            return $this->speed.' '.$this->color.' '.$this->radius.' '.'fan is ON';
        } else {
            return $this->color.' '.$this->radius.' '.'fan is off';
        }
    }
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fan</title>
</head>

<body>
    <?php
    // include("fan.php");
    $fan1 = new Fan();
    $fan1->setSpeed('FAST');
    $fan1->set('radius', 10);
    $fan1->set('color', 'yellow');
    $fan1->set('on', true);

    $fan2 = new Fan();
    $fan2->setSpeed('MEDIUM');
    $fan2->set('radius', 5);
    $fan2->set('color', 'blue');
    $fan2->set('on', false);

    echo $fan1->toString();
    echo "<br/>";
    echo $fan2->toString();
    ?>
</body>

</html>