<?php


const 🍎 = '🍎';
const 🍐 = '🍐';
const 🍊 = '🍊';
const 🍋 = '🍋';
const 🍌 = '🍌';

const 😀 = '😀';
const 😎 = '😎';
const 🥶 = '🥶';
const 🤡 = '🤡';
const 🤠 = '🤠';

const 🐶 = '🐶';
const 🐭 = '🐭';
const 🐰 = '🐰';
const 🦊 = '🦊';
const 🐯 = '🐯';

$linesOfCode = file(__DIR__ . DIRECTORY_SEPARATOR . 'README.php');

function dump(string $title, callable $fn): void {
    global $linesOfCode;

    $reflection = new ReflectionFunction($fn);
    $start = $reflection->getStartLine();
    $length = $reflection->getEndLine() - $start;
    $lines = array_map(
        fn(string $line) => substr($line, 4),   // Remove indentation (4 spaces)
        array_slice($linesOfCode, $start-1, max(1, $length))
    );
    $lines[0] = substr($lines[0], 8); // Remove "fn() => "
    $code = trim(join('', $lines));

    echo "### $title\n```php\n";
    echo "$code;\n```\n```\n" . dumpArray($fn()) . "\n```\n\n";
}

function dumpArray(array $array): string {
    $parts = [];
    foreach ($array as $elmt) {
        if (is_array($elmt)) {
            $parts[] = dumpArray($elmt);
        } else {
            $parts[] = $elmt;
        }
    }

    $keys = array_keys($array);
    if($keys !== range(0, count($keys)-1)) {
        $parts = array_map(fn($k, $v) => "$k => $v", $keys, $parts);
    }

    return '[' . join(', ', $parts) . ']';
}