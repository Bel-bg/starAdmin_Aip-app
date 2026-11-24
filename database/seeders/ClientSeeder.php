<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $clients = [];

        $clients[] = [
            'nom' => 'Abdoulaye Agossou',
            'email' => 'abdoulaye.agossou1@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Ahouansou',
            'email' => 'abdoulaye.ahouansou2@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Aïvadan',
            'email' => 'abdoulaye.aivadan3@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Aïzonou',
            'email' => 'abdoulaye.aizonou4@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Akakpo',
            'email' => 'abdoulaye.akakpo5@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Akomagni',
            'email' => 'abdoulaye.akomagni6@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Amoussou',
            'email' => 'abdoulaye.amoussou7@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Assogba',
            'email' => 'abdoulaye.assogba8@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Azon',
            'email' => 'abdoulaye.azon9@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Boko',
            'email' => 'abdoulaye.boko10@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Dossou',
            'email' => 'abdoulaye.dossou11@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Dovonou',
            'email' => 'abdoulaye.dovonou12@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Gandonou',
            'email' => 'abdoulaye.gandonou13@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Gbaguidi',
            'email' => 'abdoulaye.gbaguidi14@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Glèlè',
            'email' => 'abdoulaye.glele15@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Hodonou',
            'email' => 'abdoulaye.hodonou16@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Hounkpatin',
            'email' => 'abdoulaye.hounkpatin17@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Houngbédji',
            'email' => 'abdoulaye.houngbedji18@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Hounsou',
            'email' => 'abdoulaye.hounsou19@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Kakè',
            'email' => 'abdoulaye.kake20@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Kiki',
            'email' => 'abdoulaye.kiki21@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Kora',
            'email' => 'abdoulaye.kora22@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Koudjo',
            'email' => 'abdoulaye.koudjo23@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Lagnidé',
            'email' => 'abdoulaye.lagnide24@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Lawani',
            'email' => 'abdoulaye.lawani25@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Mèdé',
            'email' => 'abdoulaye.mede26@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Migan',
            'email' => 'abdoulaye.migan27@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Nago',
            'email' => 'abdoulaye.nago28@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Soglo',
            'email' => 'abdoulaye.soglo29@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Abdoulaye Tchibozo',
            'email' => 'abdoulaye.tchibozo30@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Agossou',
            'email' => 'afi.agossou31@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Ahouansou',
            'email' => 'afi.ahouansou32@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Aïvadan',
            'email' => 'afi.aivadan33@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Aïzonou',
            'email' => 'afi.aizonou34@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Akakpo',
            'email' => 'afi.akakpo35@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Akomagni',
            'email' => 'afi.akomagni36@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Amoussou',
            'email' => 'afi.amoussou37@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Assogba',
            'email' => 'afi.assogba38@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Azon',
            'email' => 'afi.azon39@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Boko',
            'email' => 'afi.boko40@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Dossou',
            'email' => 'afi.dossou41@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Dovonou',
            'email' => 'afi.dovonou42@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Gandonou',
            'email' => 'afi.gandonou43@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Gbaguidi',
            'email' => 'afi.gbaguidi44@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Glèlè',
            'email' => 'afi.glele45@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Hodonou',
            'email' => 'afi.hodonou46@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Hounkpatin',
            'email' => 'afi.hounkpatin47@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Houngbédji',
            'email' => 'afi.houngbedji48@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Hounsou',
            'email' => 'afi.hounsou49@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Kakè',
            'email' => 'afi.kake50@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Kiki',
            'email' => 'afi.kiki51@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Kora',
            'email' => 'afi.kora52@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Koudjo',
            'email' => 'afi.koudjo53@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Lagnidé',
            'email' => 'afi.lagnide54@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Lawani',
            'email' => 'afi.lawani55@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Mèdé',
            'email' => 'afi.mede56@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Migan',
            'email' => 'afi.migan57@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Nago',
            'email' => 'afi.nago58@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Soglo',
            'email' => 'afi.soglo59@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Afi Tchibozo',
            'email' => 'afi.tchibozo60@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Agossou',
            'email' => 'aicha.agossou61@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Ahouansou',
            'email' => 'aicha.ahouansou62@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Aïvadan',
            'email' => 'aicha.aivadan63@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Aïzonou',
            'email' => 'aicha.aizonou64@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Akakpo',
            'email' => 'aicha.akakpo65@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Akomagni',
            'email' => 'aicha.akomagni66@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Amoussou',
            'email' => 'aicha.amoussou67@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Assogba',
            'email' => 'aicha.assogba68@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Azon',
            'email' => 'aicha.azon69@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Boko',
            'email' => 'aicha.boko70@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Dossou',
            'email' => 'aicha.dossou71@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Dovonou',
            'email' => 'aicha.dovonou72@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Gandonou',
            'email' => 'aicha.gandonou73@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Gbaguidi',
            'email' => 'aicha.gbaguidi74@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Glèlè',
            'email' => 'aicha.glele75@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Hodonou',
            'email' => 'aicha.hodonou76@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Hounkpatin',
            'email' => 'aicha.hounkpatin77@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Houngbédji',
            'email' => 'aicha.houngbedji78@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Hounsou',
            'email' => 'aicha.hounsou79@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Kakè',
            'email' => 'aicha.kake80@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Kiki',
            'email' => 'aicha.kiki81@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Kora',
            'email' => 'aicha.kora82@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Koudjo',
            'email' => 'aicha.koudjo83@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Lagnidé',
            'email' => 'aicha.lagnide84@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Lawani',
            'email' => 'aicha.lawani85@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Mèdé',
            'email' => 'aicha.mede86@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Migan',
            'email' => 'aicha.migan87@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Nago',
            'email' => 'aicha.nago88@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Soglo',
            'email' => 'aicha.soglo89@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïcha Tchibozo',
            'email' => 'aicha.tchibozo90@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Agossou',
            'email' => 'aissatou.agossou91@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Ahouansou',
            'email' => 'aissatou.ahouansou92@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Aïvadan',
            'email' => 'aissatou.aivadan93@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Aïzonou',
            'email' => 'aissatou.aizonou94@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Akakpo',
            'email' => 'aissatou.akakpo95@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Akomagni',
            'email' => 'aissatou.akomagni96@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Amoussou',
            'email' => 'aissatou.amoussou97@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Assogba',
            'email' => 'aissatou.assogba98@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Azon',
            'email' => 'aissatou.azon99@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Boko',
            'email' => 'aissatou.boko100@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Dossou',
            'email' => 'aissatou.dossou101@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Dovonou',
            'email' => 'aissatou.dovonou102@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Gandonou',
            'email' => 'aissatou.gandonou103@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Gbaguidi',
            'email' => 'aissatou.gbaguidi104@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Glèlè',
            'email' => 'aissatou.glele105@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Hodonou',
            'email' => 'aissatou.hodonou106@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Hounkpatin',
            'email' => 'aissatou.hounkpatin107@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Houngbédji',
            'email' => 'aissatou.houngbedji108@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Hounsou',
            'email' => 'aissatou.hounsou109@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Kakè',
            'email' => 'aissatou.kake110@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Kiki',
            'email' => 'aissatou.kiki111@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Kora',
            'email' => 'aissatou.kora112@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Koudjo',
            'email' => 'aissatou.koudjo113@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Lagnidé',
            'email' => 'aissatou.lagnide114@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Lawani',
            'email' => 'aissatou.lawani115@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Mèdé',
            'email' => 'aissatou.mede116@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Migan',
            'email' => 'aissatou.migan117@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Nago',
            'email' => 'aissatou.nago118@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Soglo',
            'email' => 'aissatou.soglo119@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aïssatou Tchibozo',
            'email' => 'aissatou.tchibozo120@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Agossou',
            'email' => 'alassane.agossou121@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Ahouansou',
            'email' => 'alassane.ahouansou122@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Aïvadan',
            'email' => 'alassane.aivadan123@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Aïzonou',
            'email' => 'alassane.aizonou124@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Akakpo',
            'email' => 'alassane.akakpo125@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Akomagni',
            'email' => 'alassane.akomagni126@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Amoussou',
            'email' => 'alassane.amoussou127@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Assogba',
            'email' => 'alassane.assogba128@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Azon',
            'email' => 'alassane.azon129@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Boko',
            'email' => 'alassane.boko130@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Dossou',
            'email' => 'alassane.dossou131@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Dovonou',
            'email' => 'alassane.dovonou132@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Gandonou',
            'email' => 'alassane.gandonou133@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Gbaguidi',
            'email' => 'alassane.gbaguidi134@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Glèlè',
            'email' => 'alassane.glele135@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Hodonou',
            'email' => 'alassane.hodonou136@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Hounkpatin',
            'email' => 'alassane.hounkpatin137@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Houngbédji',
            'email' => 'alassane.houngbedji138@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Hounsou',
            'email' => 'alassane.hounsou139@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Kakè',
            'email' => 'alassane.kake140@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Kiki',
            'email' => 'alassane.kiki141@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Kora',
            'email' => 'alassane.kora142@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Koudjo',
            'email' => 'alassane.koudjo143@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Lagnidé',
            'email' => 'alassane.lagnide144@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Lawani',
            'email' => 'alassane.lawani145@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Mèdé',
            'email' => 'alassane.mede146@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Migan',
            'email' => 'alassane.migan147@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Nago',
            'email' => 'alassane.nago148@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Soglo',
            'email' => 'alassane.soglo149@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alassane Tchibozo',
            'email' => 'alassane.tchibozo150@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Agossou',
            'email' => 'alexis.agossou151@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Ahouansou',
            'email' => 'alexis.ahouansou152@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Aïvadan',
            'email' => 'alexis.aivadan153@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Aïzonou',
            'email' => 'alexis.aizonou154@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Akakpo',
            'email' => 'alexis.akakpo155@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Akomagni',
            'email' => 'alexis.akomagni156@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Amoussou',
            'email' => 'alexis.amoussou157@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Assogba',
            'email' => 'alexis.assogba158@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Azon',
            'email' => 'alexis.azon159@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Boko',
            'email' => 'alexis.boko160@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Dossou',
            'email' => 'alexis.dossou161@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Dovonou',
            'email' => 'alexis.dovonou162@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Gandonou',
            'email' => 'alexis.gandonou163@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Gbaguidi',
            'email' => 'alexis.gbaguidi164@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Glèlè',
            'email' => 'alexis.glele165@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Hodonou',
            'email' => 'alexis.hodonou166@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Hounkpatin',
            'email' => 'alexis.hounkpatin167@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Houngbédji',
            'email' => 'alexis.houngbedji168@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Hounsou',
            'email' => 'alexis.hounsou169@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Kakè',
            'email' => 'alexis.kake170@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Kiki',
            'email' => 'alexis.kiki171@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Kora',
            'email' => 'alexis.kora172@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Koudjo',
            'email' => 'alexis.koudjo173@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Lagnidé',
            'email' => 'alexis.lagnide174@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Lawani',
            'email' => 'alexis.lawani175@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Mèdé',
            'email' => 'alexis.mede176@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Migan',
            'email' => 'alexis.migan177@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Nago',
            'email' => 'alexis.nago178@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Soglo',
            'email' => 'alexis.soglo179@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alexis Tchibozo',
            'email' => 'alexis.tchibozo180@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Agossou',
            'email' => 'alice.agossou181@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Ahouansou',
            'email' => 'alice.ahouansou182@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Aïvadan',
            'email' => 'alice.aivadan183@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Aïzonou',
            'email' => 'alice.aizonou184@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Akakpo',
            'email' => 'alice.akakpo185@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Akomagni',
            'email' => 'alice.akomagni186@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Amoussou',
            'email' => 'alice.amoussou187@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Assogba',
            'email' => 'alice.assogba188@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Azon',
            'email' => 'alice.azon189@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Boko',
            'email' => 'alice.boko190@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Dossou',
            'email' => 'alice.dossou191@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Dovonou',
            'email' => 'alice.dovonou192@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Gandonou',
            'email' => 'alice.gandonou193@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Gbaguidi',
            'email' => 'alice.gbaguidi194@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Glèlè',
            'email' => 'alice.glele195@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Hodonou',
            'email' => 'alice.hodonou196@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Hounkpatin',
            'email' => 'alice.hounkpatin197@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Houngbédji',
            'email' => 'alice.houngbedji198@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Hounsou',
            'email' => 'alice.hounsou199@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Kakè',
            'email' => 'alice.kake200@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Kiki',
            'email' => 'alice.kiki201@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Kora',
            'email' => 'alice.kora202@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Koudjo',
            'email' => 'alice.koudjo203@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Lagnidé',
            'email' => 'alice.lagnide204@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Lawani',
            'email' => 'alice.lawani205@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Mèdé',
            'email' => 'alice.mede206@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Migan',
            'email' => 'alice.migan207@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Nago',
            'email' => 'alice.nago208@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Soglo',
            'email' => 'alice.soglo209@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Alice Tchibozo',
            'email' => 'alice.tchibozo210@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Agossou',
            'email' => 'aminata.agossou211@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Ahouansou',
            'email' => 'aminata.ahouansou212@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Aïvadan',
            'email' => 'aminata.aivadan213@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Aïzonou',
            'email' => 'aminata.aizonou214@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Akakpo',
            'email' => 'aminata.akakpo215@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Akomagni',
            'email' => 'aminata.akomagni216@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Amoussou',
            'email' => 'aminata.amoussou217@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Assogba',
            'email' => 'aminata.assogba218@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Azon',
            'email' => 'aminata.azon219@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Boko',
            'email' => 'aminata.boko220@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Dossou',
            'email' => 'aminata.dossou221@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Dovonou',
            'email' => 'aminata.dovonou222@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Gandonou',
            'email' => 'aminata.gandonou223@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Gbaguidi',
            'email' => 'aminata.gbaguidi224@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Glèlè',
            'email' => 'aminata.glele225@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Hodonou',
            'email' => 'aminata.hodonou226@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Hounkpatin',
            'email' => 'aminata.hounkpatin227@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Houngbédji',
            'email' => 'aminata.houngbedji228@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Hounsou',
            'email' => 'aminata.hounsou229@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Kakè',
            'email' => 'aminata.kake230@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Kiki',
            'email' => 'aminata.kiki231@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Kora',
            'email' => 'aminata.kora232@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Koudjo',
            'email' => 'aminata.koudjo233@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Lagnidé',
            'email' => 'aminata.lagnide234@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Lawani',
            'email' => 'aminata.lawani235@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Mèdé',
            'email' => 'aminata.mede236@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Migan',
            'email' => 'aminata.migan237@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Nago',
            'email' => 'aminata.nago238@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Soglo',
            'email' => 'aminata.soglo239@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Aminata Tchibozo',
            'email' => 'aminata.tchibozo240@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Agossou',
            'email' => 'arnaud.agossou241@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Ahouansou',
            'email' => 'arnaud.ahouansou242@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Aïvadan',
            'email' => 'arnaud.aivadan243@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Aïzonou',
            'email' => 'arnaud.aizonou244@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Akakpo',
            'email' => 'arnaud.akakpo245@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Akomagni',
            'email' => 'arnaud.akomagni246@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Amoussou',
            'email' => 'arnaud.amoussou247@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Assogba',
            'email' => 'arnaud.assogba248@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Azon',
            'email' => 'arnaud.azon249@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Boko',
            'email' => 'arnaud.boko250@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Dossou',
            'email' => 'arnaud.dossou251@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Dovonou',
            'email' => 'arnaud.dovonou252@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Gandonou',
            'email' => 'arnaud.gandonou253@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Gbaguidi',
            'email' => 'arnaud.gbaguidi254@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Glèlè',
            'email' => 'arnaud.glele255@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Hodonou',
            'email' => 'arnaud.hodonou256@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Hounkpatin',
            'email' => 'arnaud.hounkpatin257@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Houngbédji',
            'email' => 'arnaud.houngbedji258@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Hounsou',
            'email' => 'arnaud.hounsou259@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Kakè',
            'email' => 'arnaud.kake260@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Kiki',
            'email' => 'arnaud.kiki261@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Kora',
            'email' => 'arnaud.kora262@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Koudjo',
            'email' => 'arnaud.koudjo263@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Lagnidé',
            'email' => 'arnaud.lagnide264@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Lawani',
            'email' => 'arnaud.lawani265@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Mèdé',
            'email' => 'arnaud.mede266@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Migan',
            'email' => 'arnaud.migan267@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Nago',
            'email' => 'arnaud.nago268@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Soglo',
            'email' => 'arnaud.soglo269@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Arnaud Tchibozo',
            'email' => 'arnaud.tchibozo270@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Agossou',
            'email' => 'benoit.agossou271@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Ahouansou',
            'email' => 'benoit.ahouansou272@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Aïvadan',
            'email' => 'benoit.aivadan273@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Aïzonou',
            'email' => 'benoit.aizonou274@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Akakpo',
            'email' => 'benoit.akakpo275@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Akomagni',
            'email' => 'benoit.akomagni276@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Amoussou',
            'email' => 'benoit.amoussou277@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Assogba',
            'email' => 'benoit.assogba278@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Azon',
            'email' => 'benoit.azon279@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Boko',
            'email' => 'benoit.boko280@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Dossou',
            'email' => 'benoit.dossou281@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Dovonou',
            'email' => 'benoit.dovonou282@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Gandonou',
            'email' => 'benoit.gandonou283@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Gbaguidi',
            'email' => 'benoit.gbaguidi284@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Glèlè',
            'email' => 'benoit.glele285@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Hodonou',
            'email' => 'benoit.hodonou286@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Hounkpatin',
            'email' => 'benoit.hounkpatin287@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Houngbédji',
            'email' => 'benoit.houngbedji288@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Hounsou',
            'email' => 'benoit.hounsou289@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Kakè',
            'email' => 'benoit.kake290@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Kiki',
            'email' => 'benoit.kiki291@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Kora',
            'email' => 'benoit.kora292@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Koudjo',
            'email' => 'benoit.koudjo293@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Lagnidé',
            'email' => 'benoit.lagnide294@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Lawani',
            'email' => 'benoit.lawani295@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Mèdé',
            'email' => 'benoit.mede296@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Migan',
            'email' => 'benoit.migan297@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Nago',
            'email' => 'benoit.nago298@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Soglo',
            'email' => 'benoit.soglo299@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Benoît Tchibozo',
            'email' => 'benoit.tchibozo300@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Agossou',
            'email' => 'blaise.agossou301@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Ahouansou',
            'email' => 'blaise.ahouansou302@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Aïvadan',
            'email' => 'blaise.aivadan303@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Aïzonou',
            'email' => 'blaise.aizonou304@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Akakpo',
            'email' => 'blaise.akakpo305@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Akomagni',
            'email' => 'blaise.akomagni306@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Amoussou',
            'email' => 'blaise.amoussou307@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Assogba',
            'email' => 'blaise.assogba308@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Azon',
            'email' => 'blaise.azon309@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Boko',
            'email' => 'blaise.boko310@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Dossou',
            'email' => 'blaise.dossou311@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Dovonou',
            'email' => 'blaise.dovonou312@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Gandonou',
            'email' => 'blaise.gandonou313@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Gbaguidi',
            'email' => 'blaise.gbaguidi314@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Glèlè',
            'email' => 'blaise.glele315@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Hodonou',
            'email' => 'blaise.hodonou316@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Hounkpatin',
            'email' => 'blaise.hounkpatin317@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Houngbédji',
            'email' => 'blaise.houngbedji318@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Hounsou',
            'email' => 'blaise.hounsou319@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Kakè',
            'email' => 'blaise.kake320@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Kiki',
            'email' => 'blaise.kiki321@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Kora',
            'email' => 'blaise.kora322@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Koudjo',
            'email' => 'blaise.koudjo323@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Lagnidé',
            'email' => 'blaise.lagnide324@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Lawani',
            'email' => 'blaise.lawani325@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Mèdé',
            'email' => 'blaise.mede326@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Migan',
            'email' => 'blaise.migan327@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Nago',
            'email' => 'blaise.nago328@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Soglo',
            'email' => 'blaise.soglo329@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Blaise Tchibozo',
            'email' => 'blaise.tchibozo330@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Agossou',
            'email' => 'brice.agossou331@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Ahouansou',
            'email' => 'brice.ahouansou332@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Aïvadan',
            'email' => 'brice.aivadan333@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Aïzonou',
            'email' => 'brice.aizonou334@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Akakpo',
            'email' => 'brice.akakpo335@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Akomagni',
            'email' => 'brice.akomagni336@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Amoussou',
            'email' => 'brice.amoussou337@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Assogba',
            'email' => 'brice.assogba338@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Azon',
            'email' => 'brice.azon339@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Boko',
            'email' => 'brice.boko340@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Dossou',
            'email' => 'brice.dossou341@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Dovonou',
            'email' => 'brice.dovonou342@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Gandonou',
            'email' => 'brice.gandonou343@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Gbaguidi',
            'email' => 'brice.gbaguidi344@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Glèlè',
            'email' => 'brice.glele345@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Hodonou',
            'email' => 'brice.hodonou346@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Hounkpatin',
            'email' => 'brice.hounkpatin347@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Houngbédji',
            'email' => 'brice.houngbedji348@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Hounsou',
            'email' => 'brice.hounsou349@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Kakè',
            'email' => 'brice.kake350@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Kiki',
            'email' => 'brice.kiki351@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Kora',
            'email' => 'brice.kora352@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Koudjo',
            'email' => 'brice.koudjo353@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Lagnidé',
            'email' => 'brice.lagnide354@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Lawani',
            'email' => 'brice.lawani355@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Mèdé',
            'email' => 'brice.mede356@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Migan',
            'email' => 'brice.migan357@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Nago',
            'email' => 'brice.nago358@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Soglo',
            'email' => 'brice.soglo359@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Brice Tchibozo',
            'email' => 'brice.tchibozo360@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Agossou',
            'email' => 'celestin.agossou361@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Ahouansou',
            'email' => 'celestin.ahouansou362@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Aïvadan',
            'email' => 'celestin.aivadan363@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Aïzonou',
            'email' => 'celestin.aizonou364@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Akakpo',
            'email' => 'celestin.akakpo365@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Akomagni',
            'email' => 'celestin.akomagni366@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Amoussou',
            'email' => 'celestin.amoussou367@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Assogba',
            'email' => 'celestin.assogba368@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Azon',
            'email' => 'celestin.azon369@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Boko',
            'email' => 'celestin.boko370@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Dossou',
            'email' => 'celestin.dossou371@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Dovonou',
            'email' => 'celestin.dovonou372@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Gandonou',
            'email' => 'celestin.gandonou373@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Gbaguidi',
            'email' => 'celestin.gbaguidi374@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Glèlè',
            'email' => 'celestin.glele375@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Hodonou',
            'email' => 'celestin.hodonou376@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Hounkpatin',
            'email' => 'celestin.hounkpatin377@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Houngbédji',
            'email' => 'celestin.houngbedji378@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Hounsou',
            'email' => 'celestin.hounsou379@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Kakè',
            'email' => 'celestin.kake380@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Kiki',
            'email' => 'celestin.kiki381@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Kora',
            'email' => 'celestin.kora382@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Koudjo',
            'email' => 'celestin.koudjo383@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Lagnidé',
            'email' => 'celestin.lagnide384@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Lawani',
            'email' => 'celestin.lawani385@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Mèdé',
            'email' => 'celestin.mede386@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Migan',
            'email' => 'celestin.migan387@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Nago',
            'email' => 'celestin.nago388@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Soglo',
            'email' => 'celestin.soglo389@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Célestin Tchibozo',
            'email' => 'celestin.tchibozo390@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Agossou',
            'email' => 'chantal.agossou391@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Ahouansou',
            'email' => 'chantal.ahouansou392@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Aïvadan',
            'email' => 'chantal.aivadan393@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Aïzonou',
            'email' => 'chantal.aizonou394@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Akakpo',
            'email' => 'chantal.akakpo395@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Akomagni',
            'email' => 'chantal.akomagni396@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Amoussou',
            'email' => 'chantal.amoussou397@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Assogba',
            'email' => 'chantal.assogba398@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Azon',
            'email' => 'chantal.azon399@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Boko',
            'email' => 'chantal.boko400@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Dossou',
            'email' => 'chantal.dossou401@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Dovonou',
            'email' => 'chantal.dovonou402@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Gandonou',
            'email' => 'chantal.gandonou403@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Gbaguidi',
            'email' => 'chantal.gbaguidi404@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Glèlè',
            'email' => 'chantal.glele405@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Hodonou',
            'email' => 'chantal.hodonou406@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Hounkpatin',
            'email' => 'chantal.hounkpatin407@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Houngbédji',
            'email' => 'chantal.houngbedji408@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Hounsou',
            'email' => 'chantal.hounsou409@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Kakè',
            'email' => 'chantal.kake410@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Kiki',
            'email' => 'chantal.kiki411@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Kora',
            'email' => 'chantal.kora412@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Koudjo',
            'email' => 'chantal.koudjo413@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Lagnidé',
            'email' => 'chantal.lagnide414@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Lawani',
            'email' => 'chantal.lawani415@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Mèdé',
            'email' => 'chantal.mede416@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Migan',
            'email' => 'chantal.migan417@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Nago',
            'email' => 'chantal.nago418@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Soglo',
            'email' => 'chantal.soglo419@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Chantal Tchibozo',
            'email' => 'chantal.tchibozo420@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Agossou',
            'email' => 'christian.agossou421@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Ahouansou',
            'email' => 'christian.ahouansou422@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Aïvadan',
            'email' => 'christian.aivadan423@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Aïzonou',
            'email' => 'christian.aizonou424@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Akakpo',
            'email' => 'christian.akakpo425@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Akomagni',
            'email' => 'christian.akomagni426@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Amoussou',
            'email' => 'christian.amoussou427@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Assogba',
            'email' => 'christian.assogba428@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Azon',
            'email' => 'christian.azon429@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Boko',
            'email' => 'christian.boko430@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Dossou',
            'email' => 'christian.dossou431@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Dovonou',
            'email' => 'christian.dovonou432@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Gandonou',
            'email' => 'christian.gandonou433@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Gbaguidi',
            'email' => 'christian.gbaguidi434@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Glèlè',
            'email' => 'christian.glele435@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Hodonou',
            'email' => 'christian.hodonou436@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Hounkpatin',
            'email' => 'christian.hounkpatin437@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Houngbédji',
            'email' => 'christian.houngbedji438@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Hounsou',
            'email' => 'christian.hounsou439@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Kakè',
            'email' => 'christian.kake440@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Kiki',
            'email' => 'christian.kiki441@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Kora',
            'email' => 'christian.kora442@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Koudjo',
            'email' => 'christian.koudjo443@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Lagnidé',
            'email' => 'christian.lagnide444@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Lawani',
            'email' => 'christian.lawani445@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Mèdé',
            'email' => 'christian.mede446@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Migan',
            'email' => 'christian.migan447@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Nago',
            'email' => 'christian.nago448@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Soglo',
            'email' => 'christian.soglo449@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Christian Tchibozo',
            'email' => 'christian.tchibozo450@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Agossou',
            'email' => 'claudine.agossou451@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Ahouansou',
            'email' => 'claudine.ahouansou452@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Aïvadan',
            'email' => 'claudine.aivadan453@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Aïzonou',
            'email' => 'claudine.aizonou454@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Akakpo',
            'email' => 'claudine.akakpo455@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Akomagni',
            'email' => 'claudine.akomagni456@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Amoussou',
            'email' => 'claudine.amoussou457@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Assogba',
            'email' => 'claudine.assogba458@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Azon',
            'email' => 'claudine.azon459@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Boko',
            'email' => 'claudine.boko460@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Dossou',
            'email' => 'claudine.dossou461@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Dovonou',
            'email' => 'claudine.dovonou462@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Gandonou',
            'email' => 'claudine.gandonou463@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Gbaguidi',
            'email' => 'claudine.gbaguidi464@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Glèlè',
            'email' => 'claudine.glele465@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Hodonou',
            'email' => 'claudine.hodonou466@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Hounkpatin',
            'email' => 'claudine.hounkpatin467@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Houngbédji',
            'email' => 'claudine.houngbedji468@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Hounsou',
            'email' => 'claudine.hounsou469@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Kakè',
            'email' => 'claudine.kake470@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Kiki',
            'email' => 'claudine.kiki471@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Kora',
            'email' => 'claudine.kora472@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Koudjo',
            'email' => 'claudine.koudjo473@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Lagnidé',
            'email' => 'claudine.lagnide474@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Lawani',
            'email' => 'claudine.lawani475@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Mèdé',
            'email' => 'claudine.mede476@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Migan',
            'email' => 'claudine.migan477@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Nago',
            'email' => 'claudine.nago478@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Soglo',
            'email' => 'claudine.soglo479@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Claudine Tchibozo',
            'email' => 'claudine.tchibozo480@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Agossou',
            'email' => 'david.agossou481@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Ahouansou',
            'email' => 'david.ahouansou482@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Aïvadan',
            'email' => 'david.aivadan483@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Aïzonou',
            'email' => 'david.aizonou484@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Akakpo',
            'email' => 'david.akakpo485@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Akomagni',
            'email' => 'david.akomagni486@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Amoussou',
            'email' => 'david.amoussou487@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Assogba',
            'email' => 'david.assogba488@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Azon',
            'email' => 'david.azon489@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Boko',
            'email' => 'david.boko490@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Dossou',
            'email' => 'david.dossou491@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Dovonou',
            'email' => 'david.dovonou492@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Gandonou',
            'email' => 'david.gandonou493@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Gbaguidi',
            'email' => 'david.gbaguidi494@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Glèlè',
            'email' => 'david.glele495@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Hodonou',
            'email' => 'david.hodonou496@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Hounkpatin',
            'email' => 'david.hounkpatin497@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Houngbédji',
            'email' => 'david.houngbedji498@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Hounsou',
            'email' => 'david.hounsou499@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Kakè',
            'email' => 'david.kake500@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Kiki',
            'email' => 'david.kiki501@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Kora',
            'email' => 'david.kora502@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Koudjo',
            'email' => 'david.koudjo503@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Lagnidé',
            'email' => 'david.lagnide504@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Lawani',
            'email' => 'david.lawani505@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Mèdé',
            'email' => 'david.mede506@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Migan',
            'email' => 'david.migan507@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Nago',
            'email' => 'david.nago508@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Soglo',
            'email' => 'david.soglo509@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'David Tchibozo',
            'email' => 'david.tchibozo510@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Agossou',
            'email' => 'desire.agossou511@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Ahouansou',
            'email' => 'desire.ahouansou512@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Aïvadan',
            'email' => 'desire.aivadan513@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Aïzonou',
            'email' => 'desire.aizonou514@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Akakpo',
            'email' => 'desire.akakpo515@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Akomagni',
            'email' => 'desire.akomagni516@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Amoussou',
            'email' => 'desire.amoussou517@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Assogba',
            'email' => 'desire.assogba518@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Azon',
            'email' => 'desire.azon519@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Boko',
            'email' => 'desire.boko520@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Dossou',
            'email' => 'desire.dossou521@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Dovonou',
            'email' => 'desire.dovonou522@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Gandonou',
            'email' => 'desire.gandonou523@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Gbaguidi',
            'email' => 'desire.gbaguidi524@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Glèlè',
            'email' => 'desire.glele525@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Hodonou',
            'email' => 'desire.hodonou526@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Hounkpatin',
            'email' => 'desire.hounkpatin527@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Houngbédji',
            'email' => 'desire.houngbedji528@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Hounsou',
            'email' => 'desire.hounsou529@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Kakè',
            'email' => 'desire.kake530@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Kiki',
            'email' => 'desire.kiki531@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Kora',
            'email' => 'desire.kora532@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Koudjo',
            'email' => 'desire.koudjo533@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Lagnidé',
            'email' => 'desire.lagnide534@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Lawani',
            'email' => 'desire.lawani535@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Mèdé',
            'email' => 'desire.mede536@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Migan',
            'email' => 'desire.migan537@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Nago',
            'email' => 'desire.nago538@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Soglo',
            'email' => 'desire.soglo539@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Désiré Tchibozo',
            'email' => 'desire.tchibozo540@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Agossou',
            'email' => 'edwige.agossou541@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Ahouansou',
            'email' => 'edwige.ahouansou542@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Aïvadan',
            'email' => 'edwige.aivadan543@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Aïzonou',
            'email' => 'edwige.aizonou544@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Akakpo',
            'email' => 'edwige.akakpo545@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Akomagni',
            'email' => 'edwige.akomagni546@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Amoussou',
            'email' => 'edwige.amoussou547@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Assogba',
            'email' => 'edwige.assogba548@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Azon',
            'email' => 'edwige.azon549@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Boko',
            'email' => 'edwige.boko550@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Dossou',
            'email' => 'edwige.dossou551@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Dovonou',
            'email' => 'edwige.dovonou552@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Gandonou',
            'email' => 'edwige.gandonou553@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Gbaguidi',
            'email' => 'edwige.gbaguidi554@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Glèlè',
            'email' => 'edwige.glele555@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Hodonou',
            'email' => 'edwige.hodonou556@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Hounkpatin',
            'email' => 'edwige.hounkpatin557@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Houngbédji',
            'email' => 'edwige.houngbedji558@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Hounsou',
            'email' => 'edwige.hounsou559@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Kakè',
            'email' => 'edwige.kake560@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Kiki',
            'email' => 'edwige.kiki561@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Kora',
            'email' => 'edwige.kora562@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Koudjo',
            'email' => 'edwige.koudjo563@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Lagnidé',
            'email' => 'edwige.lagnide564@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Lawani',
            'email' => 'edwige.lawani565@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Mèdé',
            'email' => 'edwige.mede566@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Migan',
            'email' => 'edwige.migan567@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Nago',
            'email' => 'edwige.nago568@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Soglo',
            'email' => 'edwige.soglo569@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Edwige Tchibozo',
            'email' => 'edwige.tchibozo570@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Agossou',
            'email' => 'elodie.agossou571@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Ahouansou',
            'email' => 'elodie.ahouansou572@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Aïvadan',
            'email' => 'elodie.aivadan573@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Aïzonou',
            'email' => 'elodie.aizonou574@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Akakpo',
            'email' => 'elodie.akakpo575@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Akomagni',
            'email' => 'elodie.akomagni576@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Amoussou',
            'email' => 'elodie.amoussou577@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Assogba',
            'email' => 'elodie.assogba578@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Azon',
            'email' => 'elodie.azon579@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Boko',
            'email' => 'elodie.boko580@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Dossou',
            'email' => 'elodie.dossou581@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Dovonou',
            'email' => 'elodie.dovonou582@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Gandonou',
            'email' => 'elodie.gandonou583@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Gbaguidi',
            'email' => 'elodie.gbaguidi584@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Glèlè',
            'email' => 'elodie.glele585@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Hodonou',
            'email' => 'elodie.hodonou586@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Hounkpatin',
            'email' => 'elodie.hounkpatin587@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Houngbédji',
            'email' => 'elodie.houngbedji588@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Hounsou',
            'email' => 'elodie.hounsou589@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Kakè',
            'email' => 'elodie.kake590@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Kiki',
            'email' => 'elodie.kiki591@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Kora',
            'email' => 'elodie.kora592@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Koudjo',
            'email' => 'elodie.koudjo593@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Lagnidé',
            'email' => 'elodie.lagnide594@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Lawani',
            'email' => 'elodie.lawani595@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Mèdé',
            'email' => 'elodie.mede596@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Migan',
            'email' => 'elodie.migan597@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Nago',
            'email' => 'elodie.nago598@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Soglo',
            'email' => 'elodie.soglo599@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Élodie Tchibozo',
            'email' => 'elodie.tchibozo600@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Agossou',
            'email' => 'emmanuel.agossou601@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Ahouansou',
            'email' => 'emmanuel.ahouansou602@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Aïvadan',
            'email' => 'emmanuel.aivadan603@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Aïzonou',
            'email' => 'emmanuel.aizonou604@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Akakpo',
            'email' => 'emmanuel.akakpo605@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Akomagni',
            'email' => 'emmanuel.akomagni606@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Amoussou',
            'email' => 'emmanuel.amoussou607@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Assogba',
            'email' => 'emmanuel.assogba608@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Azon',
            'email' => 'emmanuel.azon609@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Boko',
            'email' => 'emmanuel.boko610@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Dossou',
            'email' => 'emmanuel.dossou611@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Dovonou',
            'email' => 'emmanuel.dovonou612@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Gandonou',
            'email' => 'emmanuel.gandonou613@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Gbaguidi',
            'email' => 'emmanuel.gbaguidi614@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Glèlè',
            'email' => 'emmanuel.glele615@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Hodonou',
            'email' => 'emmanuel.hodonou616@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Hounkpatin',
            'email' => 'emmanuel.hounkpatin617@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Houngbédji',
            'email' => 'emmanuel.houngbedji618@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Hounsou',
            'email' => 'emmanuel.hounsou619@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Kakè',
            'email' => 'emmanuel.kake620@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Kiki',
            'email' => 'emmanuel.kiki621@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Kora',
            'email' => 'emmanuel.kora622@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Koudjo',
            'email' => 'emmanuel.koudjo623@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Lagnidé',
            'email' => 'emmanuel.lagnide624@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Lawani',
            'email' => 'emmanuel.lawani625@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Mèdé',
            'email' => 'emmanuel.mede626@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Migan',
            'email' => 'emmanuel.migan627@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Nago',
            'email' => 'emmanuel.nago628@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Soglo',
            'email' => 'emmanuel.soglo629@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Emmanuel Tchibozo',
            'email' => 'emmanuel.tchibozo630@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Agossou',
            'email' => 'estelle.agossou631@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Ahouansou',
            'email' => 'estelle.ahouansou632@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Aïvadan',
            'email' => 'estelle.aivadan633@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Aïzonou',
            'email' => 'estelle.aizonou634@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Akakpo',
            'email' => 'estelle.akakpo635@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Akomagni',
            'email' => 'estelle.akomagni636@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Amoussou',
            'email' => 'estelle.amoussou637@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Assogba',
            'email' => 'estelle.assogba638@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Azon',
            'email' => 'estelle.azon639@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Boko',
            'email' => 'estelle.boko640@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Dossou',
            'email' => 'estelle.dossou641@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Dovonou',
            'email' => 'estelle.dovonou642@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Gandonou',
            'email' => 'estelle.gandonou643@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Gbaguidi',
            'email' => 'estelle.gbaguidi644@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Glèlè',
            'email' => 'estelle.glele645@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Hodonou',
            'email' => 'estelle.hodonou646@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Hounkpatin',
            'email' => 'estelle.hounkpatin647@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Houngbédji',
            'email' => 'estelle.houngbedji648@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Hounsou',
            'email' => 'estelle.hounsou649@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Kakè',
            'email' => 'estelle.kake650@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Kiki',
            'email' => 'estelle.kiki651@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Kora',
            'email' => 'estelle.kora652@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Koudjo',
            'email' => 'estelle.koudjo653@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Lagnidé',
            'email' => 'estelle.lagnide654@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Lawani',
            'email' => 'estelle.lawani655@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Mèdé',
            'email' => 'estelle.mede656@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Migan',
            'email' => 'estelle.migan657@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Nago',
            'email' => 'estelle.nago658@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Soglo',
            'email' => 'estelle.soglo659@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Estelle Tchibozo',
            'email' => 'estelle.tchibozo660@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Agossou',
            'email' => 'eulalie.agossou661@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Ahouansou',
            'email' => 'eulalie.ahouansou662@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Aïvadan',
            'email' => 'eulalie.aivadan663@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Aïzonou',
            'email' => 'eulalie.aizonou664@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Akakpo',
            'email' => 'eulalie.akakpo665@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Akomagni',
            'email' => 'eulalie.akomagni666@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Amoussou',
            'email' => 'eulalie.amoussou667@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Assogba',
            'email' => 'eulalie.assogba668@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Azon',
            'email' => 'eulalie.azon669@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Boko',
            'email' => 'eulalie.boko670@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Dossou',
            'email' => 'eulalie.dossou671@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Dovonou',
            'email' => 'eulalie.dovonou672@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Gandonou',
            'email' => 'eulalie.gandonou673@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Gbaguidi',
            'email' => 'eulalie.gbaguidi674@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Glèlè',
            'email' => 'eulalie.glele675@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Hodonou',
            'email' => 'eulalie.hodonou676@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Hounkpatin',
            'email' => 'eulalie.hounkpatin677@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Houngbédji',
            'email' => 'eulalie.houngbedji678@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Hounsou',
            'email' => 'eulalie.hounsou679@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Kakè',
            'email' => 'eulalie.kake680@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Kiki',
            'email' => 'eulalie.kiki681@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Kora',
            'email' => 'eulalie.kora682@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Koudjo',
            'email' => 'eulalie.koudjo683@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Lagnidé',
            'email' => 'eulalie.lagnide684@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Lawani',
            'email' => 'eulalie.lawani685@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Mèdé',
            'email' => 'eulalie.mede686@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Migan',
            'email' => 'eulalie.migan687@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Nago',
            'email' => 'eulalie.nago688@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Soglo',
            'email' => 'eulalie.soglo689@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Eulalie Tchibozo',
            'email' => 'eulalie.tchibozo690@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Agossou',
            'email' => 'fabrice.agossou691@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Ahouansou',
            'email' => 'fabrice.ahouansou692@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Aïvadan',
            'email' => 'fabrice.aivadan693@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Aïzonou',
            'email' => 'fabrice.aizonou694@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Akakpo',
            'email' => 'fabrice.akakpo695@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Akomagni',
            'email' => 'fabrice.akomagni696@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Amoussou',
            'email' => 'fabrice.amoussou697@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Assogba',
            'email' => 'fabrice.assogba698@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Azon',
            'email' => 'fabrice.azon699@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Boko',
            'email' => 'fabrice.boko700@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Dossou',
            'email' => 'fabrice.dossou701@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Dovonou',
            'email' => 'fabrice.dovonou702@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Gandonou',
            'email' => 'fabrice.gandonou703@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Gbaguidi',
            'email' => 'fabrice.gbaguidi704@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Glèlè',
            'email' => 'fabrice.glele705@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Hodonou',
            'email' => 'fabrice.hodonou706@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Hounkpatin',
            'email' => 'fabrice.hounkpatin707@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Houngbédji',
            'email' => 'fabrice.houngbedji708@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Hounsou',
            'email' => 'fabrice.hounsou709@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Kakè',
            'email' => 'fabrice.kake710@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Kiki',
            'email' => 'fabrice.kiki711@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Kora',
            'email' => 'fabrice.kora712@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Koudjo',
            'email' => 'fabrice.koudjo713@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Lagnidé',
            'email' => 'fabrice.lagnide714@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Lawani',
            'email' => 'fabrice.lawani715@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Mèdé',
            'email' => 'fabrice.mede716@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Migan',
            'email' => 'fabrice.migan717@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Nago',
            'email' => 'fabrice.nago718@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Soglo',
            'email' => 'fabrice.soglo719@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fabrice Tchibozo',
            'email' => 'fabrice.tchibozo720@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Agossou',
            'email' => 'fanta.agossou721@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Ahouansou',
            'email' => 'fanta.ahouansou722@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Aïvadan',
            'email' => 'fanta.aivadan723@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Aïzonou',
            'email' => 'fanta.aizonou724@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Akakpo',
            'email' => 'fanta.akakpo725@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Akomagni',
            'email' => 'fanta.akomagni726@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Amoussou',
            'email' => 'fanta.amoussou727@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Assogba',
            'email' => 'fanta.assogba728@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Azon',
            'email' => 'fanta.azon729@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Boko',
            'email' => 'fanta.boko730@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Dossou',
            'email' => 'fanta.dossou731@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Dovonou',
            'email' => 'fanta.dovonou732@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Gandonou',
            'email' => 'fanta.gandonou733@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Gbaguidi',
            'email' => 'fanta.gbaguidi734@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Glèlè',
            'email' => 'fanta.glele735@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Hodonou',
            'email' => 'fanta.hodonou736@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Hounkpatin',
            'email' => 'fanta.hounkpatin737@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Houngbédji',
            'email' => 'fanta.houngbedji738@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Hounsou',
            'email' => 'fanta.hounsou739@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Kakè',
            'email' => 'fanta.kake740@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Kiki',
            'email' => 'fanta.kiki741@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Kora',
            'email' => 'fanta.kora742@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Koudjo',
            'email' => 'fanta.koudjo743@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Lagnidé',
            'email' => 'fanta.lagnide744@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Lawani',
            'email' => 'fanta.lawani745@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Mèdé',
            'email' => 'fanta.mede746@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Migan',
            'email' => 'fanta.migan747@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Nago',
            'email' => 'fanta.nago748@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Soglo',
            'email' => 'fanta.soglo749@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Fanta Tchibozo',
            'email' => 'fanta.tchibozo750@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Agossou',
            'email' => 'felicite.agossou751@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Ahouansou',
            'email' => 'felicite.ahouansou752@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Aïvadan',
            'email' => 'felicite.aivadan753@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Aïzonou',
            'email' => 'felicite.aizonou754@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Akakpo',
            'email' => 'felicite.akakpo755@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Akomagni',
            'email' => 'felicite.akomagni756@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Amoussou',
            'email' => 'felicite.amoussou757@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Assogba',
            'email' => 'felicite.assogba758@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Azon',
            'email' => 'felicite.azon759@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Boko',
            'email' => 'felicite.boko760@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Dossou',
            'email' => 'felicite.dossou761@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Dovonou',
            'email' => 'felicite.dovonou762@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Gandonou',
            'email' => 'felicite.gandonou763@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Gbaguidi',
            'email' => 'felicite.gbaguidi764@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Glèlè',
            'email' => 'felicite.glele765@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Hodonou',
            'email' => 'felicite.hodonou766@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Hounkpatin',
            'email' => 'felicite.hounkpatin767@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Houngbédji',
            'email' => 'felicite.houngbedji768@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Hounsou',
            'email' => 'felicite.hounsou769@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Kakè',
            'email' => 'felicite.kake770@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Kiki',
            'email' => 'felicite.kiki771@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Kora',
            'email' => 'felicite.kora772@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Koudjo',
            'email' => 'felicite.koudjo773@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Lagnidé',
            'email' => 'felicite.lagnide774@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Lawani',
            'email' => 'felicite.lawani775@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Mèdé',
            'email' => 'felicite.mede776@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Migan',
            'email' => 'felicite.migan777@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Nago',
            'email' => 'felicite.nago778@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Soglo',
            'email' => 'felicite.soglo779@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Félicité Tchibozo',
            'email' => 'felicite.tchibozo780@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Agossou',
            'email' => 'florent.agossou781@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Ahouansou',
            'email' => 'florent.ahouansou782@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Aïvadan',
            'email' => 'florent.aivadan783@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Aïzonou',
            'email' => 'florent.aizonou784@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Akakpo',
            'email' => 'florent.akakpo785@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Akomagni',
            'email' => 'florent.akomagni786@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Amoussou',
            'email' => 'florent.amoussou787@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Assogba',
            'email' => 'florent.assogba788@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Azon',
            'email' => 'florent.azon789@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Boko',
            'email' => 'florent.boko790@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Dossou',
            'email' => 'florent.dossou791@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Dovonou',
            'email' => 'florent.dovonou792@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Gandonou',
            'email' => 'florent.gandonou793@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Gbaguidi',
            'email' => 'florent.gbaguidi794@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Glèlè',
            'email' => 'florent.glele795@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Hodonou',
            'email' => 'florent.hodonou796@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Hounkpatin',
            'email' => 'florent.hounkpatin797@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Houngbédji',
            'email' => 'florent.houngbedji798@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Hounsou',
            'email' => 'florent.hounsou799@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Kakè',
            'email' => 'florent.kake800@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Kiki',
            'email' => 'florent.kiki801@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Kora',
            'email' => 'florent.kora802@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Koudjo',
            'email' => 'florent.koudjo803@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Lagnidé',
            'email' => 'florent.lagnide804@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Lawani',
            'email' => 'florent.lawani805@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Mèdé',
            'email' => 'florent.mede806@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Migan',
            'email' => 'florent.migan807@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Nago',
            'email' => 'florent.nago808@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Soglo',
            'email' => 'florent.soglo809@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Florent Tchibozo',
            'email' => 'florent.tchibozo810@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Agossou',
            'email' => 'francoise.agossou811@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Ahouansou',
            'email' => 'francoise.ahouansou812@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Aïvadan',
            'email' => 'francoise.aivadan813@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Aïzonou',
            'email' => 'francoise.aizonou814@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Akakpo',
            'email' => 'francoise.akakpo815@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Akomagni',
            'email' => 'francoise.akomagni816@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Amoussou',
            'email' => 'francoise.amoussou817@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Assogba',
            'email' => 'francoise.assogba818@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Azon',
            'email' => 'francoise.azon819@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Boko',
            'email' => 'francoise.boko820@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Dossou',
            'email' => 'francoise.dossou821@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Dovonou',
            'email' => 'francoise.dovonou822@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Gandonou',
            'email' => 'francoise.gandonou823@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Gbaguidi',
            'email' => 'francoise.gbaguidi824@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Glèlè',
            'email' => 'francoise.glele825@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Hodonou',
            'email' => 'francoise.hodonou826@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Hounkpatin',
            'email' => 'francoise.hounkpatin827@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Houngbédji',
            'email' => 'francoise.houngbedji828@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Hounsou',
            'email' => 'francoise.hounsou829@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Kakè',
            'email' => 'francoise.kake830@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Kiki',
            'email' => 'francoise.kiki831@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Kora',
            'email' => 'francoise.kora832@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Koudjo',
            'email' => 'francoise.koudjo833@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Lagnidé',
            'email' => 'francoise.lagnide834@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Lawani',
            'email' => 'francoise.lawani835@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Mèdé',
            'email' => 'francoise.mede836@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Migan',
            'email' => 'francoise.migan837@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Nago',
            'email' => 'francoise.nago838@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Soglo',
            'email' => 'francoise.soglo839@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Françoise Tchibozo',
            'email' => 'francoise.tchibozo840@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Agossou',
            'email' => 'gabriel.agossou841@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Ahouansou',
            'email' => 'gabriel.ahouansou842@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Aïvadan',
            'email' => 'gabriel.aivadan843@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Aïzonou',
            'email' => 'gabriel.aizonou844@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Akakpo',
            'email' => 'gabriel.akakpo845@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Akomagni',
            'email' => 'gabriel.akomagni846@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Amoussou',
            'email' => 'gabriel.amoussou847@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Assogba',
            'email' => 'gabriel.assogba848@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Azon',
            'email' => 'gabriel.azon849@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Boko',
            'email' => 'gabriel.boko850@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Dossou',
            'email' => 'gabriel.dossou851@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Dovonou',
            'email' => 'gabriel.dovonou852@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Gandonou',
            'email' => 'gabriel.gandonou853@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Gbaguidi',
            'email' => 'gabriel.gbaguidi854@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Glèlè',
            'email' => 'gabriel.glele855@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Hodonou',
            'email' => 'gabriel.hodonou856@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Hounkpatin',
            'email' => 'gabriel.hounkpatin857@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Houngbédji',
            'email' => 'gabriel.houngbedji858@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Hounsou',
            'email' => 'gabriel.hounsou859@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Kakè',
            'email' => 'gabriel.kake860@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Kiki',
            'email' => 'gabriel.kiki861@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Kora',
            'email' => 'gabriel.kora862@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Koudjo',
            'email' => 'gabriel.koudjo863@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Lagnidé',
            'email' => 'gabriel.lagnide864@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Lawani',
            'email' => 'gabriel.lawani865@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Mèdé',
            'email' => 'gabriel.mede866@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Migan',
            'email' => 'gabriel.migan867@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Nago',
            'email' => 'gabriel.nago868@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Soglo',
            'email' => 'gabriel.soglo869@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gabriel Tchibozo',
            'email' => 'gabriel.tchibozo870@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Agossou',
            'email' => 'gildas.agossou871@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Ahouansou',
            'email' => 'gildas.ahouansou872@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Aïvadan',
            'email' => 'gildas.aivadan873@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Aïzonou',
            'email' => 'gildas.aizonou874@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Akakpo',
            'email' => 'gildas.akakpo875@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Akomagni',
            'email' => 'gildas.akomagni876@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Amoussou',
            'email' => 'gildas.amoussou877@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Assogba',
            'email' => 'gildas.assogba878@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Azon',
            'email' => 'gildas.azon879@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Boko',
            'email' => 'gildas.boko880@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Dossou',
            'email' => 'gildas.dossou881@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Dovonou',
            'email' => 'gildas.dovonou882@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Gandonou',
            'email' => 'gildas.gandonou883@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Gbaguidi',
            'email' => 'gildas.gbaguidi884@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Glèlè',
            'email' => 'gildas.glele885@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Hodonou',
            'email' => 'gildas.hodonou886@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Hounkpatin',
            'email' => 'gildas.hounkpatin887@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Houngbédji',
            'email' => 'gildas.houngbedji888@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Hounsou',
            'email' => 'gildas.hounsou889@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Kakè',
            'email' => 'gildas.kake890@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Kiki',
            'email' => 'gildas.kiki891@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Kora',
            'email' => 'gildas.kora892@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Koudjo',
            'email' => 'gildas.koudjo893@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Lagnidé',
            'email' => 'gildas.lagnide894@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Lawani',
            'email' => 'gildas.lawani895@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Mèdé',
            'email' => 'gildas.mede896@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Migan',
            'email' => 'gildas.migan897@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Nago',
            'email' => 'gildas.nago898@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Soglo',
            'email' => 'gildas.soglo899@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Gildas Tchibozo',
            'email' => 'gildas.tchibozo900@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Agossou',
            'email' => 'hermine.agossou901@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Ahouansou',
            'email' => 'hermine.ahouansou902@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Aïvadan',
            'email' => 'hermine.aivadan903@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Aïzonou',
            'email' => 'hermine.aizonou904@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Akakpo',
            'email' => 'hermine.akakpo905@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Akomagni',
            'email' => 'hermine.akomagni906@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Amoussou',
            'email' => 'hermine.amoussou907@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Assogba',
            'email' => 'hermine.assogba908@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Azon',
            'email' => 'hermine.azon909@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Boko',
            'email' => 'hermine.boko910@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Dossou',
            'email' => 'hermine.dossou911@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Dovonou',
            'email' => 'hermine.dovonou912@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Gandonou',
            'email' => 'hermine.gandonou913@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Gbaguidi',
            'email' => 'hermine.gbaguidi914@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Glèlè',
            'email' => 'hermine.glele915@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Hodonou',
            'email' => 'hermine.hodonou916@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Hounkpatin',
            'email' => 'hermine.hounkpatin917@example.com',
            'date_inscription' => '2026-05-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Houngbédji',
            'email' => 'hermine.houngbedji918@example.com',
            'date_inscription' => '2026-06-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Hounsou',
            'email' => 'hermine.hounsou919@example.com',
            'date_inscription' => '2026-07-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Kakè',
            'email' => 'hermine.kake920@example.com',
            'date_inscription' => '2026-08-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Kiki',
            'email' => 'hermine.kiki921@example.com',
            'date_inscription' => '2026-09-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Kora',
            'email' => 'hermine.kora922@example.com',
            'date_inscription' => '2026-10-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Koudjo',
            'email' => 'hermine.koudjo923@example.com',
            'date_inscription' => '2026-11-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Lagnidé',
            'email' => 'hermine.lagnide924@example.com',
            'date_inscription' => '2026-12-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Lawani',
            'email' => 'hermine.lawani925@example.com',
            'date_inscription' => '2026-01-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Mèdé',
            'email' => 'hermine.mede926@example.com',
            'date_inscription' => '2026-02-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Migan',
            'email' => 'hermine.migan927@example.com',
            'date_inscription' => '2026-03-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Nago',
            'email' => 'hermine.nago928@example.com',
            'date_inscription' => '2026-04-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Soglo',
            'email' => 'hermine.soglo929@example.com',
            'date_inscription' => '2026-05-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Hermine Tchibozo',
            'email' => 'hermine.tchibozo930@example.com',
            'date_inscription' => '2026-06-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Agossou',
            'email' => 'idriss.agossou931@example.com',
            'date_inscription' => '2026-07-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Ahouansou',
            'email' => 'idriss.ahouansou932@example.com',
            'date_inscription' => '2026-08-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Aïvadan',
            'email' => 'idriss.aivadan933@example.com',
            'date_inscription' => '2026-09-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Aïzonou',
            'email' => 'idriss.aizonou934@example.com',
            'date_inscription' => '2026-10-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Akakpo',
            'email' => 'idriss.akakpo935@example.com',
            'date_inscription' => '2026-11-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Akomagni',
            'email' => 'idriss.akomagni936@example.com',
            'date_inscription' => '2026-12-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Amoussou',
            'email' => 'idriss.amoussou937@example.com',
            'date_inscription' => '2026-01-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Assogba',
            'email' => 'idriss.assogba938@example.com',
            'date_inscription' => '2026-02-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Azon',
            'email' => 'idriss.azon939@example.com',
            'date_inscription' => '2026-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Boko',
            'email' => 'idriss.boko940@example.com',
            'date_inscription' => '2026-04-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Dossou',
            'email' => 'idriss.dossou941@example.com',
            'date_inscription' => '2026-05-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Dovonou',
            'email' => 'idriss.dovonou942@example.com',
            'date_inscription' => '2026-06-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Gandonou',
            'email' => 'idriss.gandonou943@example.com',
            'date_inscription' => '2026-07-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Gbaguidi',
            'email' => 'idriss.gbaguidi944@example.com',
            'date_inscription' => '2026-08-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Glèlè',
            'email' => 'idriss.glele945@example.com',
            'date_inscription' => '2026-09-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Hodonou',
            'email' => 'idriss.hodonou946@example.com',
            'date_inscription' => '2026-10-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Hounkpatin',
            'email' => 'idriss.hounkpatin947@example.com',
            'date_inscription' => '2026-11-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Houngbédji',
            'email' => 'idriss.houngbedji948@example.com',
            'date_inscription' => '2026-12-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Hounsou',
            'email' => 'idriss.hounsou949@example.com',
            'date_inscription' => '2026-01-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Kakè',
            'email' => 'idriss.kake950@example.com',
            'date_inscription' => '2026-02-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Kiki',
            'email' => 'idriss.kiki951@example.com',
            'date_inscription' => '2026-03-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Kora',
            'email' => 'idriss.kora952@example.com',
            'date_inscription' => '2026-04-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Koudjo',
            'email' => 'idriss.koudjo953@example.com',
            'date_inscription' => '2026-05-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Lagnidé',
            'email' => 'idriss.lagnide954@example.com',
            'date_inscription' => '2026-06-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Lawani',
            'email' => 'idriss.lawani955@example.com',
            'date_inscription' => '2026-07-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Mèdé',
            'email' => 'idriss.mede956@example.com',
            'date_inscription' => '2026-08-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Migan',
            'email' => 'idriss.migan957@example.com',
            'date_inscription' => '2026-09-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Nago',
            'email' => 'idriss.nago958@example.com',
            'date_inscription' => '2026-10-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Soglo',
            'email' => 'idriss.soglo959@example.com',
            'date_inscription' => '2026-11-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Idriss Tchibozo',
            'email' => 'idriss.tchibozo960@example.com',
            'date_inscription' => '2026-12-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Agossou',
            'email' => 'isabelle.agossou961@example.com',
            'date_inscription' => '2026-01-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Ahouansou',
            'email' => 'isabelle.ahouansou962@example.com',
            'date_inscription' => '2026-02-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Aïvadan',
            'email' => 'isabelle.aivadan963@example.com',
            'date_inscription' => '2026-03-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Aïzonou',
            'email' => 'isabelle.aizonou964@example.com',
            'date_inscription' => '2026-04-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Akakpo',
            'email' => 'isabelle.akakpo965@example.com',
            'date_inscription' => '2026-05-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Akomagni',
            'email' => 'isabelle.akomagni966@example.com',
            'date_inscription' => '2026-06-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Amoussou',
            'email' => 'isabelle.amoussou967@example.com',
            'date_inscription' => '2026-07-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Assogba',
            'email' => 'isabelle.assogba968@example.com',
            'date_inscription' => '2026-08-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Azon',
            'email' => 'isabelle.azon969@example.com',
            'date_inscription' => '2026-09-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Boko',
            'email' => 'isabelle.boko970@example.com',
            'date_inscription' => '2026-10-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Dossou',
            'email' => 'isabelle.dossou971@example.com',
            'date_inscription' => '2026-11-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Dovonou',
            'email' => 'isabelle.dovonou972@example.com',
            'date_inscription' => '2026-12-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Gandonou',
            'email' => 'isabelle.gandonou973@example.com',
            'date_inscription' => '2026-01-21',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Gbaguidi',
            'email' => 'isabelle.gbaguidi974@example.com',
            'date_inscription' => '2026-02-22',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Glèlè',
            'email' => 'isabelle.glele975@example.com',
            'date_inscription' => '2026-03-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Hodonou',
            'email' => 'isabelle.hodonou976@example.com',
            'date_inscription' => '2026-04-24',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Hounkpatin',
            'email' => 'isabelle.hounkpatin977@example.com',
            'date_inscription' => '2026-05-25',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Houngbédji',
            'email' => 'isabelle.houngbedji978@example.com',
            'date_inscription' => '2026-06-26',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Hounsou',
            'email' => 'isabelle.hounsou979@example.com',
            'date_inscription' => '2026-07-27',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Kakè',
            'email' => 'isabelle.kake980@example.com',
            'date_inscription' => '2026-08-28',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Kiki',
            'email' => 'isabelle.kiki981@example.com',
            'date_inscription' => '2026-09-01',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Kora',
            'email' => 'isabelle.kora982@example.com',
            'date_inscription' => '2026-10-02',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Koudjo',
            'email' => 'isabelle.koudjo983@example.com',
            'date_inscription' => '2026-11-03',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Lagnidé',
            'email' => 'isabelle.lagnide984@example.com',
            'date_inscription' => '2026-12-04',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Lawani',
            'email' => 'isabelle.lawani985@example.com',
            'date_inscription' => '2026-01-05',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Mèdé',
            'email' => 'isabelle.mede986@example.com',
            'date_inscription' => '2026-02-06',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Migan',
            'email' => 'isabelle.migan987@example.com',
            'date_inscription' => '2026-03-07',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Nago',
            'email' => 'isabelle.nago988@example.com',
            'date_inscription' => '2026-04-08',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Soglo',
            'email' => 'isabelle.soglo989@example.com',
            'date_inscription' => '2026-05-09',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Isabelle Tchibozo',
            'email' => 'isabelle.tchibozo990@example.com',
            'date_inscription' => '2026-06-10',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Agossou',
            'email' => 'jacques.agossou991@example.com',
            'date_inscription' => '2026-07-11',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Ahouansou',
            'email' => 'jacques.ahouansou992@example.com',
            'date_inscription' => '2026-08-12',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Aïvadan',
            'email' => 'jacques.aivadan993@example.com',
            'date_inscription' => '2026-09-13',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Aïzonou',
            'email' => 'jacques.aizonou994@example.com',
            'date_inscription' => '2026-10-14',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Akakpo',
            'email' => 'jacques.akakpo995@example.com',
            'date_inscription' => '2026-11-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Akomagni',
            'email' => 'jacques.akomagni996@example.com',
            'date_inscription' => '2026-12-16',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Amoussou',
            'email' => 'jacques.amoussou997@example.com',
            'date_inscription' => '2026-01-17',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Assogba',
            'email' => 'jacques.assogba998@example.com',
            'date_inscription' => '2026-02-18',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Azon',
            'email' => 'jacques.azon999@example.com',
            'date_inscription' => '2026-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $clients[] = [
            'nom' => 'Jacques Boko',
            'email' => 'jacques.boko1000@example.com',
            'date_inscription' => '2026-04-20',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        foreach (array_chunk($clients, 500) as $chunk) {
            DB::table('clients')->insert($chunk);
        }
    }
}
