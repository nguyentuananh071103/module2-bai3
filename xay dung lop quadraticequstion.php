<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function getC(){
        return $this->c;
    }
    public function setA($a){
        $this->a=$a;
    }
    public function setB($b){
        $this->b=$b;
    }
    public function setC($c){
        $this->c=$c;
    }
    public function getDiscriminant(){
        $delta=$this->b*$this->b -4*$this->a*$this->c;
        return $delta;
    }

    public function getRoot1(){
        $x1=(-$this->b+sqrt(pow($this->b, 2) - 4 * $this->a * $this->c))/(2*$this->a);
        return $x1;
    }
    public function getRoot2(){
        $x2=(-$this->b-sqrt(pow($this->b, 2) - 4 * $this->a * $this->c))/(2*$this->a);
        return $x2;
    }
}
$giaiPhuongTrinh= new QuadraticEquation(2,1,-1);
if ($giaiPhuongTrinh->getDiscriminant() >0 ){
    echo "phương trình có nhiệm x1 = " .$giaiPhuongTrinh->getRoot1() . "<br>";
    echo "phương trình có nghiệm x2 = " .$giaiPhuongTrinh->getRoot2() . "<br>";
}
elseif ($giaiPhuongTrinh->getDiscriminant() == 0){
    echo "pt co nghiem x1=x2 = " .$giaiPhuongTrinh->getRoot2() . "<br>";
}
else {
    echo "phương trình vô nghiệm";
}
?>
