# Word Occurence
returns array of words in string(sentense) based on number of occurence

## Input

- string

## Usage
```php 
word_occur($string);
```

# Word Restrict 
returns mask restricted words in string

## Input
- string
- array or restricted words
- masking (string - minimum 3 characters)

## Usage
```php
word_restrict($string, $array, $masking);
```

# Word Links
returns string with hyperlink where like-anchor is found

## Input
- string

## Usage
```php
word_links($string);
```

# Word Character Sort
returns array of sorted string by character

## Input
- string

## Usage
```php
word_char_sort($string);
```


# IMPLEMENTATION

```php
//use as trait, extends or include
//feel free to customize
class ClassName extends WordHub {
    function index($request){
        
        $comment = $request['comment']; // you are a bloody fucking negro asshole
        $restrictedWords = array('asshole', 'negro', 'fuck');
        $mask = "####";
        $comment = $this.word_restrict($comment, $restrictedWords);
        
        // returns you are a bloody #### #### ####

    }
}
```