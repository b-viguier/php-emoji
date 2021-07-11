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

const ❌ = '❌';
const ✅ = '✅';

$linesOfCode = file(__DIR__.DIRECTORY_SEPARATOR.'README.php');

function dump(callable $fn, string $title = null, string $url = null): void
{
    global $linesOfCode;

    $reflection = new ReflectionFunction($fn);
    $start = $reflection->getStartLine();
    $length = $reflection->getEndLine() - $start + ($title === null ? 0 : 1);
    $lines = array_map(
        fn(string $line) => substr($line, 4),   // Remove indentation (4 spaces)
        array_slice($linesOfCode, $start - 1, $length)
    );
    $lines[0] = substr($lines[0], 8); // Remove "fn() => "
    $code = rtrim(trim(join('', $lines)), ',');

    if ($title === null) {
        $funcName = strstr($code, '(', true);
        $title = '`'.$funcName.'`';
    } else {
        $funcName = substr($title, $start = 1 + strpos($title, '`'), strpos($title, '`', $start) - $start);
    }

    if(null === $url) {
        $funcUrl = str_replace('_', '-', $funcName);
        $url = "https://www.php.net/manual/en/function.$funcUrl.php";
    }

    echo "### [$title]($url)\n```php\n";
    echo "$code;\n```\n```\n".dumpArray($fn())."\n```\n\n";
}

function dumpArray(array $array): string
{
    if ([] === $array) {
        return '[]';
    }

    $isStringButNotAnEmoji = fn($var) => is_string($var) && strlen($var) != 3 && strlen($var) != 4;

    $parts = [];
    foreach ($array as $elmt) {
        if (is_array($elmt)) {
            $parts[] = dumpArray($elmt);
        } elseif ($isStringButNotAnEmoji($elmt)) {
            $parts[] = "'$elmt'";
        } elseif ($elmt === null) {
            $parts[] = 'null';
        } else {
            $parts[] = $elmt;
        }
    }

    $keys = array_keys($array);
    if ($keys !== range(0, count($keys) - 1)) {
        $parts = array_map(fn($k, $v) => $isStringButNotAnEmoji($k) ? "'$k' => $v" : "$k => $v", $keys, $parts);
    }

    // Assume array homogeneity + no more than 1 sub level
    return is_array(reset($array)) ?
        "[\n    ".join(", \n    ", $parts).",\n]"
        : '['.join(', ', $parts).']';;
}