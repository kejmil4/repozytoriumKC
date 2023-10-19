<?php
function podaj_naglowek(string $content, int $level)
{
    return "<h$level>$content</h$level>";
}
