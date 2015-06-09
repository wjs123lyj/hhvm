<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/* Check that the right operand of 'instanceof' is not an enum */

enum Foo : int {
  bar = 1;
  baz = 2;
}

function test(): bool {
  $x = 1;
  return $x instanceof Foo;
}
