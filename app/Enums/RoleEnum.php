<?php

namespace App\Enums;

enum RoleEnum: string
{
    // System roles
    case ADMIN = 'admin';
    case STUDENT = 'student';
    case LECTURER = 'lecturer';
    case STAFF = 'staff'; // Staff khusus (BAS, BAA, etc)

    // Structural roles
    case ORGANIZATION_ADVISOR = 'organization_advisor';
    case PROGRAM_DIRECTOR = 'program_director';
    case STUDENT_ADVISOR = 'student_advisor';
    case VICE_RECTOR = 'vice_rector';
    case RESOURCE_ADMINISTRATOR = 'resource_administrator';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::STUDENT => 'Mahasiswa',
            self::LECTURER => 'Dosen',
            self::STAFF => 'Staff',
            self::ORGANIZATION_ADVISOR => 'Pembina Organisasi',
            self::PROGRAM_DIRECTOR => 'Kepala Program Studi',
            self::STUDENT_ADVISOR => 'Dosen Kemahasiswaan',
            self::VICE_RECTOR => 'Wakil Rektor',
            self::RESOURCE_ADMINISTRATOR => 'BAS',
        };
    }
}
