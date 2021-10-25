<?php

declare(strict_types=1);

namespace Andremeireles;

class Calculator
{
    public function __construct(
        private string $currentNumber = '0',
        private string $operator = '',
        private string $operatorNumber = ''
    ) {
    }

    public function addNumber(string $number): void
    {
        $this->currentNumber = sprintf('%s%s', $this->currentNumber, $number);
    }

    public function addOperator(string $operator): void
    {
        $this->operator = $operator;
    }

    public function addOperatorNumber(string $operatorNumber): void
    {
        $this->operatorNumber = sprintf('%s%s', $this->operatorNumber, $operatorNumber);
    }
}
