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
                    return $word;
                }

            }
        }
    }

?>
