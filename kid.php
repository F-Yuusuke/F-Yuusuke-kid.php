<?php
$kid = new Kid();
$kid->setName('静か');
$kid->setSex('girl');
$kid->setAge(12);

echo $kid->showName();

class Kid
{
    private $name;
    private $sex;
    private $age;

    public function __construct()
    {
        $this->name = 'Seed';
        $this->sex = 'boy';
        $this->age = 10;
    }

    public function getName()
    {
        return $this->name;
    }

    public function
setName($namae)
{
    $this->name = $namae;
}

public function getSex()
{
    return $this->sex;
}

public function
setSex($seibetsu)
{
    $this->sex = $seibetsu;
}

public function getAge()
{
    return $this->age;
}

public function
setAge($nenrei)
{
    $this->age =$nenrei;
}

public function showName()
{
    $suffix = '';

    if ($this->sex == 'boy') {
        if($this->ago >= 12){
        $suffix = '君';
    } else {
        $suffix = 'くん';
    }
} elseif ($this->sex =='girl') {
    if($this->age >= 12){
        $suffix = 'さん';
    } else {
        $suffix ='ちゃん';
    }
}else {
    return $this->name.'の性別が不明です';
}
return $this->name.$suffix;
}
}
?>