<?php
$monthNumber = (int) readline("Введите номер месяца (1-12): ");

switch ($monthNumber) {
    case 1:
    case 2:
    case 12:
        echo "Это зима.\n";
        break;
    case 3:
    case 4:
    case 5:
        echo "Это весна.\n";
        break;
    case 6:
    case 7:
    case 8:
        echo "Это лето.\n";
        break;
    case 9:
    case 10:
    case 11:
        echo "Это осень.\n";
        break;
    default:
        echo "Некорректный номер месяца.\n";
}
?>