<?php
namespace App\Helper;
use \Michelf\Markdown;
   class Helper{

       function __construct(){

       }

       public function affBoolean($value){
           if ($value == 0 ) return $this->affIcon("hand-stop");
           else
               return $this->affIcon("hand-ok");
       }

       public function affIcon($name){
           return "<i class='icone icone-$name'></i>";
       }

       public function affLien($href,$text){
           return "<a href='$href'>$text</a>";
       }

       public function affLienImage($href,$text,$icon){
           return $this->affLien($href,$this->affIcon($icon). " ".$text);
       }

       public function parseMarkdown($text){
           return Markdown::defaultTransform($text);
       }
   }