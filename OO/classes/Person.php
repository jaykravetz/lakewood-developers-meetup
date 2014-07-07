<?php

class Person {

	protected $firstName;

	protected $lastName;

	/**
	 * @var	DateTime
	 */
	protected $dateOfBirth;

	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;

		$this->lastName = $lastName;
	}

	public function setDateOfBirth(DateTime $date)
	{
		$this->dateOfBirth = $date;
	}

	public function getAge()
	{
		if ($this->dateOfBirth == NULL)
			return NULL;

		// Convoluted calculation to get accurate age
		return floor((time() - $this->dateOfBirth->getTimestamp()) / 31556926);
	}

	public function getName()
	{
		return $this->firstName . ' ' . $this->lastName;
	}


}