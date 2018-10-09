# jsonapi-bundle-rql-finder
An RQL Finder for paknahad/jsonapi-bundle.

This package is only a link between and paknahad/jsonapi-bundle andreas-glaser/doctrine-rql

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