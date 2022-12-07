<?php

interface Comparator
{
    function compare(object $circleOne,object $circleTwo);
}
class Circle
{
    public float|int $radius;
    public string $name;

    public function __construct(string $name, float|int $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }


    public function getRadius(): string
    {
        return $this->radius;
    }

    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }
}
class CircleComparator implements Comparator
{
    public function compare(object $circleOne, object $circleTwo): int
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}
$circleOne = new Circle("circleOne", 11);
$circleTwo = new Circle("circleTwo", 11);
$circleComparator = new CircleComparator();
// $circleComparator->$radiusOne;
echo  ($circleComparator->compare($circleOne, $circleTwo));