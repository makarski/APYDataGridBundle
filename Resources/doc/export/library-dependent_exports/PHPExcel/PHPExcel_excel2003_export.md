PHPExcel Excel 2003 export
=================================

File extension = `xlsx`  
Mime type = `application/vnd.ms-excel`

**Note**: This export is limited to 52 columns.

## Usage
```php
<?php
...
use APY\DataGridBundle\Grid\Export\PHPExcel2003Export; 
...
$grid->addExport(new PHPExcel2003Export($title, $fileName, $params, $charset));

$grid->setSource($source);
...
```

**Note**: This parameter must be defined before the source.

#### PHPExcel2003Export::__construct parameters

|parameter|Type|Default value|Description|
|:--:|:--|:--|:--|:--|
|title|string||Title of the export in the selector.|
|fileName|string|export|Name of the export file without the extension.|
|params|array|array()|Additionnal parameters.|
|charset|string|UTF-8|Charset to convert the ouput of the export.|

## Additional parameters for the export

_None_

## Exemple

```php
<?php
...
$grid->addExport(new PHPExcel2003Export('Excel 2003 Export'));

$grid->setSource($source);
...
```

## Configure the export

This export provide the object `objPHPExcel`. You can manipulate this PHPExcel object.  
See the ducmentation `PHPExcel developer documentation.doc` on the [official website](http://phpexcel.codeplex.com/)


```php
<?php
...

$export = new PHPExcel2003Export('Excel 2003 Export');

$export->objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
$export->objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
$export->objPHPExcel->getProperties()->setTitle("Office Test Document");
$export->objPHPExcel->getProperties()->setSubject("Office Test Document");
$export->objPHPExcel->getProperties()->setDescription("Test document for Office, generated using PHP classes.");
$export->objPHPExcel->getProperties()->setKeywords("office php");
$export->objPHPExcel->getProperties()->setCategory("Test result file");

$grid->addExport(export);

$grid->setSource($source);
...
```
