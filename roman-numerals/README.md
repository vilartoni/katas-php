Roman Numerals Kata
===================

The Romans wrote their numbers using letters; specifically the letters "I, V, X, L, C, D, and M."
There were certain rules that the numerals followed which should be observed:

- The symbols 'I', 'X', 'C', and 'M' can be repeated at most 3 times in a row. 'V', 'L', and 'D' can never be repeated.
- As arabic numbers can be split into their constituent parts (1066 becomes 1 0 6 6), so too can Roman numerals, just
without the zero (1066 becomes MLXVI, or M (1000) LX (60) and VI (6)).
- The '1' symbols ('I', 'X', and 'C') can only be subtracted from the 2 next highest values ('IV' and 'IX', 'XL' and
'XC', 'CD' and 'CM'). The '5' symbols ('V', 'L', and 'D') can never be subtracted.
- Only one subtraction can be made per numeral ('XC' is allowed, 'XXC' is not).

The Kata says you should write a function to convert from normal numbers to Roman Numerals: eg

    1 --> I
    10 --> X
    7 --> VII

There is no need to be able to convert numbers larger than about 3000. (The Romans themselves didn't tend to go any
higher).

Note that you can't write numerals like "IM" for 999. Wikipedia says: *Modern Roman numerals ... are written by
expressing each digit separately starting with the left most digit and skipping any digit with a value of zero. To see
this in practice, consider the ... example of 1990. In Roman numerals 1990 is rendered: 1000=M, 900=CM, 90=XC; resulting
in MCMXC. 2008 is written as 2000=MM, 8=VIII; or MMVIII.*
