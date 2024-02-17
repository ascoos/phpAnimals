<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ***********************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     : 24.0.0                                                    *
 * @ASCOOS-CATEGORY    : Kernel (Frontend and Administration Side)                 *
 * @ASCOOS-CREATOR     : Drogidis Christos                                         *
 * @ASCOOS-SITE        : www.ascoos.com                                            *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ***********************************************************************************
 *
 * @package            : ASCOOS CMS
 * @subpackage         : Animals Handler
 * @source             : phpAnimals/src/phpAnimals.php
 * @version            : NNNNNNNN - $release: 1.0 - $revision: 0 - $build NN
 * @created            : 2024-02-17 10:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * TAnimals Class
 * 
 * @since 7.4.0
 */
 class TAnimals {

    public string $name = '';
    public int $age = 0;               // Animal Age in years
    public int $human_years = 0;       // Age In Human Years


    final public function setAge(int $age) {
        $this->age = $age;
    }


    final public function getAge() {
        return (int) $this->age;
    }

    final public function getHumanYears() {
        return $this->human_years;
    }    

}


class TDog extends TAnimals
{

    /**
     * 
     */
    public function __construct(int $age=0) 
    {
        $this->setAge($age);
        $this->calcHumanYears();
    }



    /**
     * 2019 Epigenetic Clock Study
     * A 2019 study by researchers at the University of California San Diego put forth a new method for calculating dog age, 
     * based on changes made to human and dog DNA over time. 
     * In both species, methyl groups are added to DNA molecules throughout aging, altering DNA activity without altering the DNA itself. 
     * As a result, DNA methylation has been used by scientists to study aging in humans through an “epigenetic clock.”
     * 
     * The research team performed targeted DNA sequencing in 104 Labrador Retrievers spanning a 16 year age range, 
     * in an attempt to compare dogs’ epigenetic clocks to those of humans. 
     * The results allowed them to derive a formula for adjusting dogs’ ages to “human years”, 
     * by multiplying the natural logarithm of the dog’s age by 16 and adding 31 (human_age = 16ln(dog_age) + 31). 
     */
    private function calcHumanYears()
    {
        $this->human_years = round(log($this->age) * 16 + 31);
    }  
    
    
    /**
     *   Dog Age	    Human Age
     *      1	            15
     *      2           	24
     *      3	            29
     *      4	            34
     *      5	            39
     *      6	            44
     *      7	            49
     *      8	            54
     *      9	            59
     *      10	            64
     *      11	            69
     *      12	            74
     *      13	            79
     *      14	            84
     *      15	            89
     */
    final public function _OLD_dogToHumanAge($dogAge) {
        if ($dogAge == 1) {
            return 15;
        } else if ($dogAge == 2) {
            return 24;
        } else {
            return 24 + ($dogAge - 2) * 5;
        }
    }    

}


class TCat extends TAnimals
{


    public function __construct(int $age) 
    {
        $this->setAge($age);
        $this->calcHumanYears();
    }    


    /**
     *   Cat Age         Human Age
     *      1	            15
     *      2	            24
     *      3	            28
     *      4	            32
     *      5	            36
     *      6	            40
     *      7	            44
     *      8	            48
     *      9	            52
     *      10	            56
     *      11	            60
     *      12	            64
     *      13	            68
     *      14	            72
     *      15	            76
     */
    private function calcHumanYears()
    {
        $catAge = 0;

        if ($this->age == 1) {
            $catAge = 15;
        } else if ($this->age == 2) {
            $catAge = 24;
        } else {
            $catAge = 24 + ($this->age - 2) * 4;
        }

        $this->human_years = $catAge;
    }   


}

?>
