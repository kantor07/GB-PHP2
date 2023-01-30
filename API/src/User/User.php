<?php

namespace GB\API\User;

class User
{
    private int $id;
	private string $firstName;
	private string $lastName;
    public function __construct( string $firstName, string $lastName) 
    {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
    }

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}
}