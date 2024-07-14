<php

// Fix: Use htmlspecialchars to prevent XSS by escaping special characters in the 'asdf' GET parameter.
echo htmlspecialchars($_GET['asdf'], ENT_QUOTES, 'UTF-8');

?>
