<?php
    class Find
    {
        function findAndReplace($input_string, $search_word, $replace_word)
        {
            $split_input_string = explode(" ", $input_string);
            foreach ($split_input_string as $word)
            {
                if ($word == $search_word)
                {
                    $var_index = array_search($word, $split_input_string);
                    $split_input_string[$var_index] = $replace_word;
                }

            }
            // echo "is it here? " . $split_input_string;
            $return_string = implode(" ", $split_input_string);
            return $return_string;
        }
    }

?>
