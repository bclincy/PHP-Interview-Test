<?php
/*
 * This told to write a method that would put the word in reverse sequential order
 * Input: "I love my new Job at wherever!"
 * Output: "I evol ym wen boJ at reverehw!"
 *
 * Play attention to details because you'll notice the end of the sentence punctuation stayed at the end.
 * Plus the word play, they said a method, but I just wrote a function that could have easily changed into
 * class and method
 *
 */

 class ReverseSentence{
   private $punctionation = ['.', '!', '?', ','];

   public function rewriteSentence($sentence) {
     $words = explode(' ', $sentence);
     // Validate the data
     if (is_array($words)) {
       foreach ($words as $word ) {
           $reversed[] = $this->revString($word);
       }
     }
     elseif (strlen($sentence) > 1) {
       $reversed[] = $this->revString($sentence);
     }
     if (!is_array($reversed)) {
       throw new Exception(ucwords($sentence) . ' - is not a valid sentence');
     }

     return implode(' ', $reversed);
   }

   private function revString ($str)
   {
     $stringCount = strlen($str);
     if ($stringCount <= 1 ) {
         return $string;
     }
     $revtext = '';
     for($i = 0; $i < $stringCount; $i++) {
 //      Move the terminations to the end of the sentence.
         if(!in_array($str[$i], $this->punctionation)){
             $revtext = $str[$i] . $revtext;
             continue;
         }
         $revtext .= $str[$i];
     }

     return $revtext;
   }

 }
 $reverse = new ReverseSentence;
 $string = 'My mom said nobody could ride my bike!';
 echo 'Origin Sentence: ' . $string . "\nReversed Sentence: " . $reverse->rewriteSentence($string) . "\n\n\n";
