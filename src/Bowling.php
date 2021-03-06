<?php
class Bowling
{
    const MAX_PINS_PER_ROLL = 10;
    const WEDNESDAY = 3;

    private $_dateTime;

    public function __construct()
    {
    }

    public function roll()
    {
        return rand(0, self::MAX_PINS_PER_ROLL);
    }

    public function hyperRoll()
    {
        $score = $this->roll();

        $dateTime = new DateTime();
        if ($dateTime->format('w') == self::WEDNESDAY) {
            $score += 10;
        }
        return $score;
    }
}
