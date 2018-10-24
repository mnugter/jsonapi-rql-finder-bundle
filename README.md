# jsonapi-bundle-rql-finder
An RQL Finder for [paknahad/jsonapi-bundle][1].

This package is only a link between and [paknahad/jsonapi-bundle][1] [andreas-glaser/doctrine-rql][2]

# Installation

```
composer require mnugter/jsonapi-rql-finder-bundle
```

# Usage

Include the RQL filter in the query under rql=

```
http://localhost/api/yourendpoint?rql=RQL string.
```

See https://github.com/xiag-ag/rql-parser/ for documentation on the RQL string.

[1]: https://github.com/paknahad/jsonapi-bundle
[2]: https://github.com/andreas-glaser/doctrine-rql
