<?php

include_once('Category.php');

//Functions
function matchChildren($children, $parent, $newChild){
    foreach($children as $child){
        if ($child->getName() == $parent){
            $child->addChildren(new Category($newChild));
        }else{
            if($child->getChildren()){
                matchChildren($child->getChildren(), $parent, $newChild);
            }
        }
    }
}

function printObject(Category $object, $parent=null, &$result){
    $parent = ($parent) ? $object->getName().' '.$parent : $object->getName().$parent;

    if($object->getChildren()){
        foreach ($object->getChildren() as $c) {
            printObject($c, $parent, $result);
        }
    }else {
        $result[] = $parent;
    }
}

//Options.
$shortopts  = "";

$longopts  = array(
    "file:",     // file input
    "output::"   // file output
);

$options = getopt($shortopts, $longopts);

$fileInput = fopen($options['file'], 'r') or die(">>>>>> File Not Found <<<<<<\n");

$category = null;

while(!feof($fileInput)) {
    $row = preg_replace( "/\r|\n/", "", fgets($fileInput)); //Remove Break Line
    if($row !== ''){
        $row = preg_split("/[\s]+/", $row);

        $parent = $row[0];
        $children = $row[1];

        if($category){
            if($category->getName() == $parent){
                $category->addChildren(new Category($children));
            }else{
                matchChildren($category->getChildren(), $parent, $children);
            }
        }else{
            $category = new Category($parent);
            $category->addChildren(new Category($children));
        }
    }
}
fclose($fileInput);

$toList = [];
printObject($category,'', $toList);
asort($toList);

if(!empty($toList)){
    $filenameOutput = isset($options['output']) ? $options['output'] : $options['file'].'_output';
    $fileOutput = fopen($filenameOutput, 'w');
    foreach ($toList as $element){
        fwrite($fileOutput, "$element\n");
    }
    fclose($fileOutput);

    echo "File result: $filenameOutput\n";
}else{
    echo "No result File";
}

echo ">>>>>> End Proccess <<<<<<\n";
