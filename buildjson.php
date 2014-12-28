<?php
$kaomoji=array();

// Category: POSITIVE
$category=array();
$category["id"]="positive";

$section=array();
$section["id"]="joy";
$section["kaomoji"]=array("(*^ω^)", "(-‿‿-)", "(o^▽^o)", "<(￣︶￣)>", "(￣ω￣)", "(o･ω･o)", "(＠＾－＾)", "ヽ(*・ω・)ﾉ", "(^人^)", "(o´▽`o)", "｡ﾟ( ﾟ^∀^ﾟ)ﾟ｡", "(´ω｀)", "(☆▽☆)", "(≧◡≦)", "(´• ω •`)", "(＾▽＾)", "(⌒ω⌒)", "╰(▔∀▔)╯", "(─‿‿─)", "(*^‿^*)", "ヽ(o^―^o)ﾉ", "(✯◡✯)", "(◕‿◕)", "(*≧ω≦*)", "(((o(*ﾟ▽ﾟ*)o)))", "(⌒‿⌒)", "＼(≧▽≦)／", "⌒(o＾▽＾o)ノ", "☆ ～('▽^人)", "(*ﾟ▽ﾟ*)", "(✧ω✧)", "(´｡• ᵕ •｡`)", "(￣▽￣)", "╰(*´︶`*)╯", "o(≧▽≦)o", "(☆ω☆)", "(っ˘ω˘ς )", "｡◕‿◕｡", "( ͡° ͜ʖ ͡°)", "( ⋂‿⋂’)", "(-^〇^-)", "( ﾟ▽ﾟ)/", "（〜^∇^)〜", "(〜￣▽￣)〜", "(・◇・)", "(*‿*✿)", "(*⌒▽⌒*)θ～♪", "(∩▂∩)", "(✌ﾟ∀ﾟ)☞", "＼(^ω^＼)", "(／^ω^)／", "❣◕ ‿ ◕❣", "◉‿◉");
$category["sections"]=array($section);
$kaomoji['category'][]=$category;
$section=array();
$section["id"]="love";
$section["kaomoji"]=array("(ﾉ´з｀)ノ", "(♡μ_μ)", "(*^^*)♡", "☆⌒ヽ(*'､^*)chu", "(￣ε￣＠)", "ヽ(♡‿♡)ノ", "( ´∀｀)ノ～ ♡", "(─‿‿─)♡", "(´ω｀♡)", "( ◡‿◡ ♡)", "(◕‿◕)♡", "(ღ˘⌣˘ღ)", "( ื▿ ืʃƪ)", "(♡ﾟ▽ﾟ♡)", "♡(。-ω-)", "(´ε｀ )♡", "(∩˃o˂∩)♡", "(∿°○°)∿ ︵ ǝʌol", "(灬ºωº灬)♡", "♥ω♥ ) ~♪", "(◞ꈍ∇ꈍ)◞⋆**✚⃞ྉ ");
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
