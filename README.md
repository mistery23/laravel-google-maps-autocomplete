# Laravel Google-maps autocomplete

## Install
```
composer require mistery23/laravel-google-maps-autocomplete
```

###publish provider
```
php artisan vendor:publish --provider="Mistery23\GoogleMapsAutocomplete\AutocompleteServiceProvider"
```

Create an app and enable Places API and create credentials to get your API key
[https://console.developers.google.com](https://console.developers.google.com)

Add the below to your `.env` file

```shell
GOOGLE_AUTOCOMPLETE_API_KEY=############################
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