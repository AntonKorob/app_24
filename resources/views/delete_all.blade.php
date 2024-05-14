<?php
DB::table('contacts')
->where('id', '=', '1')
->orderBy('id', 'DESC')
->take(1)
->delete();

DB::table('contacts')
->truncate();

header('Location : /about');
die();