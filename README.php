# Php array functions… with Emojis 🙂

Do you know [Php array functions](https://www.php.net/manual/en/ref.array.php)?
They are powerful, but sometimes tricky to handle… 😕

Here a cheat-sheet using Emoji, with some of my favorite _tricks_: Enjoy! 🎉


## Cheat-sheet
<?php
require 'utils.php';

dump(
    '`array_chunk`',
    fn() => array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2)
);
dump(
    '`array_chunk` with preserved keys',
    fn() => array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2, true)
);

dump(
    '`array_column`',
    fn() => array_column(
        [
            ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
            ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
            ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
            ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
            ['people' => 🤠, 'fruit' => 🍌, 'animal' => 🐯],
        ],
        'fruit'
    )
);

dump(
    '`array_column` with an index',
    fn() => array_column(
        [
            ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
            ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
            ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
            ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
            ['people' => 🤠, 'fruit' => 🍌, 'animal' => 🐯],
        ],
        'fruit',
        'people'
    )
);

dump(
    '`array_combine`',
    fn() => array_combine(
        [😀, 😎, 🥶, 🤡, 🤠],
        [🍎, 🍐, 🍊, 🍋, 🍌]
    )
);

dump(
    '`array_count_values`',
    fn() => array_count_values([🍎, 🍎, 🍌, 🍌, 🍎])
);

dump(
    '`array_unique`',
    fn() => array_unique([🍎, 🍎, 🍌, 🍌, 🍎])
);

dump(
    '`array_unique` without preserving keys',
    fn() => array_values(array_unique([🍎, 🍎, 🍌, 🍌, 🍎]))
);

?>

## How To

Requires at least php `7.4`.
```bash
php README.php > README.md
```
