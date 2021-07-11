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
    fn() => array_column(
        [
            ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
            ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
            ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
            ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
            ['people' => 🤠, 'fruit' => 🍌, 'animal' => 🐯],
        ],
        null,
        'people'
    ),
    '`array_column` all columns with an index'
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
    fn() => [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊] +
        [🐰 => ❌, 🦊 => 🍋, 🐯 => 🍌] +
        [🦊 => ❌],
    'Union operator',
    'https://www.php.net/manual/en/language.operators.array.php'
);

dump(
    fn() => array_merge([🍎, 🍐], [🍊, 🍌], [🍋]),
    '`array_merge` with integer keys'
);

dump(
    fn() => [🍎, 🍐] + [🍊, 🍌] + [🍋],
    'Union operator with integer keys',
    'https://www.php.net/manual/en/language.operators.array.php'
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

## Advanced usage

These are what I call _array tips©_:
* Single statement
* No anonymous function (but short arrow functions are allowed 😉)
* 🤯

⚠️ Do not use it in production, unless **ALL** your team understand it! 😅

<?php

dump(
    fn() => !(
        ($data = [
            ['people' => 😀, 'fruit' => 🍎, 'score' => 2],
            ['people' => 😎, 'fruit' => 🍐, 'score' => 4],
            ['people' => 🥶, 'fruit' => 🍊, 'score' => 3],
            ['people' => 🤡, 'fruit' => 🍋, 'score' => 1],
            ['people' => 🤠, 'fruit' => 🍌, 'score' => 5],
        ]) && array_multisort(
            array_column($data, 'score'),
            $data
        )
    ) ?: $data,
    '`array_multisort`: sort multidimensional array'
);

dump(
    fn() => !($data = [
        ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
        ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
        ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
        ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
        ['people' => 🤠, 'fruit' => 🍊, 'animal' => 🐯],
    ]) ?: array_column($data, null, 'fruit')[🍊] ?? null,
    '`array_column`: search last element'
);


dump(
    fn() => !($data = [
        ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
        ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
        ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
        ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
        ['people' => 🤠, 'fruit' => 🍊, 'animal' => 🐯],
    ]) ?: array_values(
        array_intersect_key(
            $data,
            array_intersect(
                array_column($data, 'fruit'),
                [🍊, 🍎]
            )
        )
    ),
    '`array_intersect`: filtering elements'
);

dump(
    fn() => !($data = [1, 2, 3, 4, 5, 6]) ?: [
        'count' => $count = count($data),
        'average' => $avg = array_sum($data) / $count,
        'variance' => array_sum(
                array_map(
                    'array_product',
                    array_map(null, $data, $data)
                )
            ) / $count - $avg ** 2,
    ],
    '`array_map`: numerical statistics'
);

dump(
    fn() => array_map(
            null,
        ...[
            [😀, 🍎, 🐶],
            [😎, 🍐, 🐭],
            [🥶, 🍊, 🐰],
            [🤡, 🍋, 🦊],
            [🤠, 🍊, 🐯],
        ]
    ),
    '`array_map`: matrix transposition'
);

?>

## How To

Requires at least php `7.4`.
```bash
php README.php > README.md
```
