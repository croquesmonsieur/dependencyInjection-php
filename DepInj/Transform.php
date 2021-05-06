<?php


interface Transform
{
    public function transform(string $word): string;
}

class capitalization implements Transform
{
    public function transform(string $word): string
    {
        for ($i = 0; $i <= strlen($word); $i+=2) {
            $word[$i] = strtoupper($word[$i]);
        }
        return $word;
    }

}

class Dashination implements Transform
{
    public function transform(string $word): string
    {
        return str_replace(' ', '-', $word);
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}

class Logger
{
    
}