<?php 
    declare(strict_types = 1);
    /*
    Step 1: what kind of reservation am I building off of?
    Reservation model: hotel room
    Properties:
        nights: int
        guests: int
        member: bool
        roomNb: int
    
    Methods:
        calculateCost: returns a float price
        __toString(): this counts, right?
    */
    
    class Reservation
    {
        public static int $nextId= 1;
        public int $id;
        public int $nights;
        public int $guests;
        public int $roomNb;
        public bool $member;

        function __construct(int $nights, int $guests, int $roomNb, bool $member) {
            // Making our property "static" allows for data to be stored within the class itself
            // allowing for the creation of automated incrementation implemented by the class itself.
            // Had $nextId been a regular property, the property would be one inherited by all
            // instances of Reservation rather than being stored by the Reservation class itself,
            // thus making this interaction impossible:
            $this->id = self::$nextId;
            self::$nextId++;

            // Assigning other properties
            $this->nights = $nights;
            $this->guests = $guests;
            $this->roomNb = $roomNb;
            $this->member = $member;
        }
    }
    $reservation1 = new Reservation(1,1,111,false);
    $reservation2 = new Reservation(1,1,112,false);
    print_r($reservation1);
    print_r($reservation2);
    
?>