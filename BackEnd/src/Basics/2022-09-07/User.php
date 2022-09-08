<?php
class User
{
	private $firstName;
	private $lastName;

	function __construct(string $firstName, ?string $lastName = null)
	{	
		$this->setFirstName($firstName);

		if ($lastName) {
			$this->setLastName($lastName);
		}
	}

	public function setFirstName(string $name): void
	{
		$this->firstName = ucfirst($name);
	}

	private function setLastName(string $name): void
	{
		$this->lastName = ucfirst($name);
	}

	public function getFullName(): string
	{
		return $this->firstName . " " . $this->lastName;
	}

}