<?php

namespace Database\Seeders;

use App\Models\OwaspCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwaspCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'code' => 'A01:2021',
                'name' => 'Broken Access Control',
                'description' => 'Failures in access control that allow attackers to access unauthorized resources',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A02:2021',
                'name' => 'Cryptographic Failures',
                'description' => 'Failures related to cryptography which often lead to sensitive data exposure',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A03:2021',
                'name' => 'Injection',
                'description' => 'SQL, NoSQL, OS, and LDAP injection vulnerabilities',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A04:2021',
                'name' => 'Insecure Design',
                'description' => 'Flaws in design and architecture that cannot be fixed by proper implementation',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A05:2021',
                'name' => 'Security Misconfiguration',
                'description' => 'Improperly configured permissions, unnecessary features, default accounts',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A06:2021',
                'name' => 'Vulnerable and Outdated Components',
                'description' => 'Using components with known vulnerabilities',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A07:2021',
                'name' => 'Identification and Authentication Failures',
                'description' => 'Weak authentication mechanisms, session management issues',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A08:2021',
                'name' => 'Software and Data Integrity Failures',
                'description' => 'Failures to verify integrity of software updates, critical data, and CI/CD pipelines',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A09:2021',
                'name' => 'Security Logging and Monitoring Failures',
                'description' => 'Insufficient logging, monitoring, and incident response',
                'version' => '2021',
                'is_active' => true,
            ],
            [
                'code' => 'A10:2021',
                'name' => 'Server-Side Request Forgery (SSRF)',
                'description' => 'Forcing a server to make unauthorized requests to internal resources',
                'version' => '2021',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            OwaspCategory::create($category);
        }
    }
}
