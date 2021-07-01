  
<?php

$comicsShop = new Catalogue ('Worlds Finest - Comics Shop');

$comic_001 = new Comicbook('Superman #159', 'Superman', 'DC', '02/2021', 'US', 'J. Strazinsky', 'R. Morales', 'eng', 32, 'comic', true);
$comic_002 = new Comicbook('Batman #147', 'Batman', 'DC', '03/2021', 'US', 'G. Morrison', 'T. Daniels', 'eng', 32, 'comic', true);
$comic_003 = new Comicbook('Ultimate Spider-man #12', 'Spider-man', 'Marvel', '08/2002', 'US', 'B. M. Bendis', 'M. Bagley', 'eng', 32, 'comic', true);
$comic_004 = new Comicbook('V for Vendetta', 'One-shot', 'Vertigo', '01/1991', 'US', 'A. Moore', 'D. Lloyd', 'eng', 185, 'hard-cover', true);
$comic_005 = new Comicbook('Dylan Dog #121', 'Dylan Dog', 'Bonelli', '01/1995', 'IT', 'T. Sclavi', 'B. Brindisi', 'ita', 98, 'trade-paperback', false);

$bray_001 = new Bluray ('Man of Steel', 'movie', '2012', 'US', 'action', 'Warner Bros', 'Zack Snyder', 'Henry Cavill, Amy Adams');
$bray_002 = new Bluray ('Dellamorte Dellamore', 'movie', '1995', 'IT', 'drama', 'Rai Cinema', 'Michele Soavi', 'Rupert Everett');
$bray_003 = new Bluray ('Arrow - Season 1', 'tv', '2011', 'US', 'action', 'CW', 'Greg Berlanti', 'Stephen Ammel');

$afigure_001 = new Actionfigures ('Hell Spawn', 'McFarlane Toys', 'Statue', 'plastic', 2002);
$afigure_002 = new Actionfigures ('Magic', 'Hasbro', 'Role playing game', 'hard-paper', 2019);
$afigure_003 = new Actionfigures ('Jason Funko Pop', 'Blumhouse', 'FunkoPop', 'plastic', 2017);