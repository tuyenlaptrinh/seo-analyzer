# PHP SEO Analyzer

With this (Laravel) package you can analyze the on-page SEO.

This package search for the main content to optimze the SEO results for the content that matters. Ex.: A blog post webpage analyze full webpage and only the blog post text.

Webpage:
- Get title
- Get description
- Loadtime

Full page analyze
- code To Text Ratio
- Word Count
- Keywords
- Long tail keywords
- Headers (H1, H2, ...): Count, word count, keywords, long tail keywords
- Links: Count, word count, keywords, long tail keywords, internal links, external links, follow, nofollow
- images: Count, Count with alt text, Count words in alt text, keywords, long tail keywords
 
Detect main content
- code To Text Ratio
- Word Count
- Keywords
- Long tail keywords
- Headers (H1, H2, ...): Count, word count, keywords, long tail keywords
- Links: Count, word count, keywords, long tail keywords, internal links, external links, follow, nofollow
- images: Count, Count with alt text, Count words in alt text, keywords, long tail keywords
 

# Installation

Require this package in your `composer.json` and update composer.

```php
"tuyenlaptrinh/seo-analyzer": "^0.8"
```

# Documentation
## Usage
```php
use Tuyenlaptrinh\SeoAnalyzer\SeoFacade as SEO;

SEO::analyze('https://www.youtube.com');
```

If you already have the HTML content of the page:
```php
use Tuyenlaptrinh\SeoAnalyzer\SeoFacade as SEO;
$html = "<html>....</html>";
SEO::analyze('https://www.youtube.com', $html);
```

# Contributing
Please try to follow the psr-2 coding style guide. http://www.php-fig.org/psr/psr-2/

# License
This package is licensed under LGPL. You are free to use it in personal and commercial projects. The code can be forked and modified, but the original copyright author should always be included!
