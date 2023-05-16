<?php

$country = $_SERVER["HTTP_CF_IPCOUNTRY"];
$url = '';

switch ($country) {
    // Uncomment the country case statement you want to use and provide the redirection url
    
    //case 'US': // United States
    //    $url = 'https://example.com/us';
    //    break;
    
    //case 'GB': // United Kingdom
    //    $url = 'https://example.com/gb';
    //    break;
    
    //case 'DE': // Germany
    //    $url = 'https://example.com/de';
    //    break;
    
    //case 'FR': // France
    //    $url = 'https://example.com/fr';
    //    break;
    
    //case 'JP': // Japan
    //    $url = 'https://example.com/jp';
    //    break;
    
    //case 'IN': // India
    //    $url = 'https://example.com/in';
    //    break;
    
    //case 'BR': // Brazil
    //    $url = 'https://example.com/br';
    //    break;
    
    //case 'CN': // China
    //    $url = 'https://example.com/cn';
    //    break;
    
    //case 'AU': // Australia
    //    $url = 'https://example.com/au';
    //    break;
    
    //case 'ZA': // South Africa
    //    $url = 'https://example.com/za';
    //    break;

    default:
        $url = 'https://example.com/default';
        break;
}

header("Location: $url");
exit;
?>
