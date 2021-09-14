<?php

    switch(@parse_url($_SERVER['REQUEST_URI'])['path']) {
        case '/':
            $file_path = __DIR__.'/R00001.php';
            require($file_path);
            break;
        default:
            $routes = [
                'R00001', 
                'R00001_1', 
                'R00002', 
                'R00002_1',
                'R00003', 
                'R00004', 
                'R00005',
                'R00005_1', 
                'R00006', 
                'R00007', 
                'R00008', 
                'R00009', 
                'R00010', 
                'R00011', 
                'R00012', 
                'logout',
                'maileg',
            ];
            $regex = '/\/(' . join($routes, '|') . ')\.php/';
        
            $file_found = false;
            if(preg_match($regex, $_SERVER['REQUEST_URI'], $matches)){
                $file_path = __DIR__.$matches[0];
                if(file_exists($file_path)) {
                    $file_found = true;
                    require($file_path);
                    return;
                }
            }
        
            if(!$file_found) {
                http_response_code(404);
                exit('Not found');
            }
            break;
			fffffffffffffffffffffff
			ffffffffffff
			
			bbbbbbbbbbbbbbb
    }
