<?php

// Sanitize user input to prevent XSS attacks
echo htmlspecialchars($_GET['asdf'], ENT_QUOTES, 'UTF-8');

?>
