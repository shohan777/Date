<?php
    date_default_timezone_set('Asia/Dhaka');
    $days = date('l');
    switch ($days) {
        case 'Saturday':
            echo "Today is Saturday.";
            break;
        case 'Sunday':
            echo "Today is Sunday.";
            break;
        case 'Monday':
            echo "Today is Monday.";
            break;
        case 'Tuesday':
            echo "Today is Tuesday.";
            break;
        case 'Wednesday':
            echo "Today is Wednesday.";
            break;
        case 'Thursday':
            echo "Today is Thursday.";
            break;
        case 'Friday':
            echo "Today is Friday.";
            break;

    }

 ?>