<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Master;
use App\Models\Student;
use App\Models\Cord;
use App\Models\StudentCord;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User admin
        User::create([
            'name' => 'Admin Capoeira',
            'email' => 'admin@capoeira.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Masters
        $master1 = Master::create(['name' => 'Mestre Bimba', 'nickname' => 'Bimba', 'graduation' => 'Mestre']);
        $master2 = Master::create(['name' => 'Mestre Pastinha', 'nickname' => 'Pastinha', 'graduation' => 'Mestre']);

        // Cords exemplo
        $cords = [
            ['name' => 'Branca', 'color' => 'branca', 'color_hex' => '#FFFFFF', 'order' => 1, 'is_child' => false],
            ['name' => 'Amarela', 'color' => 'amarela', 'color_hex' => '#FFD700', 'order' => 2, 'is_child' => false],
            ['name' => 'Laranja', 'color' => 'laranja', 'color_hex' => '#FFA500', 'order' => 3, 'is_child' => false],
            // Adicione mais se quiser
        ];
        foreach ($cords as $cordData) {
            Cord::create($cordData);
        }

        // Students exemplo pro master1
        $student1 = Student::create([
            'name' => 'Aluno João', 'birth_date' => '2010-01-01', 'master_id' => $master1->id,
            'started_at' => '2023-01-01', 'photo' => null
        ]);
        StudentCord::create([
            'student_id' => $student1->id, 'cord_id' => 1, 'received_at' => '2023-02-01',
            'baptized_by' => 'Mestre Bimba', 'event_name' => 'Batizado Anual', 'photo_path' => null
        ]);
        StudentCord::create([
            'student_id' => $student1->id, 'cord_id' => 2, 'received_at' => '2023-06-15',
            'baptized_by' => 'Mestre Bimba', 'event_name' => 'Roda de Junho', 'photo_path' => null
        ]);

        // Mais 7 students semelhantes pro master1 e 4 pro master2 (pra não ficar gigante aqui)
        // Você pode expandir no seeder se quiser mais dados
    }
}