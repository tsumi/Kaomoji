<?php
$kaomoji=array();

// Category: POSITIVE
$category=array();
$category["id"]="positive";

$section=array();
$section["id"]="joy";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);
$kaomoji['category'][]=$category;
$section=array();
$section["id"]="love";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);
$kaomoji['category'][]=$category;
$section=array();
$section["id"]="ebarrassment";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);
$kaomoji['category'][]=$category;

// Category: NEGATIVE
$category=array();
$category["id"]="negative";

$section=array();
$section["id"]="cry";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);

$kaomoji['category'][]=$category;

// Category: NEUTRAL
$category=array();
$category["id"]="neutral";

$section=array();
$section["id"]="cry";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);

$kaomoji['category'][]=$category;

// Category: ANIMALS
$category=array();
$category["id"]="animals";

$section=array();
$section["id"]="cry";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);

$kaomoji['category'][]=$category;

// Category: ACTIONS
$category=array();
$category["id"]="actions";

$section=array();
$section["id"]="cry";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);

$kaomoji['category'][]=$category;

// Category: OTHERS
$category=array();
$category["id"]="others";

$section=array();
$section["id"]="cry";
$section["kaomoji"]=array("(*^ω^)", "(*^ω^)");
$category["sections"]=array($section);

$kaomoji['category'][]=$category;

echo json_encode($kaomoji);
?>
