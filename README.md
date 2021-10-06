# json-generator
How to Make a Content in php with json api. with fiture how to usage, the content will be added when the json add some field

# How To Usage
1. You Just Need Write The Json And Add Field To Make A New Field
2. You can write the json name or the content of json

# Function
```
// request file json from file and input on variable, requested json file to take the content and field the content
$data = file_get_contents('data/config.json')
```
Requested Json From Folder *DATA* and from file **config.json** to take the json field to make a new path of content. the json made 1 field content to the html page.

```
$content = json_decode($data, true); // $data is variable in file_get_content you can change the name
```
Decode the json to take the **ARRAY**

```
<?php foreach($field as $row) : ?> // to repeat the json
```
Repeat the content, the content will same of your field in json page, make new field json page to add new content 

# Contributors 
The contributor 100% is was [Mhmabotz](https://github.com/mhmabotz) visit their youtube to see the proccess to create this file
Youtube channel was posted soon

The Other Contributor is [CyNetics](https://github.com/CyrusCore) visit their github



