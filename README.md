# Php array functions… with Emojis 🙂

Do you know [Php array functions](https://www.php.net/manual/en/ref.array.php)?
They are powerful, but sometimes tricky to handle… 😕

Here a cheat-sheet using Emoji, with some of my favorite _tricks_: Enjoy! 🎉


## Cheat-sheet
### [`array_chunk`](https://www.php.net/manual/en/function.array-chunk.php)
```php
array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2);
```
```
[
    [🍎, 🍐], 
    [🍊, 🍋], 
    [🍌],
]
```

### [`array_chunk` with preserved keys](https://www.php.net/manual/en/function.array-chunk.php)
```php
array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2, true);
```
```
[
    [🍎, 🍐], 
    [2 => 🍊, 3 => 🍋], 
    [4 => 🍌],
]
```

### [`array_column`](https://www.php.net/manual/en/function.array-column.php)
```php
array_column(
    [
        ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
        ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
        ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
        ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
        ['people' => 🤠, 'fruit' => 🍌, 'animal' => 🐯],
    ],
    'fruit'
);
```
```
[🍎, 🍐, 🍊, 🍋, 🍌]
```

### [`array_column` with an index](https://www.php.net/manual/en/function.array-column.php)
```php
array_column(
    [
        ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
        ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
        ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
        ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
        ['people' => 🤠, 'fruit' => 🍌, 'animal' => 🐯],
    ],
    'fruit',
    'people'
);
```
```
[😀 => 🍎, 😎 => 🍐, 🥶 => 🍊, 🤡 => 🍋, 🤠 => 🍌]
```

### [`array_column` all columns with an index](https://www.php.net/manual/en/function.array-column.php)
```php
array_column(
    [
        ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
        ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
        ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
        ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
        ['people' => 🤠, 'fruit' => 🍌, 'animal' => 🐯],
    ],
    null,
    'people'
);
```
```
[
    😀 => ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶], 
    😎 => ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭], 
    🥶 => ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰], 
    🤡 => ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊], 
    🤠 => ['people' => 🤠, 'fruit' => 🍌, 'animal' => 🐯],
]
```

### [`array_combine`](https://www.php.net/manual/en/function.array-combine.php)
```php
array_combine(
    [😀, 😎, 🥶, 🤡, 🤠],
    [🍎, 🍐, 🍊, 🍋, 🍌]
);
```
```
[😀 => 🍎, 😎 => 🍐, 🥶 => 🍊, 🤡 => 🍋, 🤠 => 🍌]
```

### [`array_count_values`](https://www.php.net/manual/en/function.array-count-values.php)
```php
array_count_values([🍎, 🍎, 🍌, 🍌, 🍎]);
```
```
[🍎 => 3, 🍌 => 2]
```

### [`array_diff`](https://www.php.net/manual/en/function.array-diff.php)
```php
array_diff(
    [🍎, 🍐, 🍊, 🍋, 🍌],
    [❌, 🍐], [❌, 🍊], [❌, 🍋]
);
```
```
[0 => 🍎, 4 => 🍌]
```

### [`array_diff_key`](https://www.php.net/manual/en/function.array-diff-key.php)
```php
array_diff_key(
    [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌],
    [🐶 => ❌, 🐭 => ❌], [🐰 => ❌]
);
```
```
[🦊 => 🍋, 🐯 => 🍌]
```

### [`array_fill_keys`](https://www.php.net/manual/en/function.array-fill-keys.php)
```php
array_fill_keys([🍎, 🍐, 🍊, 🍋, 🍌], ✅);
```
```
[🍎 => ✅, 🍐 => ✅, 🍊 => ✅, 🍋 => ✅, 🍌 => ✅]
```

### [`array_fill`](https://www.php.net/manual/en/function.array-fill.php)
```php
array_fill(2, 3, 🍌);
```
```
[2 => 🍌, 3 => 🍌, 4 => 🍌]
```

### [`array_filter`](https://www.php.net/manual/en/function.array-filter.php)
```php
array_filter([🍎, 0, 🍐, false, 🍊, null, 🍋, '', 🍌]);
```
```
[0 => 🍎, 2 => 🍐, 4 => 🍊, 6 => 🍋, 8 => 🍌]
```

### [`array_filter` with callback](https://www.php.net/manual/en/function.array-filter.php)
```php
array_filter([🍎, 🍐, 🍎, 🍋, 🍌], fn($❓) => $❓ === 🍎);
```
```
[0 => 🍎, 2 => 🍎]
```

### [`array_flip`](https://www.php.net/manual/en/function.array-flip.php)
```php
array_flip([🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍎, 🦊 => 🍋, 🐯 => 🍌]);
```
```
[🍎 => 🐰, 🍐 => 🐭, 🍋 => 🦊, 🍌 => 🐯]
```

### [`array_intersect`](https://www.php.net/manual/en/function.array-intersect.php)
```php
array_intersect(
    [🍎, 🍐, 🍊, 🍋, 🍌],
    [❌, 🍊, 🍐], [🍊, 🍌]
);
```
```
[2 => 🍊]
```

### [`array_intersect_key`](https://www.php.net/manual/en/function.array-intersect-key.php)
```php
array_intersect_key(
    [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌],
    [🐶 => ❌, 🦊 => ✅], [🦊 => ✅, 🐯 => ❌]
);
```
```
[🦊 => 🍋]
```

### [`array_keys`](https://www.php.net/manual/en/function.array-keys.php)
```php
array_keys(
    [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌]
);
```
```
[🐶, 🐭, 🐰, 🦊, 🐯]
```

### [`array_map`](https://www.php.net/manual/en/function.array-map.php)
```php
array_map(
    fn($👤, $🍽) => "$👤 ❤️ $🍽",
    [😀, 😎, 🥶, 🤡],
    [🍎, 🍐, 🍊, 🍋, 🍌]
);
```
```
['😀 ❤️ 🍎', '😎 ❤️ 🍐', '🥶 ❤️ 🍊', '🤡 ❤️ 🍋', ' ❤️ 🍌']
```

### [`array_map` with `null` callback](https://www.php.net/manual/en/function.array-map.php)
```php
array_map(
    null,
    [😀, 😎, 🥶, 🤡, 🤠],
    [🍎, 🍐, 🍊, 🍋],
    [🐶, 🐭, 🐰, 🦊, 🐯]
);
```
```
[
    [😀, 🍎, 🐶], 
    [😎, 🍐, 🐭], 
    [🥶, 🍊, 🐰], 
    [🤡, 🍋, 🦊], 
    [🤠, null, 🐯],
]
```

### [`array_merge`](https://www.php.net/manual/en/function.array-merge.php)
```php
array_merge(
    [🐶 => 🍎, 🐭 => 🍐, 🐰 => ❌],
    [🐰 => 🍊, 🦊 => ❌, 🐯 => 🍌],
    [🦊 => 🍋],
);
```
```
[🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌]
```

### [Union operator](https://www.php.net/manual/en/language.operators.array.php)
```php
[🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊] +
    [🐰 => ❌, 🦊 => 🍋, 🐯 => 🍌] +
    [🦊 => ❌];
```
```
[🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌]
```

### [`array_merge` with integer keys](https://www.php.net/manual/en/function.array-merge.php)
```php
array_merge([🍎, 🍐], [🍊, 🍌], [🍋]);
```
```
[🍎, 🍐, 🍊, 🍌, 🍋]
```

### [Union operator with integer keys](https://www.php.net/manual/en/language.operators.array.php)
```php
[🍎, 🍐] + [🍊, 🍌] + [🍋];
```
```
[🍎, 🍐]
```

### [`array_pad`](https://www.php.net/manual/en/function.array-pad.php)
```php
array_pad([🍎, 🍐], 5, 🍌);
```
```
[🍎, 🍐, 🍌, 🍌, 🍌]
```

### [`array_reverse`](https://www.php.net/manual/en/function.array-reverse.php)
```php
array_reverse([🍎, 🍐, 🍊, 🍋, 🍌]);
```
```
[🍌, 🍋, 🍊, 🍐, 🍎]
```

### [`array_reverse` with preserved keys](https://www.php.net/manual/en/function.array-reverse.php)
```php
array_reverse([🍎, 🍐, 🍊, 🍋, 🍌], true);
```
```
[4 => 🍌, 3 => 🍋, 2 => 🍊, 1 => 🍐, 0 => 🍎]
```

### [`array_slice`](https://www.php.net/manual/en/function.array-slice.php)
```php
array_slice([🍎, 🍌, 🍌, 🍌, 🍎], 1, 3);
```
```
[🍌, 🍌, 🍌]
```

### [`array_slice` with preserved keys](https://www.php.net/manual/en/function.array-slice.php)
```php
array_slice([🍎, 🍌, 🍌, 🍌, 🍎], 1, 3, true);
```
```
[1 => 🍌, 2 => 🍌, 3 => 🍌]
```

### [`array_unique`](https://www.php.net/manual/en/function.array-unique.php)
```php
array_unique([🍎, 🍎, 🍌, 🍌, 🍎]);
```
```
[0 => 🍎, 2 => 🍌]
```

### [`array_values`](https://www.php.net/manual/en/function.array-values.php)
```php
array_values(
    [🐶 => 🍎, 🐭 => 🍐, 🐰 => 🍊, 🦊 => 🍋, 🐯 => 🍌]
);
```
```
[🍎, 🍐, 🍊, 🍋, 🍌]
```


## Advanced usage

These are what I call _array tips©_:
* Single statement
* No anonymous function (but short arrow functions are allowed 😉)
* 🤯

⚠️ Do not use it in production, unless **ALL** your team understand it! 😅

### [`array_multisort`: sort multidimensional array](https://www.php.net/manual/en/function.array-multisort.php)
```php
!(
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
) ?: $data;
```
```
[
    ['people' => 🤡, 'fruit' => 🍋, 'score' => 1], 
    ['people' => 😀, 'fruit' => 🍎, 'score' => 2], 
    ['people' => 🥶, 'fruit' => 🍊, 'score' => 3], 
    ['people' => 😎, 'fruit' => 🍐, 'score' => 4], 
    ['people' => 🤠, 'fruit' => 🍌, 'score' => 5],
]
```

### [`array_column`: search last element](https://www.php.net/manual/en/function.array-column.php)
```php
!($data = [
    ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶],
    ['people' => 😎, 'fruit' => 🍐, 'animal' => 🐭],
    ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰],
    ['people' => 🤡, 'fruit' => 🍋, 'animal' => 🦊],
    ['people' => 🤠, 'fruit' => 🍊, 'animal' => 🐯],
]) ?: array_column($data, null, 'fruit')[🍊] ?? null;
```
```
['people' => 🤠, 'fruit' => 🍊, 'animal' => 🐯]
```

### [`array_intersect`: filtering elements](https://www.php.net/manual/en/function.array-intersect.php)
```php
!($data = [
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
);
```
```
[
    ['people' => 😀, 'fruit' => 🍎, 'animal' => 🐶], 
    ['people' => 🥶, 'fruit' => 🍊, 'animal' => 🐰], 
    ['people' => 🤠, 'fruit' => 🍊, 'animal' => 🐯],
]
```

### [`array_map`: numerical statistics](https://www.php.net/manual/en/function.array-map.php)
```php
!($data = [1, 2, 3, 4, 5, 6]) ?: [
    'count' => $count = count($data),
    'average' => $avg = array_sum($data) / $count,
    'variance' => array_sum(
            array_map(
                array_product(...),
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
        [😀, 🍎, 🐶],
        [😎, 🍐, 🐭],
        [🥶, 🍊, 🐰],
        [🤡, 🍋, 🦊],
        [🤠, 🍊, 🐯],
    ]
);
```
```
[
    [😀, 😎, 🥶, 🤡, 🤠], 
    [🍎, 🍐, 🍊, 🍋, 🍊], 
    [🐶, 🐭, 🐰, 🦊, 🐯],
]
```


## How To

Requires at least php `7.4`.
```bash
php README.php > README.md
```
