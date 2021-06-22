# Php array functions… with Emojis 🙂

Do you know [Php array functions](https://www.php.net/manual/en/ref.array.php)?
They are powerful, but sometimes tricky to handle… 😕

Here a cheat-sheet using Emoji, with some of my favorite _tricks_: Enjoy! 🎉


## Cheat-sheet
### `array_chunk`
```php
array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2);
```
```
[[🍎, 🍐], [🍊, 🍋], [🍌]]
```

### `array_chunk` with preserved keys
```php
array_chunk([🍎, 🍐, 🍊, 🍋, 🍌], 2, true);
```
```
[[🍎, 🍐], [2 => 🍊, 3 => 🍋], [4 => 🍌]]
```

### `array_column`
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

### `array_column` with an index
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

### `array_combine`
```php
array_combine(
    [😀, 😎, 🥶, 🤡, 🤠],
    [🍎, 🍐, 🍊, 🍋, 🍌]
);
```
```
[😀 => 🍎, 😎 => 🍐, 🥶 => 🍊, 🤡 => 🍋, 🤠 => 🍌]
```

### `array_count_values`
```php
array_count_values([🍎, 🍎, 🍌, 🍌, 🍎]);
```
```
[🍎 => 3, 🍌 => 2]
```

### `array_unique`
```php
array_unique([🍎, 🍎, 🍌, 🍌, 🍎]);
```
```
[0 => 🍎, 2 => 🍌]
```

### `array_unique` without preserving keys
```php
array_values(array_unique([🍎, 🍎, 🍌, 🍌, 🍎]));
```
```
[🍎, 🍌]
```


## How To

Requires at least php `7.4`.
```bash
php README.php > README.md
```
