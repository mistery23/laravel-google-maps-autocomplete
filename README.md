# Laravel Google-maps autocomplete

## Install
```
composer require mistery23/laravel-google-maps-autocomplete
```

publish provider
```
php artisan vendor:publish --provider="Mistery23\GoogleMapsAutocomplete\AutocompleteServiceProvider"
```

##using

include in your page layout to script section:
```
@autocomplete_scripts() 
```

use for including autocomplete input field:
```
@autocomplete_input('id', 'name', 'label', 'types') 
```

where
'id', 'name', 'label' - is html attributes of input
'types' - is option for search type in google API 