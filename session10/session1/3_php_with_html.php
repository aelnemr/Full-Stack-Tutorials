<?php
#############################################
# PHP with HTML                             #
#############################################
?>

<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>

<?php
#############################################
# PHP var's with                            #
#############################################

# Single quoted
/* The simplest way to specify a string is to enclose it in single quotes (the character '). */

echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';


# Double quoted
/* If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters: */
// \n	linefeed (LF or 0x0A (10) in ASCII)
// \r	carriage return (CR or 0x0D (13) in ASCII)
// \t	horizontal tab (HT or 0x09 (9) in ASCII)
// \v	vertical tab (VT or 0x0B (11) in ASCII) (since PHP 5.2.5)
// \e	escape (ESC or 0x1B (27) in ASCII) (since PHP 5.4.4)
// \f	form feed (FF or 0x0C (12) in ASCII) (since PHP 5.2.5)
// \\	backslash
// \$	dollar sign
// \"	double-quote

echo "Start with a simple string";

// Outputs: String's apostrophe
echo "String's apostrophe";

// double-quote vs single-quote
$name = "Ahmed";

// Outputs: String with a php variable Ahmed
echo "String with a php variable {$name}";

// Outputs: String with a php variable {$name}
echo 'String with a php variable {$name}';
