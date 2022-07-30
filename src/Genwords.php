<?php
namespace changxiaoming\FillName;


use changxiaoming\FillName\dictionary\Dictionarys;

class Genwords extends BaseObj
{

    public $name;
    public $zone = 'zh';
    public $gender = ''; //male|female

    public function init(...$args)
    {
        parent::init($args);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name='')
    {
        $this->name = $name;
        return $this;
    }

    public function setZone(string $zone = 'zh')
    {
        $this->zone = $zone;
        return $this;
    }

    /**
     * @param string $gender = 'male'|'female'
     * @return $this
     */
    public function setGender(string $gender = 'male')
    {
        $this->gender = $gender;
        return $this;
    }


    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRandName():string
    {
        $familyName = Dictionarys::FamilyNames[array_rand( Dictionarys::FamilyNames, 1)];

        $gender = ['male','female'][rand(0,1)];
        if(!empty($this->gender)){
            $gender = $this->gender;
        }
        $name1 = Dictionarys::Names[$gender][array_rand(Dictionarys::Names[$gender],1)];
        $name2 = Dictionarys::Names[$gender][array_rand(Dictionarys::Names[$gender],1)];
        return  $familyName . $name1 . $name2;

    }

}
