Gitdown
=======

A PHP Class to Beautify and Syntax Highlight Github Style Markdown Utilizing the Github v3 API
Includes Markdown and Pygments CSS
Github风格的markdown解析器。使用Github v3 API。

Example:
```php

  $markdown = file_get_contents('my-markdown-doc.md');
  $html = Gitdown::pretty($markdown);


```
usage:

put the `.md` file to the directory, then visit in broswer ,i.e. `framework.md`  `http://localhost/?s=framework`