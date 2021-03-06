# Php array functionsβ¦ with Emojis π

Do you know [Php array functions](https://www.php.net/manual/en/ref.array.php)?
They are powerful, but sometimes tricky to handleβ¦ π

Here a cheat-sheet using Emoji, with some of my favorite _tricks_: Enjoy! π


## Cheat-sheet
### [`array_chunk`](https://www.php.net/manual/en/function.array-chunk.php)
```php
array_chunk([π, π, π, π, π], 2);
```
```
[
    [π, π], 
    [π, π], 
    [π],
]
```

### [`array_chunk` with preserved keys](https://www.php.net/manual/en/function.array-chunk.php)
```php
array_chunk([π, π, π, π, π], 2, true);
```
```
[
    [π, π], 
    [2 => π, 3 => π], 
    [4 => π],
]
```

### [`array_column`](https://www.php.net/manual/en/function.array-column.php)
```php
array_column(
    [
        ['people' => π, 'fruit' => π, 'animal' => πΆ],
        ['people' => π, 'fruit' => π, 'animal' => π­],
        ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
        ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
        ['people' => π€ , 'fruit' => π, 'animal' => π―],
    ],
    'fruit'
);
```
```
[π, π, π, π, π]
```

### [`array_column` with an index](https://www.php.net/manual/en/function.array-column.php)
```php
array_column(
    [
        ['people' => π, 'fruit' => π, 'animal' => πΆ],
        ['people' => π, 'fruit' => π, 'animal' => π­],
        ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
        ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
        ['people' => π€ , 'fruit' => π, 'animal' => π―],
    ],
    'fruit',
    'people'
);
```
```
[π => π, π => π, π₯Ά => π, π€‘ => π, π€  => π]
```

### [`array_column` all columns with an index](https://www.php.net/manual/en/function.array-column.php)
```php
array_column(
    [
        ['people' => π, 'fruit' => π, 'animal' => πΆ],
        ['people' => π, 'fruit' => π, 'animal' => π­],
        ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
        ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
        ['people' => π€ , 'fruit' => π, 'animal' => π―],
    ],
    null,
    'people'
);
```
```
[
    π => ['people' => π, 'fruit' => π, 'animal' => πΆ], 
    π => ['people' => π, 'fruit' => π, 'animal' => π­], 
    π₯Ά => ['people' => π₯Ά, 'fruit' => π, 'animal' => π°], 
    π€‘ => ['people' => π€‘, 'fruit' => π, 'animal' => π¦], 
    π€  => ['people' => π€ , 'fruit' => π, 'animal' => π―],
]
```

### [`array_combine`](https://www.php.net/manual/en/function.array-combine.php)
```php
array_combine(
    [π, π, π₯Ά, π€‘, π€ ],
    [π, π, π, π, π]
);
```
```
[π => π, π => π, π₯Ά => π, π€‘ => π, π€  => π]
```

### [`array_count_values`](https://www.php.net/manual/en/function.array-count-values.php)
```php
array_count_values([π, π, π, π, π]);
```
```
[π => 3, π => 2]
```

### [`array_diff`](https://www.php.net/manual/en/function.array-diff.php)
```php
array_diff(
    [π, π, π, π, π],
    [β, π], [β, π], [β, π]
);
```
```
[0 => π, 4 => π]
```

### [`array_diff_key`](https://www.php.net/manual/en/function.array-diff-key.php)
```php
array_diff_key(
    [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π],
    [πΆ => β, π­ => β], [π° => β]
);
```
```
[π¦ => π, π― => π]
```

### [`array_fill_keys`](https://www.php.net/manual/en/function.array-fill-keys.php)
```php
array_fill_keys([π, π, π, π, π], β);
```
```
[π => β, π => β, π => β, π => β, π => β]
```

### [`array_fill`](https://www.php.net/manual/en/function.array-fill.php)
```php
array_fill(2, 3, π);
```
```
[2 => π, 3 => π, 4 => π]
```

### [`array_filter`](https://www.php.net/manual/en/function.array-filter.php)
```php
array_filter([π, 0, π, false, π, null, π, '', π]);
```
```
[0 => π, 2 => π, 4 => π, 6 => π, 8 => π]
```

### [`array_filter` with callback](https://www.php.net/manual/en/function.array-filter.php)
```php
array_filter([π, π, π, π, π], fn($β) => $β === π);
```
```
[0 => π, 2 => π]
```

### [`array_flip`](https://www.php.net/manual/en/function.array-flip.php)
```php
array_flip([πΆ => π, π­ => π, π° => π, π¦ => π, π― => π]);
```
```
[π => π°, π => π­, π => π¦, π => π―]
```

### [`array_intersect`](https://www.php.net/manual/en/function.array-intersect.php)
```php
array_intersect(
    [π, π, π, π, π],
    [β, π, π], [π, π]
);
```
```
[2 => π]
```

### [`array_intersect_key`](https://www.php.net/manual/en/function.array-intersect-key.php)
```php
array_intersect_key(
    [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π],
    [πΆ => β, π¦ => β], [π¦ => β, π― => β]
);
```
```
[π¦ => π]
```

### [`array_keys`](https://www.php.net/manual/en/function.array-keys.php)
```php
array_keys(
    [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π]
);
```
```
[πΆ, π­, π°, π¦, π―]
```

### [`array_map`](https://www.php.net/manual/en/function.array-map.php)
```php
array_map(
    fn($π€, $π½) => "$π€ β€οΈ $π½",
    [π, π, π₯Ά, π€‘],
    [π, π, π, π, π]
);
```
```
['π β€οΈ π', 'π β€οΈ π', 'π₯Ά β€οΈ π', 'π€‘ β€οΈ π', ' β€οΈ π']
```

### [`array_map` with `null` callback](https://www.php.net/manual/en/function.array-map.php)
```php
array_map(
    null,
    [π, π, π₯Ά, π€‘, π€ ],
    [π, π, π, π],
    [πΆ, π­, π°, π¦, π―]
);
```
```
[
    [π, π, πΆ], 
    [π, π, π­], 
    [π₯Ά, π, π°], 
    [π€‘, π, π¦], 
    [π€ , null, π―],
]
```

### [`array_merge`](https://www.php.net/manual/en/function.array-merge.php)
```php
array_merge(
    [πΆ => π, π­ => π, π° => β],
    [π° => π, π¦ => β, π― => π],
    [π¦ => π],
);
```
```
[πΆ => π, π­ => π, π° => π, π¦ => π, π― => π]
```

### [Union operator](https://www.php.net/manual/en/language.operators.array.php)
```php
[πΆ => π, π­ => π, π° => π] +
    [π° => β, π¦ => π, π― => π] +
    [π¦ => β];
```
```
[πΆ => π, π­ => π, π° => π, π¦ => π, π― => π]
```

### [`array_merge` with integer keys](https://www.php.net/manual/en/function.array-merge.php)
```php
array_merge([π, π], [π, π], [π]);
```
```
[π, π, π, π, π]
```

### [Union operator with integer keys](https://www.php.net/manual/en/language.operators.array.php)
```php
[π, π] + [π, π] + [π];
```
```
[π, π]
```

### [`array_pad`](https://www.php.net/manual/en/function.array-pad.php)
```php
array_pad([π, π], 5, π);
```
```
[π, π, π, π, π]
```

### [`array_reverse`](https://www.php.net/manual/en/function.array-reverse.php)
```php
array_reverse([π, π, π, π, π]);
```
```
[π, π, π, π, π]
```

### [`array_reverse` with preserved keys](https://www.php.net/manual/en/function.array-reverse.php)
```php
array_reverse([π, π, π, π, π], true);
```
```
[4 => π, 3 => π, 2 => π, 1 => π, 0 => π]
```

### [`array_slice`](https://www.php.net/manual/en/function.array-slice.php)
```php
array_slice([π, π, π, π, π], 1, 3);
```
```
[π, π, π]
```

### [`array_slice` with preserved keys](https://www.php.net/manual/en/function.array-slice.php)
```php
array_slice([π, π, π, π, π], 1, 3, true);
```
```
[1 => π, 2 => π, 3 => π]
```

### [`array_unique`](https://www.php.net/manual/en/function.array-unique.php)
```php
array_unique([π, π, π, π, π]);
```
```
[0 => π, 2 => π]
```

### [`array_values`](https://www.php.net/manual/en/function.array-values.php)
```php
array_values(
    [πΆ => π, π­ => π, π° => π, π¦ => π, π― => π]
);
```
```
[π, π, π, π, π]
```


## Advanced usage

These are what I call _array tipsΒ©_:
* Single statement
* No anonymous function (but short arrow functions are allowed π)
* π€―

β οΈ Do not use it in production, unless **ALL** your team understand it! π

### [`array_multisort`: sort multidimensional array](https://www.php.net/manual/en/function.array-multisort.php)
```php
!(
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
) ?: $data;
```
```
[
    ['people' => π€‘, 'fruit' => π, 'score' => 1], 
    ['people' => π, 'fruit' => π, 'score' => 2], 
    ['people' => π₯Ά, 'fruit' => π, 'score' => 3], 
    ['people' => π, 'fruit' => π, 'score' => 4], 
    ['people' => π€ , 'fruit' => π, 'score' => 5],
]
```

### [`array_column`: search last element](https://www.php.net/manual/en/function.array-column.php)
```php
!($data = [
    ['people' => π, 'fruit' => π, 'animal' => πΆ],
    ['people' => π, 'fruit' => π, 'animal' => π­],
    ['people' => π₯Ά, 'fruit' => π, 'animal' => π°],
    ['people' => π€‘, 'fruit' => π, 'animal' => π¦],
    ['people' => π€ , 'fruit' => π, 'animal' => π―],
]) ?: array_column($data, null, 'fruit')[π] ?? null;
```
```
['people' => π€ , 'fruit' => π, 'animal' => π―]
```

### [`array_intersect`: filtering elements](https://www.php.net/manual/en/function.array-intersect.php)
```php
!($data = [
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
);
```
```
[
    ['people' => π, 'fruit' => π, 'animal' => πΆ], 
    ['people' => π₯Ά, 'fruit' => π, 'animal' => π°], 
    ['people' => π€ , 'fruit' => π, 'animal' => π―],
]
```

### [`array_map`: numerical statistics](https://www.php.net/manual/en/function.array-map.php)
```php
!($data = [1, 2, 3, 4, 5, 6]) ?: [
    'count' => $count = count($data),
    'average' => $avg = array_sum($data) / $count,
    'variance' => array_sum(
            array_map(
                'array_product',
                array_map(null, $data, $data)
            )
        ) / $count - $avg ** 2,
];
```
```
['count' => 6, 'average' => 3.5, 'variance' => 2.9166666666667]
```

### [`array_map`: matrix transposition](https://www.php.net/manual/en/function.array-map.php)
```php
array_map(
        null,
    ...[
        [π, π, πΆ],
        [π, π, π­],
        [π₯Ά, π, π°],
        [π€‘, π, π¦],
        [π€ , π, π―],
    ]
);
```
```
[
    [π, π, π₯Ά, π€‘, π€ ], 
    [π, π, π, π, π], 
    [πΆ, π­, π°, π¦, π―],
]
```


## How To

Requires at least php `7.4`.
```bash
php README.php > README.md
```
