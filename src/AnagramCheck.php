<?php
    class AnagramCheck
    {
        function checkAnagram($input_word, $input_array)
        {
            $output_array = array();

            foreach ($input_array as $key => $word)
            {
                if(count_chars($input_word, 1) == ($input_word, 1));
                {
                    array_push($output_array, $word[$key]);
                }
            }
            return $output_array;
        }
    }
 ?>