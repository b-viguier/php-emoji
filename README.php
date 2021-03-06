# Php array functionsβ¦ with Emojis π

Do you know [Php array functions](https://www.php.net/manual/en/ref.array.php)?
They are powerful, but sometimes tricky to handleβ¦ π

Here a cheat-sheet using Emoji, with some of my favorite _tricks_: Enjoy! π


## Cheat-sheet
<?php
require 'utils.php';

dump(
    fn() => array_chunk([π, π, π, π, π], 2)
);

dump(
    fn() => array_chunk([π, π, π, π, π], 2, true),
    '`array_chunk` with preserved keys'
);

dump(
    fn() => array_column(
        [
            ['people' => π, 'fruit' => π, 'animal' => πΆ],
            ['people' => π, 'fruit' => π, 'animal' => π­],
            ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
            ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
            ['people' => π€ , 'fruit' => π, 'animal' => π―],
        ],
        'fruit'
    )
);

dump(
    fn() => array_column(
        [
            ['people' => π, 'fruit' => π, 'animal' => πΆ],
            ['people' => π, 'fruit' => π, 'animal' => π­],
            ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
            ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
            ['people' => π€ , 'fruit' => π, 'animal' => π―],
        ],
        'fruit',
        'people'
    ),
    '`array_column` with an index'
);

dump(
    fn() => array_column(
        [
            ['people' => π, 'fruit' => π, 'animal' => πΆ],
            ['people' => π, 'fruit' => π, 'animal' => π­],
            ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
            ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
            ['people' => π€ , 'fruit' => π, 'animal' => π―],
        ],
        null,
        'people'
    ),
    '`array_column` all columns with an index'
);

dump(
    fn() => array_combine(
        [π, π, π₯Ά, π€‘, π€ ],
        [π, π, π, π, π]
    )
);

dump(
    fn() => array_count_values([π, π, π, π, π])
);

dump(
    fn() => array_diff(
        [π, π, π, π, π],
        [β, π], [β, π], [β, π]
    )
);

dump(
    fn() => array_diff_key(
        [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π],
        [πΆ => β, π­ => β], [π° => β]
    )
);

dump(
    fn() => array_fill_keys([π, π, π, π, π], β)
);

dump(
    fn() => array_fill(2, 3, π)
);

dump(
    fn() => array_filter([π, 0, π, false, π, null, π, '', π])
);

dump(
    fn() => array_filter([π, π, π, π, π], fn($β) => $β === π),
    '`array_filter` with callback'
);

dump(
    fn() => array_flip([πΆ => π, π­ => π, π° => π, π¦ => π, π― => π])
);

dump(
    fn() => array_intersect(
        [π, π, π, π, π],
        [β, π, π], [π, π]
    )
);

dump(
    fn() => array_intersect_key(
        [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π],
        [πΆ => β, π¦ => β], [π¦ => β, π― => β]
    )
);

dump(
    fn() => array_keys(
        [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π]
    )
);

dump(
    fn() => array_map(
        fn($π€, $π½) => "$π€ β€οΈ $π½",
        [π, π, π₯Ά, π€‘],
        [π, π, π, π, π]
    )
);

dump(
    fn() => array_map(
        null,
        [π, π, π₯Ά, π€‘, π€ ],
        [π, π, π, π],
        [πΆ, π­, π°, π¦, π―]
    ),
    '`array_map` with `null` callback'
);

dump(
    fn() => array_merge(
        [πΆ => π, π­ => π, π° => β],
        [π° => π, π¦ => β, π― => π],
        [π¦ => π],
    )
);

dump(
    fn() => [πΆ => π, π­ => π, π° => π] +
        [π° => β, π¦ => π, π― => π] +
        [π¦ => β],
    'Union operator',
    'https://www.php.net/manual/en/language.operators.array.php'
);

dump(
    fn() => array_merge([π, π], [π, π], [π]),
    '`array_merge` with integer keys'
);

dump(
    fn() => [π, π] + [π, π] + [π],
    'Union operator with integer keys',
    'https://www.php.net/manual/en/language.operators.array.php'
);

dump(
    fn() => array_pad([π, π], 5, π)
);

dump(
    fn() => array_reverse([π, π, π, π, π])
);

dump(
    fn() => array_reverse([π, π, π, π, π], true),
    '`array_reverse` with preserved keys'
);

dump(
    fn() => array_slice([π, π, π, π, π], 1, 3)
);

dump(
    fn() => array_slice([π, π, π, π, π], 1, 3, true),
    '`array_slice` with preserved keys'
);

dump(
    fn() => array_unique([π, π, π, π, π])
);

dump(
    fn() => array_values(
        [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π]
    )
);

?>

## Advanced usage

These are what I call _array tipsΒ©_:
* Single statement
* No anonymous function (but short arrow functions are allowed π)
* π€―

β οΈ Do not use it in production, unless **ALL** your team understand it! π

<?php

dump(
    fn() => !(
        ($data = [
            ['people' => π, 'fruit' => π, 'score' => 2],
            ['people' => π, 'fruit' => π, 'score' => 4],
            ['people' => π₯Ά, 'fruit' => π, 'score' => 3],
            ['people' => π€‘, 'fruit' => π, 'score' => 1],
            ['people' => π€ , 'fruit' => π, 'score' => 5],
        ]) && array_multisort(
            array_column($data, 'score'),
            $data
        )
    ) ?: $data,
    '`array_multisort`: sort multidimensional array'
);

dump(
    fn() => !($data = [
        ['people' => π, 'fruit' => π, 'animal' => πΆ],
        ['people' => π, 'fruit' => π, 'animal' => π­],
        ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
        ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
        ['people' => π€ , 'fruit' => π, 'animal' => π―],
    ]) ?: array_column($data, null, 'fruit')[π] ?? null,
    '`array_column`: search last element'
);


dump(
    fn() => !($data = [
        ['people' => π, 'fruit' => π, 'animal' => πΆ],
        ['people' => π, 'fruit' => π, 'animal' => π­],
        ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
        ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
        ['people' => π€ , 'fruit' => π, 'animal' => π―],
    ]) ?: array_values(
        array_intersect_key(
            $data,
            array_intersect(
                array_column($data, 'fruit'),
                [π, π]
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
            [π, π, πΆ],
            [π, π, π­],
            [π₯Ά, π, π°],
            [π€‘, π, π¦],
            [π€ , π, π―],
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
