<?php

final class Email
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
      return $this->value;
    }
}