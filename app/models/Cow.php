<?php

class Cow extends Eloquent {
	
    protected $guarded = array();

    public static $rules = array();

    public $with = array(
    	'calving',
    	'tact',
    	'status',
    	'vaccines'
    );

    public $table = 'cows';

    public function calving() {
    	return $this->belongsTo('Calving', 'calving_id');
    }

    public function tact() {
    	return $this->belongsTo('Tact', 'tact_id');
    }

    public function status() {
    	return $this->belongsTo('Status', 'status_id');
    }

    public function vaccines() {
 		return $this->belongsToMany('Vaccine', 'cow_vaccine', 'cow_id', 'vaccine_id');   	
    }

    public function getAge() {
        // set the timezone
        $tz = new DateTimeZone('America/Argentina/Buenos_Aires');
         
        // create a DateTime object and retrieve the difference with current time expresed in years
        $age = DateTime::createFromFormat('Y-m-d', $this->birthdate, $tz)->diff(new DateTime('now', $tz))->y;
 
        // get the age, and be ondulao
        return $age;
    }

    public function hasVaccines() {
        
        if($this->vaccines) {
            return true;
        }

        return false;
    }
}