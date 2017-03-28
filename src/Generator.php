<?php

namespace ArraySubsets;

/**
 * Generate all possible subsets of an array
 *
 * @package ArraySubsets
 * @author  Mark Wilson <mark@89allport.co.uk>
 */
class Generator
{
    /**
     * Generate the subsets
     *
     * @return \Generator
     */
    public function generate(array $original, $length)
    {
        $originalLength  = count($original);
        $remainingLength = $originalLength - $length + 1;

        for ($i = 0; $i < $remainingLength; $i++) {
            $current = $original[$i];

            if ($length === 1) {
                yield [$current];
            } else {
                $remaining = array_slice($original, $i + 1);

                foreach ($this->generate($remaining, $length - 1) as $permutation) {
                    array_unshift($permutation, $current);

                    yield $permutation;
                }
            }
        }
    }
}
