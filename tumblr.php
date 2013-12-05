<?php
// Authenticate via OAuth
$client = new Tumblr\API\Client(
  '0bo922vcuuKNCrzKyn6FMoBtwaQnUfbP2Oyjy31gHh3XnuaKbC',
  '3giRdRGmqG3RwYcBT93SB0l4Yo0r3ScWMmygW0AV4nmVxzQxnZ',
  'DulqdaVZaj3px5FCxDq37HU6NOgzaIc04X7h446GzVg8aoG5Mf',
  'jW6AKXLk7CgHPM8cpqxIJN5iCkbF4tPQlZH3dtUz8OQuzexnqu'
);

// Make the request
$client->getDashboardPosts(array('type' => 'photo'));
?>
