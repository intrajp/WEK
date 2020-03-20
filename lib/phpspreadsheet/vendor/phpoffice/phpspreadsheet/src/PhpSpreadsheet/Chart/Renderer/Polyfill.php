<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


// This is a dirty workaround to output JpGraph charts even when antialiasing is not available
if (!function_exists('imageantialias')) {
    function imageantialias(...$args)
    {
        // Do nothing
    }
}
