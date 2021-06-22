# Php array functions… with Emojis 🙂

Do you know [Php array functions](https://www.php.net/manual/en/ref.array.php)?
They are powerful, but sometimes tricky to handle… 😕

Here a cheat-sheet using Emoji, with some of my favorite _tricks_: Enjoy! 🎉


## Cheat-sheet
<?php
require 'utils.php';

dump(
    fn() => array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2)
);

dump(
    fn() => array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2, true),
    '`array_chunk` with preserved keys'
);

dump(
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
    ),
    '`array_column` with an index'
);

dump(
    fn() => array_combine(
        [😀, 😎, 🥶, 🤡, 🤠],
        [🍎, 🍐, 🍊, 🍋, 🍌]
    )
);

dump(
    fn() => array_count_values([🍎, 🍎, 🍌, 🍌, 🍎])
);

dump(
    fn() => array_diff(
        [🍎, 🍐, 🍊, 🍋, 🍌],
        [❌, 🍐], [❌, 🍊], [❌, 🍋]
    )
);

dump(
    fn() => array_diff_key(
        [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌],
        [🐶 => ❌, 🐭 => ❌], [🐰 => ❌]
    )
);

dump(
    fn() => array_fill_keys([🍎, 🍐, 🍊, 🍋, 🍌], ✅)
);

dump(
    fn() => array_fill(2, 3, 🍌)
);

dump(
    fn() => array_filter([🍎, 0, 🍐, false, 🍊, null, 🍋, '', 🍌])
);

dump(
    fn() => array_filter([🍎, 🍐, 🍎, 🍋, 🍌], fn($❓) => $❓ === 🍎),
    '`array_filter` with callback'
);

dump(
    fn() => array_flip([🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍎, 🦊 => 🍋, 🐯 => 🍌])
);

dump(
    fn() => array_intersect(
        [🍎, 🍐, 🍊, 🍋, 🍌],
        [❌, 🍊, 🍐], [🍊, 🍌]
    )
);

dump(
    fn() => array_intersect_key(
        [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌],
        [🐶 => ❌, 🦊 => ✅], [🦊 => ✅, 🐯 => ❌]
    )
);

dump(
    fn() => array_keys(
        [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌]
    )
);

dump(
    fn() => array_map(
        fn($👤, $🍽) => "$👤 ❤️ $🍽",
        [😀, 😎, 🥶, 🤡],
        [🍎, 🍐, 🍊, 🍋, 🍌]
    )
);

dump(
    fn() => array_map(
        null,
        [😀, 😎, 🥶, 🤡, 🤠],
        [🍎, 🍐, 🍊, 🍋],
        [🐶, 🐭, 🐰, 🦊, 🐯]
    ),
    '`array_map` with `null` callback'
);

dump(
    fn() => array_merge(
        [🐶 => 🍎, 🐭 => 🍐, 🐰 => ❌],
        [🐰 => 🍊, 🦊 => ❌, 🐯 => 🍌],
        [🦊 => 🍋],
    )
);

dump(
    fn() => array_pad([🍎, 🍐], 5, 🍌)
);

dump(
    fn() => array_reverse([🍎, 🍐, 🍊, 🍋, 🍌])
);

dump(
    fn() => array_reverse([🍎, 🍐, 🍊, 🍋, 🍌], true),
    '`array_reverse` with preserved keys'
);

dump(
    fn() => array_slice([🍎, 🍌, 🍌, 🍌, 🍎], 1, 3)
);

dump(
    fn() => array_slice([🍎, 🍌, 🍌, 🍌, 🍎], 1, 3, true),
    '`array_slice` with preserved keys'
);

dump(
    fn() => array_unique([🍎, 🍎, 🍌, 🍌, 🍎])
);

dump(
    fn() => array_values(
        [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌]
    )
);

?>

## How To

Requires at least php `7.4`.
```bash
php README.php > README.md
```
