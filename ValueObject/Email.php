<?php

final class Email
{
    private $value;

    const EMAIL_REGULAR_EXPRESSIONS = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
    const INVALID_MESSAGE = 'メールアドレスの形式が正しくありません';
    public function __construct(string $value)
    {
      if ($this->isInvalid($value)) {
        throw new Exception(self::INVALID_MESSAGE);
      }

      $this->value = $value;
    }

    public function value(): string
    {
      return $this->value;
    }

    private function isInvalid(string $value): bool
    {
      return !preg_match(self::EMAIL_REGULAR_EXPRESSIONS, $value);
    }
}