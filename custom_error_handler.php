<?php
// Define custom error messages in Albanian
$errorMessages = array(
    E_ERROR => 'Gabim fatal',
    E_WARNING => 'Paralajmërim',
    E_PARSE => 'Gabim parse',
    E_NOTICE => 'Njoftim',
    E_CORE_ERROR => 'Gabim bërthamë',
    E_CORE_WARNING => 'Paralajmërim bërthamë',
    E_COMPILE_ERROR => 'Gabim përpilimi',
    E_COMPILE_WARNING => 'Paralajmërim përpilimi',
    E_USER_ERROR => 'Gabim i përdoruesit',
    E_USER_WARNING => 'Paralajmërim i përdoruesit',
    E_USER_NOTICE => 'Njoftim i përdoruesit',
    E_STRICT => 'Gabim i rreptë',
    E_RECOVERABLE_ERROR => 'Gabim i rikuperueshëm',
    E_DEPRECATED => 'Funksion i vjetëruar',
    E_USER_DEPRECATED => 'Funksion i vjetëruar nga përdoruesi'
);

// Define a custom error handling function
function customErrorHandler($errno, $errstr, $errfile, $errline, $errcontext) {
    global $errorMessages;

    // Translate the error type to Albanian
    $errtype = isset($errorMessages[$errno]) ? $errorMessages[$errno] : 'Gabim i panjohur';

    // Create an associative array with error details
    $errorDetails = array(
        'errno' => $errno,
        'errtype' => $errtype,
        'errstr' => $errstr,
        'errfile' => $errfile,
        'errline' => $errline,
        'errcontext' => $errcontext
    );

    // Log the error details (you can customize this to log to a file, database, etc.)
    error_log(print_r($errorDetails, true));

    // Display the error in Albanian
    echo "<pre>";
    echo "Lloji i Gabimit: $errtype\n";
    echo "Detaje: $errstr\n";
    echo "Skedari: $errfile\n";
    echo "Rreshti: $errline\n";
    echo "Konteksti: " . print_r($errcontext, true);
    echo "</pre>";

    // Ensure the PHP internal error handler is not bypassed
    return true;
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Example of an error to trigger the custom error handler
// Uncomment the line below to test the error handler
// echo $undefined_variable;
?>