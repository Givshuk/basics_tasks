<?php


 class Char {

    public  $name;
    public  $id;
    public   $strange;
    public  $int;
    private $hand;
    protected $hp = 100;

     /**
      * @return mixed
      */
     public function getHp()
     {
         return $this->hp;
     }

     /**
      * @param mixed $hp
      */
     public function setHp($hp)
     {
         $this->hp = $hp;
     }


     /**
      * @return FistWeapon
      */
     public function getHand()
     {
         return $this->hand;
     }

     /**
      * @param FistWeapon $hand
      */
     public function setHand($hand)
     {
        if ($hand  instanceof Weapon){
            $this->hand =$hand;
        }
        elseif(!$hand){
            $this->hand = new FistWeapon();
        }
        else{
            throw new InvalidArgumentException();
        }
     }

public function __construct()
{
    $this->hand = new FistWeapon();
}

 }
abstract class Weapon
{
    const POWER = 50;
    const WEIGHT = 5;

    public function getPower()
    {
        return static::POWER;
    }

    public function getWeight()
    {
        return static::WEIGHT;
    }


}
class KatanaWeapun extends Weapon{

     const POWER = 30;
     const  WEIGHT = 5;

}
class FistWeapon extends Weapon {
     const POWER = 4;
     const  WEIGHT = 1;
}
class Fight{

     private $palyer1;
     private $palyer2;

     public function __construct(Char $player1,Char $player2)
     {
          $this->palyer1 = $player1;
          $this->palyer2 = $player2;
           $this->fight();

     }
   private  function fight (){
         while ($this->palyer2->getHp() >= 0) {
             $this->palyer2->setHp($this->palyer2->getHp() - $this->palyer1->getHand()->getPower());
         }
   }

}

$player1 = new  Char ();
$sword  = new  KatanaWeapun();
$player1->setHand($sword);

$player2 = new  Char ();
$fight =  new Fight($player1,$player2);
var_dump($player1);
var_dump($player2);

