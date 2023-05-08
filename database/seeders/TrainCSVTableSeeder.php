<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainCSVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_file = __DIR__ . '/csv/trains.cvs';

        $trains = $this->getCSV($current_file);

        dd($trains);
    }

    public function getCSV(string $file_stream)
    {

        $labels = [];
        $result = [];

        $row = 1;
        if (($handle = fopen($file_stream, "r")) !== FALSE) {

            while (($data = fgetcsv($handle)) !== FALSE) {

                $current_row = [];
                if ($row === 1) {
                    foreach ($data as $label) {
                        $labels[] = trim(strtolower($label));
                    }
                } else {
                    foreach ($data as $key => $value) {
                        $current_key = $labels[$key];
                        $current_row[$current_key] = $value;
                    }
                    array_push($result, $current_row);
                }

                $row++;
            }

            var_dump($result);

            fclose($handle);
        }
    }
}
