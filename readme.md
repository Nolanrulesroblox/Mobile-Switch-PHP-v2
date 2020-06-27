
# Welcome to Mobile-php v2.

by NRRINC Media

# How it works:

[![](https://mermaid.ink/img/eyJjb2RlIjoiZ3JhcGggVERcblx0QVtJbmRleC5waHBdIC0tPnxTZWUgZGV2aWNlfCBCKEdyYWIgVXNlciBBZ2VudClcblx0QiAtLT4gQ3tNb3ZlIGRldmljZX1cblx0QyAtLT58TW9iaWxlfCBEW21vYmlsZS5waHBdXG5cdEMgLS0-fERlc2t0b3B8IEVbZGVza3RvcC5waHBdXG5cdEMgLS0-fFVua25vd258IEZbZGVza3RvcC5waHBdXG5cdFx0XHRcdFx0IiwibWVybWFpZCI6eyJ0aGVtZSI6ImRlZmF1bHQifSwidXBkYXRlRWRpdG9yIjpmYWxzZX0)](https://mermaid-js.github.io/mermaid-live-editor/#/edit/eyJjb2RlIjoiZ3JhcGggVERcblx0QVtJbmRleC5waHBdIC0tPnxTZWUgZGV2aWNlfCBCKEdyYWIgVXNlciBBZ2VudClcblx0QiAtLT4gQ3tNb3ZlIGRldmljZX1cblx0QyAtLT58TW9iaWxlfCBEW21vYmlsZS5waHBdXG5cdEMgLS0-fERlc2t0b3B8IEVbZGVza3RvcC5waHBdXG5cdEMgLS0-fFVua25vd258IEZbZGVza3RvcC5waHBdXG5cdFx0XHRcdFx0IiwibWVybWFpZCI6eyJ0aGVtZSI6ImRlZmF1bHQifSwidXBkYXRlRWRpdG9yIjpmYWxzZX0)
# How to use

You make your Mobile page and your main Desktop page.

  

You set the URL to the File of your Main and Mobile Page.

```php

if ($tablet_browser > 0) {

$device ='<div class="hello"><a href="https://github.com">link inside of a div...</a></div>';

}

else  if ($mobile_browser > 0) {

$device = header('Location: https://domain.com/file/index.php');

}

else {

$device = header('Location: /file/m.php');

}

```

# How to use inside-mobile

  

You use this one if your files are in different parts of the server. (Ex: Index is in /home/cool and the M.php is in /r/cool/files/whyisitgoingthislong)

  

**REMEMBER** This does NOT work with Divs, as They are not files. only use $path for files.

  

```php

<?php

$path = $_SERVER['DOCUMENT_ROOT'];

$path  .=  "/hello/m.php";

include_once($path);

?>

```

*or*

```php

<?php

else {

$device =

$path = $_SERVER['DOCUMENT_ROOT'];

$path  .=  "/beta/cool.php";

include_once($path);

}

?>

```
