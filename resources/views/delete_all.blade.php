<?php
DB::table('users')->where('id', '<', '54')->delete();
DB::table('contacts')->truncate();

header('Location : /about');
die;