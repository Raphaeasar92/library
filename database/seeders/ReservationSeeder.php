<?php

use Illuminate\Database\Seeder;
use App\Models\ModelReservation;

class ReservationSeeder extends Seeder
{
    public function run(ModelBook $book)
    {
        $book->create([
            'id_user'=>'1',
            'days'=>'100',
        ]);

        $book->create([
            'id_user'=>'2',
            'days'=>'100',
        ]);

        $book->create([
            'id_user'=>'3',
            'days'=>'100',
        ]);
    }
}