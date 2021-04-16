<?php

class deck{

    public $cards = [
        'clubs' => ['Cards/c1.png', 'Cards/c2.png', 'Cards/c3.png', 'Cards/c4.png', 'Cards/c5.png', 'Cards/c6.png', 'Cards/c7.png', 'Cards/c8.png', 'Cards/c9.png', 'Cards/c10.png', 'Cards/cj.png', 'Cards/cq.png', 'Cards/ck.png'],
        'hearts' => ['Cards/h1.png', 'Cards/h2.png', 'Cards/h3.png', 'Cards/h4.png', 'Cards/h5.png', 'Cards/h6.png', 'Cards/h7.png', 'Cards/h8.png', 'Cards/h9.png', 'Cards/h10.png', 'Cards/hj.png', 'Cards/hq.png', 'Cards/hk.png'],
        'spades' => ['Cards/s1.png', 'Cards/s2.png', 'Cards/s3.png', 'Cards/s4.png', 'Cards/s5.png', 'Cards/s6.png', 'Cards/s7.png', 'Cards/s8.png', 'Cards/s9.png', 'Cards/s10.png', 'Cards/sj.png', 'Cards/sq.png', 'Cards/sk.png'],
        'diamonds' => ['Cards/d1.png', 'Cards/d2.png', 'Cards/d3.png', 'Cards/d4.png', 'Cards/d5.png', 'Cards/d6.png', 'Cards/d7.png', 'Cards/d8.png', 'Cards/d9.png', 'Cards/d10.png', 'Cards/dj.png', 'Cards/dq.png', 'Cards/dk.png']
    ];

    public function __construct()
    {
        
    }
    public function shuffle(){

        $cards = $this->cards;

        foreach ($cards as $card){

            shuffle($card);
            echo '<img src=' . $card[0] . ' />';
        }
    }
        public function reset(){
            header('refresh: 0');
        }
    }

        class Player extends Deck{

            public function hand(){
        }
            public function discard(){
            }
    }




?>