Set a prefix titles
===================

You can define a prefix title for all columns of the grid.

## Exemple

```php
<?php
...
$grid->setPrefixTitle($prefixTitle);
...
```

## Class parameters

|parameter|Type|Default value|Description|
|:--:|:--|:--|:--|:--|
|prefixTitle|string|_none_|Prefix title of columns|

## Exemple

```php
<?php
...
$grid->setPrefixTitle('member.field.')
...
```

If you have a column with the identifier field `group`, the column will have the title `member.field.group`.  
In your translation file, put `member.field.group: User group` and the column will be translated to `User group`.

