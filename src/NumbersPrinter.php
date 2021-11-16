<?php

namespace App;

class NumbersPrinter
{
    private array $rules;

    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    public function generateList(int $limit): array
    {
        $list = [];

        for ($number = 1; $number <= $limit; $number++) {
            $list[] = $this->generateElement($number);
        }

        return $list;
    }

    private function generateElement(int $number): string
    {
        foreach ($this->rules as $rule) {
            if ($rule->matches($number)) {
                return $rule->getReplacement();
            }
        }

        return (string) $number;
    }
}